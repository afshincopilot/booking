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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('mobile', 10)->nullable();
            $table->string('origin', 3);
            $table->string('destination', 3);
            $table->timestamp('date');
            $table->foreignId('flight_id')->constrained('flights');
            $table->string('flight_key');
            $table->string('flight_number');
            $table->string('flight_airline');
            $table->string('flight_departure');
            $table->string('flight_arrival');
            $table->string('flight_duration');
            $table->string('flight_class');
            $table->json('flight');
            $table->enum('status', ['pending', 'reserved', 'confirmed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
