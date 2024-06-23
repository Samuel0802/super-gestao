<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        //table: caso precise criar uma nova coluna na tabela motivo_contatos
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contatos_id');
        });
  //metodo: statemet permite executar uma query no banco de dados
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');

        //criando a fk e revendo a coluna motivo_contato
        Schema::table('site_contatos', function (Blueprint $table) {
              // indica que site_contatos_id' faz referência à coluna id da tabela motivo_contatos
            $table->foreign('site_contatos_id')->references('id')->on('motivo_contatos');
          //  remover uma coluna motivo_contato da  tabela  site_contatos
            $table->dropColumn('motivo_contato');

        });
    }

    public function down(): void
    {
          //criar a coluna motivo_contato e revendo a fk
          Schema::table('site_contatos', function (Blueprint $table) {
          $table->integer('motivo_contato');
          //$table->dropforeign('<tabela>_<coluna>_foreign');
          $table->dropforeign('site_contatos_motivo_contatos_id_foreign');

           //atribuindo motivo_contatos_id para a coluna motivo_contato
          DB::statement('update site_contatos set  = motivo_contato =');

 //table: caso precise criar uma nova coluna na tabela motivo_contatos
 Schema::table('site_contatos', function (Blueprint $table) {
    $table->dropColumn('motivo_contatos_id');
});

      });
    }
};
