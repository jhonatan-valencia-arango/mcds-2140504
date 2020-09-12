<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'          => 'Xbox Serie X',
            'description'   => 'Nueva consola Microsoft para la siguiente generación',
            'created_at'    => now(),
        ]);

        DB::table('categories')->insert([
            'name'          => 'Nintendo Switch',
            'description'   => 'Consola híbrida de nintendo',
            'created_at'    => now(),
        ]);

        $cat = new Category;
        $cat->name          = 'PlayStation 5';
        $cat->description   = 'Nueva consola de Sony';
        $cat->save();
    }
}
