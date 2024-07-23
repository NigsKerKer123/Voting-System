<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('organization', function (Blueprint $table) {
            $table->id();
            $table->string('organization_id');
            $table->string('name');
            $table->string('acronym');
            $table->timestamps();
        });

        DB::table('organization')->insert([
                'organization_id' => 'ORG42357',
                'name' => 'Student Body Organization',
                'acronym' => 'SBO',
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        DB::table('organization')->insert([
            'organization_id' => 'ORG27083',
            'name' => 'Supreme Student Council',
            'acronym' => 'SSC',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::drop('organization');
    }
};
