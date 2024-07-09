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
        //
        Schema::create('system', function (Blueprint $table) {
            $table->id();
            $table->text('wherefor')->nullable();
            $table->text('name');
            $table->text('value');
        });

        DB::table('system')->insert([
            'wherefor' => 'favoritename',
            'name' => 'sitename',
            'value' => 'Geldbegeleiding',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system');
    }
};