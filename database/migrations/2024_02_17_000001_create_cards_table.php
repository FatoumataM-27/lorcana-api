<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('set_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('number');
            $table->string('ink_color');
            $table->integer('ink_cost');
            $table->integer('strength')->nullable();
            $table->integer('willpower')->nullable();
            $table->string('type');
            $table->string('subtype')->nullable();
            $table->text('description')->nullable();
            $table->string('rarity');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
