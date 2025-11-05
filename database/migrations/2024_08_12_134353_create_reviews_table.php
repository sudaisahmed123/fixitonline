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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('workerid');
            $table->string('ReviewName');
            $table->string('ReviewEmail');
            $table->integer('Rating');
            $table->string('ReviewComment');
            $table->timestamps();
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('workerid')->references('id')->on('approved_workers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
