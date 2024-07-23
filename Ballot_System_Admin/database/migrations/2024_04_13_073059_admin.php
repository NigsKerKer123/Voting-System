<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin', function (Blueprint $table) {
        $table->id();
        $table->string('student_id')->unique();
        $table->string('email')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('name');
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
        });

        DB::table('admin')->insert([
            'student_id' => '129304720',
            'email' => 'bebekirk123@gmail.com',
            'name' => 'Kirk John L. Sieras',
            'password' => bcrypt('gwaposikirk123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('admin')->insert([
            'student_id' => '12345678',
            'email' => 'admin123@gmail.com',
            'name' => 'Admin',
            'password' => bcrypt('gwapoko123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::drop('admin');
    }
};
