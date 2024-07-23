<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('position', function (Blueprint $table) {
            $table->id();
            $table->string('position_id')->unique();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('position')->insert([
            'position_id' => 'POS30722',
            'name' => 'Governor',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('position')->insert([
            'position_id' => 'POS71962',
            'name' => 'Vice president',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('position')->insert([
            'position_id' => 'POS50723',
            'name' => 'President',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('position')->insert([
            'position_id' => 'POS27724',
            'name' => 'Senator',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('position')->insert([
            'position_id' => 'POS15836',
            'name' => 'Vice Governor',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('position')->insert([
            'position_id' => 'POS71264',
            'name' => 'SBO Secretary',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('position')->insert([
            'position_id' => 'POS77261',
            'name' => 'Treasurer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('position')->insert([
            'position_id' => 'POS70389',
            'name' => 'Associate Secretary',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('position')->insert([
            'position_id' => 'POS31200',
            'name' => 'Associate Treasurer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('position')->insert([
            'position_id' => 'POS20338',
            'name' => 'Auditor',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('position')->insert([
            'position_id' => 'POS49266',
            'name' => 'Public Relation Officer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('position')->insert([
            'position_id' => 'POS32377',
            'name' => '2nd year Representative',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('position')->insert([
            'position_id' => 'POS12268',
            'name' => '3rd year Representative',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('position')->insert([
            'position_id' => 'POS19029',
            'name' => '4th year Representative',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::drop('position');
    }
};
