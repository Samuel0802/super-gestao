<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Adicionando chaves estrangeiras (Relacionamento muito para muitos)

    public function up(): void
    {
        //criando a tabela filiais
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial',100);
            $table->timestamps();
        });

         //criando a tabela produto_filiais
         Schema::create('produto_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_venda', 8,2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
            $table->timestamps();


            //foreign key (constraints)

            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });


        //removendo a coluna da tabela produtos

        Schema::table('produtos', function (Blueprint $table) {
            //
          $table->dropColumn(['preco_venda'],['estoque_minimo'],['estoque_maximo']);
        });
    }


    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
          $table->decimal('preco_venda', 8,2);
          $table->integer('estoque_minimo');
          $table->integer('estoque_maximo');

        });

        Schema::dropIfExists('produto_filiais');
        Schema::dropIfExists('filiais');
    }
};
