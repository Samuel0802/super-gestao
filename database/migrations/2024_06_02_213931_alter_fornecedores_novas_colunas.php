<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        //criar uma nova tabela
        // table: seleciona uma tabela já existente no banco
        // E criar mais colunas php artisan migrate
        Schema::table('fornecedores_tablet', function (Blueprint $table) {
          $table->string('uf',2);
          $table->string('email',150);
        });
    }

  
    public function down(): void
    {
      
    }
};
