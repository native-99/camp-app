<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();

            // 1st method
            // $table->bigInteger('camp_id')->unsigned();
            // $table->unsignedBigInteger('camp_id');
            // $table->foreign(columns: 'camp_id')->references('id')->on('camps')->onDelete('cascade');

            // 2st method

            $table->foreignId('camp_id')->constrained();


            $table->string('name');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camp_benefits');
    }
};
