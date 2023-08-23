<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;


class CardSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Card::create([
            'image' => 'https://www.mondosonoro.com/wp-content/uploads/2020/10/Woodkid-S16-disco.jpg',
            'title' => 'Fun Vacation',
            'location' => 'Puerto Rico',
            'description' => 'Playa, sol y Arena'
        ]);*/

        $cards = [
            [
                'image' => 'https://www.mondosonoro.com/wp-content/uploads/2020/10/Woodkid-S16-disco.jpg',
                'title' => 'Fun Vacation',
                'location' => 'Puerto Rico',
                'description' => 'Playa, sol y Arena'
            ],
            
            [
                'image' => 'https://www.mondosonoro.com/wp-content/uploads/2020/10/Woodkid-S16-disco.jpg',
                'title' => 'Extreme travel',
                'location' => 'Everest',
                'description' => 'Snow and sport'
            ],

            [
                'image' => 'https://www.mondosonoro.com/wp-content/uploads/2020/10/Woodkid-S16-disco.jpg',
                'title' => 'Romantic Vacation',
                'location' => 'Italia',
                'description' => 'Pizza, ice cream'
            ]
            
        ];
            
        DB::table('cards')->insert($cards);
    }
}
