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
        Schema::create('tbl_model_data', function (Blueprint $table) {
            $table->id();
            $table->integer('store_data_id');
            $table->string('model_name');
            $table->string('machine_number');
            $table->string('g_number');
            $table->string('extra_sheet');
            $table->string('bb');
            $table->string('rb');
            $table->string('art');
            $table->string('composite_probability');
            $table->string('bb_probability');
            $table->string('rb_probability');
            $table->string('art_probability');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_model_data');
    }
};
