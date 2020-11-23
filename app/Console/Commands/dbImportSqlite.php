<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Produtos;
use Illuminate\Support\Facades\DB;

class dbImportSqlite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importSqlite:db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importar banco de dados para SQLite';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        /**
        * IMPORTAR DADOS PARA MYSQL.
        * ESSE PROCESSO É O MAIS RÁPIDO.
        **/

        DB::table('produtos')->truncate();
        DB::statement('vacuum');

        if (($file = new \SplFileObject(storage_path('arquivos/dataset-processo-seletivo-2019.csv'), 'r')) !== FALSE)
        {
            $file->seek(1);
            echo 'Inserindo dados no banco, isso pode demorar um pouco...';
            while ($file->eof() === false)
            {
                $produto = new produtos();

                $produto->cod_gtin              = $file->fgetcsv()[0];
                $produto->dat_emissao           = $file->fgetcsv()[1];
                $produto->cod_tipo_pagamento    = $file->fgetcsv()[2];
                $produto->cod_produto           = $file->fgetcsv()[3];
                $produto->cod_ncm               = $file->fgetcsv()[4];
                $produto->cod_unidade           = $file->fgetcsv()[5];
                $produto->dsc_produto           = $file->fgetcsv()[6];
                $produto->vlr_unitario          = $file->fgetcsv()[7];
                $produto->id_estabelecimento    = $file->fgetcsv()[8];
                $produto->nme_estabelecimento   = $file->fgetcsv()[9];
                $produto->nme_logradouro        = $file->fgetcsv()[10];
                $produto->cod_numero_logradouro = $file->fgetcsv()[11];
                $produto->nme_complemento       = $file->fgetcsv()[12];
                $produto->nme_bairro            = $file->fgetcsv()[13];
                $produto->cod_municipio_ibge    = $file->fgetcsv()[14];
                $produto->nme_municipio         = $file->fgetcsv()[15];
                $produto->nme_sigla_uf          = $file->fgetcsv()[16];
                $produto->cod_cep               = $file->fgetcsv()[17];
                $produto->num_latitude          = $file->fgetcsv()[18];
                $produto->num_longitude         = $file->fgetcsv()[19];

                $produto->save();
            }
            return 'Importado com Sucesso!';
        }
        /**
        * FIM - IMPORTAR DADOS PARA SQLITE.
        **/
    }
}
