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
        Schema::create('recurrences', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('task_id')->constrained()->onDelete('Cascade');
            $table->string('frequency');
            $table->string('iteration_duration_type');
            $table->integer('iteration_duration_value')->nullable();
            $table->string('specific_days')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recurrences');
    }
};
