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
        Schema::create('témas', function (Blueprint $table) {
            $table->id();
            $table->string( 'temanev');
            $table->timestamps();
        });
        DB::table('témas')->insert(['temanev'=>'foods']);
        DB::table('témas')->insert(['temanev'=>'games']);
        DB::table('témas')->insert(['temanev'=>'wather']);

    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('témas');
    }
};
