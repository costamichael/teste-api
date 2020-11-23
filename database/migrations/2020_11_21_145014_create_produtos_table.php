<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->integer('COD_GTIN')->unsigned()->index();
            $table->date('DAT_EMISSAO');
            $table->integer('COD_TIPO_PAGAMENTO')->unsigned();
            $table->integer('COD_PRODUTO')->unsigned();
            $table->integer('COD_NCM')->unsigned();
            $table->string('COD_UNIDADE');
            $table->integer('DSC_PRODUTO');
            $table->integer('VLR_UNITARIO');
            $table->integer('ID_ESTABELECIMENTO')->unsigned();
            $table->string('NME_ESTABELECIMENTO');
            $table->string('NME_LOGRADOURO');
            $table->integer('COD_NUMERO_LOGRADOURO')->unsigned();
            $table->string('NME_COMPLEMENTO')->nullable();
            $table->string('NME_BAIRRO');
            $table->integer('COD_MUNICIPIO_IBGE')->unsigned();
            $table->string('NME_MUNICIPIO');
            $table->string('NME_SIGLA_UF');
            $table->integer('COD_CEP')->unsigned();
            $table->integer('NUM_LATITUDE');
            $table->integer('NUM_LONGITUDE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
