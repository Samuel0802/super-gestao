<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   // Adicionando chaves estrangeiras (Relacionamento um para muitos tabela produtos)
    public function up(): void
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidades',5);//cm, mm,kg
            $table->string('descricao',200);
            $table->timestamps();
        });


        //adicionar o relacionamento com a tabela produtos
        //adicionando uma nova coluna chamada "unidade_id" na  tabela produtos.
        Schema::table('produtos', function (Blueprint $table) {
         $table->unsignedBigInteger('unidade_id');
         $table->foreign('unidade_id')->references('id')->on('unidades');
        });

       //adicionar o relacionamento com a tabela produtos_detalhes
       //adicionando uma nova coluna chamada "unidade_id" na  tabela produto_detalhes.
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
           });
    }




    public function down(): void
    {

          //remove o relacionamento com a tabela produtos_detalhes
          Schema::table('produto_detalhes', function (Blueprint $table) {

           //remover a fk
           $table->dropForeign('produto_detalhes_unidade_id_foreign'); //padrão laravel: [table]_[coluna]_foreign

           //remove a coluna unidade_id
           $table->dropColumn('unidade_id');

            $table->unsignedBigInteger('unidade_id');
            //foreign('unidade_id') é um método usado para definir uma restrição de chave estrangeira
            $table->foreign('unidade_id')->references('id')->on('unidades');
           });


         //remove o relacionamento com a tabela produtos
         Schema::table('produtos', function (Blueprint $table) {

            //remover a fk
            $table->dropForeign('produtos_unidade_id_foreign'); //padrão laravel: [table]_[coluna]_foreign

            //remove a coluna unidade_id
            $table->dropColumn('unidade_id');

             $table->unsignedBigInteger('unidade_id');
             //foreign('unidade_id') é um método usado para definir uma restrição de chave estrangeira
             $table->foreign('unidade_id')->references('id')->on('unidades');
            });

        Schema::dropIfExists('unidades');
    }
};
