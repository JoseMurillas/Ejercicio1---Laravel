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
        Schema::create('tabla1', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre',100)->nullable(false);
            $table->string('direccion',100)->nullable(false);
            $table->string('telefono',10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla1');
    }
};
