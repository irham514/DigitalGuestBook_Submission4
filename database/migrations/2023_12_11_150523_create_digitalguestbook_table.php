<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     // Submission 4
    public function up(): void
    {
        Schema::create('digitalguestbook', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('from', 200)->nullable();
            $table->string('email');
            $table->string('phone number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('digitalguestbook');
    }
};
