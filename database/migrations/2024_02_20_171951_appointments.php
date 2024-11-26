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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_doctor');
            $table->integer('id_category');
            $table->date('date');
            $table->time('time');
            $table->integer('result')->default(0);
            $table->string('attachment')->default('0');
            $table->string('description')->default('Нет');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
