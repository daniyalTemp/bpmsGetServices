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
        Schema::create('degrees', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('nationalCode')->nullable();
            $table->string('stNumber')->nullable();
            $table->string('grade')->nullable();
            $table->string('major')->nullable();
            $table->string('tracking')->nullable();
            $table->enum('status' , ['wait' ,'free' , 'debt'])->nullable();
            $table->string('debt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('degrees');

    }
};
