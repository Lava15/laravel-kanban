<?php
declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\Board;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoardSeeder extends Seeder
{
    public function run(): void
    {
        Board::query()->create(['title' => 'Board 1']);
        Board::query()->create(['title' => 'Board 2']);
        Board::query()->create(['title' => 'Board 3']);
        Board::query()->create(['title' => 'Board 4']);
    }
}
