<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Produtos;
use Illuminate\Support\Facades\DB;

class dbimportMysql extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importMysql:db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importar dados para banco de dados Mysql';

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
        echo 'Processando, aguarde alguns segundos';

        DB::table('produtos')->truncate();
        $file = str_replace("\\", "/", storage_path('arquivos/dataset-processo-seletivo-2019.csv'));
        $query = "LOAD DATA LOCAL INFILE '".$file."' 
                  INTO TABLE produtos 
                  FIELDS TERMINATED BY ','
                  LINES TERMINATED BY '\\n'
                  IGNORE 1 ROWS
                 ";
        DB::connection()->getpdo()->exec($query);

        return 'Concluido';
    }
}
