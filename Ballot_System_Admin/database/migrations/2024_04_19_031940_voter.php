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
        Schema::create('voter', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->unique();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('course');
            $table->string('college');
            $table->string('passkey')->unique();
            $table->boolean('casted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('voter');
    }
};
