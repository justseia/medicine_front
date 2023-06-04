<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctor_orders', function (Blueprint $table) {
            $table->id();
            $table->timestamp('day');
            $table->string('user_name');
            $table->integer('user_id');
            $table->integer('time_id');
            $table->integer('complexity');
            $table->integer('doctor_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_orders');
    }
};
