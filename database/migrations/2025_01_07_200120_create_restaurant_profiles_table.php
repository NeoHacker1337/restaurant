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
        Schema::create('restaurant_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key for users table                
            $table->string('restaurant_name')->nullable();
            $table->string('restaurant_logo')->nullable(); // Path to restaurant logo
            $table->text('restaurant_description')->nullable();
            $table->string('restaurant_phone')->nullable();
            $table->string('restaurant_email')->nullable();
            $table->string('restaurant_address')->nullable();
            $table->string('restaurant_city')->nullable();
            $table->string('restaurant_state')->nullable();
            $table->string('restaurant_country')->nullable();
            $table->string('restaurant_postal_code')->nullable();
            $table->time('opening_days')->nullable();
            $table->time('opening_time')->nullable();
            $table->time('closing_time')->nullable();
            $table->string('cuisine_type')->nullable(); // e.g., Italian, Indian, Chinese
            $table->boolean('is_vegetarian')->default(false); // Whether the restaurant is vegetarian            
            $table->integer('seating_capacity')->nullable(); // Seating capacity of the restaurant
            $table->boolean('accepts_online_orders')->default(true);
            $table->boolean('offers_takeaway')->default(true);
            $table->boolean('has_parking')->default(false);
            $table->timestamps();
            $table->softDeletes(); // Adds soft delete functionality

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant_profiles');
    }
};
