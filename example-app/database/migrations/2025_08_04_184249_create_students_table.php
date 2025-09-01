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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('address',50);
            $table->string('email',50)->unique;
            $table->string('phone',15);
            $table->string('dob')->nullable;
            $table->string('semester')->default(1);
            $table->timestamps();
        });
    }

    


    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::dropIfExists('students');
    // }

    public function down(): void
    {
        Schema::table('students');
    }
};


