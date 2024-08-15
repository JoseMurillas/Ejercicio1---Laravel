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
        Schema::create('tabla2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('correo', 100)->unique()->nullable(false);
            $table->string('edad', 100)->nullable(false);
            $table->string('curso',100)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla2');
    }
};
