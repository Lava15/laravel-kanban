<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Board;
use App\Models\Column;
use Illuminate\Database\Seeder;
use Database\Seeders\BoardSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->create();
        Board::factory(10)
        ->hasColumns(4, function (array $attributes) use ($user) {
            return [
                'user_id' => $user->id,
            ];
        })->create()
        ->each(function (Board $board) {
            $board->columns->each(function(Column $column) {
               $column->cards()->saveMany(Card::factory(10)->make(['user_id' => $column->user_id])); 
            });
        });
    }
}
