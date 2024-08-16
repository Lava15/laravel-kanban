<?php
declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('columns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('board_id')->constrained();
            $table->string('title');
            $table->unsignedInteger('order');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        if (!app()->IsProduction) {
            Schema::dropIfExists('columns');
        }
    }
};
