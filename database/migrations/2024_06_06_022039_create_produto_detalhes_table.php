<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        //Adicionando chaves estrangeiras para tabela produtos
        //Relação entre tabela produtos_detalhes com tabela produtos
        //Relacionamento de um pra um

        //unsignedBigInteger: não receber valores negativos e com uma grande instancia de dados


        if (!Schema::hasTable('produto_detalhes')) {
            Schema::create('produto_detalhes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('produto_id');
                $table->float('comprimento', 8, 2);
                $table->float('largura', 8, 2);
                $table->float('altura', 8, 2);
                $table->timestamps();

                // constraint
                // indica que produto_id faz referência à coluna id da tabela produtos
                $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
            });
        }
    }


    public function down(): void
    {
        Schema::dropIfExists('produto_detalhes');
    }
};
