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
        Schema::create('distributions', function (Blueprint $table) {
            $table->id();
            $table->date("Date");
            $table->time("Hour");
            $table->integer("Minimum amount");
            $table->integer("Maximum quantity");
            $table->unsignedBigInteger('animal_id')->nullable();
            $table->unsignedBigInteger('aliment_id')->nullable();
            $table->unsignedBigInteger('water_id')->nullable();
            $table->foreign('animal_id')
                ->references('id')
                ->on('animals')->onDelete('set null');
                $table->foreign('aliment_id')
                ->references('id')
                ->on('aliments')->onDelete('set null');
                $table->foreign('water_id')
                ->references('id')
                ->on('waters')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distributions');
    }
};
