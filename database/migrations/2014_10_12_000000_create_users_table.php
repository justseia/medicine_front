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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->default('');
            $table->string('password');
            $table->string('image')->default('https://api.dicebear.com/6.x/fun-emoji/svg');
            $table->integer('type')->default(3);
            $table->string('speciality')->default('');
            $table->integer('work_experience')->default(0);
            $table->text('biography')->nullable(true);
            $table->integer('weight')->nullable(true);
            $table->integer('height')->nullable(true);
            $table->integer('cashback')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
