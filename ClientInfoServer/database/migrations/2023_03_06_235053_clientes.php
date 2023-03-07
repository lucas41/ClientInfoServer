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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('tipo')->notnull();
            $table->string('razao')->notnull();
            $table->string('fantasia');
            $table->string('id_base');
            $table->string('telefone');
            $table->string('email');
            $table->string('contato');
            $table->string('implantacao');
            $table->string('debxweb');
            $table->string('obs');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
