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
        Schema::create('test_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_id')->constrained('tests');
            $table->foreignId('option_id')->nullable()->unsigned();
            $table->integer('poin');
            $table->string('option_information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_details');
    }
};
