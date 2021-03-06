<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
        	['rank' => 2, 'face' => '2', 'suit' => 'C'],
			['rank' => 3, 'face' => '3', 'suit' => 'C'],
			['rank' => 4, 'face' => '4', 'suit' => 'C'],
			['rank' => 5, 'face' => '5', 'suit' => 'C'],
			['rank' => 6, 'face' => '6', 'suit' => 'C'],
			['rank' => 7, 'face' => '7', 'suit' => 'C'],
			['rank' => 8, 'face' => '8', 'suit' => 'C'],
			['rank' => 9, 'face' => '9', 'suit' => 'C'],
			['rank' => 10, 'face' => 'T', 'suit' => 'C'],
			['rank' => 11, 'face' => 'J', 'suit' => 'C'],
			['rank' => 12, 'face' => 'Q', 'suit' => 'C'],
			['rank' => 13, 'face' => 'K', 'suit' => 'C'],
			['rank' => 14, 'face' => 'A', 'suit' => 'C'],
			['rank' => 2, 'face' => '2', 'suit' => 'D'],
			['rank' => 3, 'face' => '3', 'suit' => 'D'],
			['rank' => 4, 'face' => '4', 'suit' => 'D'],
			['rank' => 5, 'face' => '5', 'suit' => 'D'],
			['rank' => 6, 'face' => '6', 'suit' => 'D'],
			['rank' => 7, 'face' => '7', 'suit' => 'D'],
			['rank' => 8, 'face' => '8', 'suit' => 'D'],
			['rank' => 9, 'face' => '9', 'suit' => 'D'],
			['rank' => 10, 'face' => 'T', 'suit' => 'D'],
			['rank' => 11, 'face' => 'J', 'suit' => 'D'],
			['rank' => 12, 'face' => 'Q', 'suit' => 'D'],
			['rank' => 13, 'face' => 'K', 'suit' => 'D'],
			['rank' => 14, 'face' => 'A', 'suit' => 'D'],
			['rank' => 2, 'face' => '2', 'suit' => 'H'],
			['rank' => 3, 'face' => '3', 'suit' => 'H'],
			['rank' => 4, 'face' => '4', 'suit' => 'H'],
			['rank' => 5, 'face' => '5', 'suit' => 'H'],
			['rank' => 6, 'face' => '6', 'suit' => 'H'],
			['rank' => 7, 'face' => '7', 'suit' => 'H'],
			['rank' => 8, 'face' => '8', 'suit' => 'H'],
			['rank' => 9, 'face' => '9', 'suit' => 'H'],
			['rank' => 10, 'face' => 'T', 'suit' => 'H'],
			['rank' => 11, 'face' => 'J', 'suit' => 'H'],
			['rank' => 12, 'face' => 'Q', 'suit' => 'H'],
			['rank' => 13, 'face' => 'K', 'suit' => 'H'],
			['rank' => 14, 'face' => 'A', 'suit' => 'H'],
			['rank' => 2, 'face' => '2', 'suit' => 'S'],
			['rank' => 3, 'face' => '3', 'suit' => 'S'],
			['rank' => 4, 'face' => '4', 'suit' => 'S'],
			['rank' => 5, 'face' => '5', 'suit' => 'S'],
			['rank' => 6, 'face' => '6', 'suit' => 'S'],
			['rank' => 7, 'face' => '7', 'suit' => 'S'],
			['rank' => 8, 'face' => '8', 'suit' => 'S'],
			['rank' => 9, 'face' => '9', 'suit' => 'S'],
			['rank' => 10, 'face' => 'T', 'suit' => 'S'],
			['rank' => 11, 'face' => 'J', 'suit' => 'S'],
			['rank' => 12, 'face' => 'Q', 'suit' => 'S'],
			['rank' => 13, 'face' => 'K', 'suit' => 'S'],
			['rank' => 14, 'face' => 'A', 'suit' => 'S']
        ]);
    }
}
