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
        Schema::create('detailtrans', function (Blueprint $table) {
            $table->id('detailtrans_id');
            $table->foreign('transaction_id')->references('transaction_id')->on('transaction');
            $table->foreign('game_id')->references('game_id')->on('games');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailtrans');
    }
};
