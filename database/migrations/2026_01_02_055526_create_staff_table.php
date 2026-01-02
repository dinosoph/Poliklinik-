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
        Schema::create('staff', function (Blueprint $table) {
                $table->id(); // Default primary key
                $table->string('staff_id'); // e.g., 201 [5]
                $table->string('role');     // Doctor or Assistant [6]
                $table->string('name');     // [5]
                $table->string('department'); // e.g., Neurology [6]
                $table->timestamps();       // Adds created_at and updated_at [4]
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
