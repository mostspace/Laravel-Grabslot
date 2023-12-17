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
        Schema::create('tbl_store_data_by_date', function (Blueprint $table) {
            $table->id();
            $table->integer('store_id');
            $table->string('url');
            $table->string('date');
            $table->string('total-diff');
            $table->string('avg_diff');
            $table->string('avg_g_number');
            $table->string('winning_rate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_store_data_by_date');
    }
};
