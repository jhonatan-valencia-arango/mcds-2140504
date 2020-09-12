<?php

use App\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'name'                  => 'Halo Infinite',
            'description'           => 'Juego FPS para jueva generación',
            'user_id'               => 1,
            'category_id'           => 1,
            'price'                 => 70,
            'created_at'            => now(),
        ]);

        $game = new Game;
        $game->name             = 'Animal Crosing NH';
        $game->description      = 'Juego de Nintendo';
        $game->user_id          = 1;
        $game->category_id      = 2;
        $game->price            = 65;
        $game->save();
    }
}
