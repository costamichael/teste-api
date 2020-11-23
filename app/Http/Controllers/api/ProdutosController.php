<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produtos;
use Illuminate\Auth\Access\Response;

class ProdutosController extends Controller
{

    public function index($gtin)
    {
        $produtos = Produtos::where('cod_gtin', '=', $gtin)
            ->where('vlr_unitario', '>', 0)
            ->where('num_latitude', '!=', '')
            ->groupBy('id_estabelecimento')
            ->orderBy('dat_emissao', 'DESC')
            ->orderBy('vlr_unitario', 'ASC')
            ->get();
        if($produtos->count() <= 0) {
            return response()->json([
                'message'   => 'Produto não encontrado',
            ], 404);
        }

        $this->addLocation($produtos);

        return response()->json($produtos);
    }

    public function addLocation($produtos)
    {
        foreach ($produtos as $produto)
        {
            $produto->location = "https://maps.google.com/?q=".$produto->NUM_LATITUDE.",".$produto->NUM_LONGITUDE;
        }

        return $produtos;
    }

}
