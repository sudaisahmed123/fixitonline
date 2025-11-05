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
            $table->string('fullName');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('date');
            $table->string('time');
            $table->string('area')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('code')->nullable();
            $table->string('status')->default('pending');
            $table->decimal('latitude',10,7);
            $table->decimal('longitude',10,7);
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('workerid');
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
        Schema::dropIfExists('appointments');
    }
};
