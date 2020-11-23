<?php

Route::group(['prefix' => 'v1/produtos', 'as' => 'produtos.'], function(){

    Route::get('/{gtin}', ['as' =>    'index',   'uses' =>   'api\ProdutosController@index']);

});