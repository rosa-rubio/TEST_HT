<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [
            [
                'image' => 'https://www.mondosonoro.com/wp-content/uploads/2020/10/Woodkid-S16-disco.jpg',
                'title' => 'Fun Vacation',
                'location' => 'Puerto Rico',
                'description' => 'Playa, sol y Arena'
            ]
            ];
            
        DB::table('cards')->insert($cards);
    }
}
