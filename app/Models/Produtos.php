<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    public $table = 'produtos';

    public $fillable = ['cod_gtin,
                        dat_emissao,
                        cod_tipo_pagamento,
                        cod_produto,
                        cod_ncm,
                        cod_unidade,
                        dsc_produto,
                        vlr_unitario,
                        id_estabelecimento,
                        nme_estabelecimento,
                        nme_logradouro,
                        cod_numero_logradouro,
                        nme_complemento,
                        nme_bairro,
                        cod_municipio_ibge,
                        nme_municipio,
                        nme_sigla_uf,
                        cod_cep,
                        num_latitude,
                        num_longitude,
                        '];

    public $timestamps = false;

}
