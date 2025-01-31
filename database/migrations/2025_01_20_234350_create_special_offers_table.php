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
        Schema::create('special_offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_item_id')->constrained()->onDelete('cascade');
            $table->string('offer_name');
            $table->decimal('discount_percentage', 5, 2);
            $table->timestamp('valid_from')->nullable(); // Changed to timestamp
            $table->timestamp('valid_to')->nullable();   // Changed to timestamp
            $table->string('coupon_code')->nullable();    // Coupon Code
            $table->integer('limit')->nullable();         // Limit
            $table->enum('price_in_type', ['number', 'percentage'])->default('number');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('special_offers');
    }
};
