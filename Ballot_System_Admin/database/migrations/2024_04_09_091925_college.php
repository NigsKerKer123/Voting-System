<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('college', function (Blueprint $table) {
            $table->id();
            $table->string('college_id')->unique();
            $table->string('name');
            $table->string('acronym');
            $table->timestamps();
        });

        DB::table('college')->insert([
            'college_id' => 'COL42821',
            'name' => 'College of Technologies',
            'acronym' => 'COT',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('college')->insert([
            'college_id' => 'COL25032',
            'name' => 'College of Nursing',
            'acronym' => 'CON',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('college')->insert([
            'college_id' => 'COL92907',
            'name' => 'College of Arts and Sciences',
            'acronym' => 'CAS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('college')->insert([
            'college_id' => 'COL11864',
            'name' => 'College of Education',
            'acronym' => 'COE',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('college')->insert([
            'college_id' => 'COL89518',
            'name' => 'College of Business',
            'acronym' => 'COB',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('college')->insert([
            'college_id' => 'COL30246',
            'name' => 'College of Public Administration and Governance',
            'acronym' => 'CPAG',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('college')->insert([
            'college_id' => 'COL45862',
            'name' => 'University',
            'acronym' => 'ALL',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::drop('college');
    }
};
