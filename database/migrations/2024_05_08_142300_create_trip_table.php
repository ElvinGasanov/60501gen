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
        Schema::create('trip', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('route_id');
            $table->foreign('route_id')->references('id')->on('route');
            $table->unsignedBigInteger('transport_id');
            $table->foreign('transport_id')->references('id')->on('transport');
            $table->date('start_date');
            $table->time('start_time');
            $table->date('finish_date');
            $table->time('finish_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trip',function (Blueprint $table){
            $table->dropColumn('route_id');
            $table->dropColumn('transport_id');
        });
        Schema::dropIfExists('trip');
    }
};
