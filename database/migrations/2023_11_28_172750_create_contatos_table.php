<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string("nome");
            $table->string("telefone")->unique();
            $table->string("email")->unique();
            $table->string("cep");
            $table->string("rua");
            $table->string("numero");
            $table->string("complemento")->nullable();
            $table->string("bairro");
            $table->string("cidade");
            $table->string("estado");
            $table->text("nota");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
