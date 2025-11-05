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
        Schema::create('approved_workers', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('PhoneNumber');
            $table->string('password');
            $table->string('confirmpassword');
            $table->string('age');
            $table->string('city');
            $table->string('state');
            $table->string('Date');
            $table->string('Gender');
            $table->string('Bio');
            $table->string('role')->default('Pending...');
            $table->string('Category');
            $table->string('profilePic');
            $table->string('FileUpload');
              $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approved_workers');
    }
};
