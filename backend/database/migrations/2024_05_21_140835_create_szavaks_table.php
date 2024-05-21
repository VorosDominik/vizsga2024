<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string('Angol');
            $table->string('magyar');
            $table->foreignId('temaId')->references('id')->on('témas');
            $table->timestamps();
        }); 
        DB::table('szavaks')->insert([
            'Angol' => 'spagetti',  
            'magyar'=>'spagetti',
            'temaId' =>1  
           
        ]);
        DB::table('szavaks')->insert([
            'Angol' => 'thunder',  
            'magyar'=>'vihar',
            'temaId' =>3  
           
        ]);
        DB::table('szavaks')->insert([
            'Angol' => 'footbal',  
            'magyar'=>'foci',
            'temaId' =>2  
           
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
