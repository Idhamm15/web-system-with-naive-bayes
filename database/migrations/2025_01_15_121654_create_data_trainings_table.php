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
        Schema::create('data_trainings', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('usia');
            $table->string('jenis_kelamin');
            $table->string('tussis');
            $table->string('febris');
            $table->string('selesma');
            $table->string('gastreonteritis');
            $table->string('colic_abdomen');
            $table->string('polyuria');
            $table->string('polydipsia');
            $table->string('weakness');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_trainings');
    }
};
