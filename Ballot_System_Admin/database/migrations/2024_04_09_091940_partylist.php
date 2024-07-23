<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partylist', function (Blueprint $table) {
            $table->id();
            $table->string('partylist_id')->unique();
            $table->string('name');
            $table->string('acronym')->nullable();
            $table->timestamps();
        });

        DB::table('partylist')->insert([
            'partylist_id' => 'PRTY53565',
            'name' => 'CASALIGAN',
            'acronym' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('partylist')->insert([
            'partylist_id' => 'PRTY34321',
            'name' => 'PANGINDAHAY',
            'acronym' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('partylist')->insert([
            'partylist_id' => 'PRTY47789',
            'name' => 'SINAGTALA',
            'acronym' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],);

        DB::table('partylist')->insert([
            'partylist_id' => 'PRTY25492',
            'name' => 'INDEPENDENT',
            'acronym' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('partylist')->insert([
            'partylist_id' => 'PRTY24898',
            'name' => 'SILAB',
            'acronym' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::drop('partylist');
    }
};
