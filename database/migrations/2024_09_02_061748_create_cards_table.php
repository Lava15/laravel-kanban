<?php
declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('column_id')->constrained();
            $table->text('notes')->nullable();
            $table->unsignedInteger('order');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        if (!app()->IsProduction) {
            Schema::dropIfExists('cards');
        }
    }
};
