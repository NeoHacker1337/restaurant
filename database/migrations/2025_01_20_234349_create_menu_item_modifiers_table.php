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
        Schema::create('menu_item_modifiers', function (Blueprint $table) {
            $table->foreignId('menu_item_id')->constrained();
            $table->foreignId('modifier_id')->constrained();
            $table->primary(['menu_item_id', 'modifier_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_item_modifiers');
    }
};
