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
        Schema::create('alert_notifications', function (Blueprint $table) {
            $table->id();
            $table->text("Description");
            $table->date("Date");
            $table->time("Hour");
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('animal_id')->nullable();
                $table->foreign('user_id')
                ->references('id')
                ->on('users')->onDelete('set null');
                $table->foreign('animal_id')
                ->references('id')
                ->on('animals')->onDelete('set null');
               
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alert_notifications');
    }
};
