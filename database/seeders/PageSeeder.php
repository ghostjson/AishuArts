<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'name' => 'home_page',
            'content' => json_encode([
                'title' => 'A Monochromatic Spring ’15',
                'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, sit, exercitationem, consequuntur, assumenda iusto eos commodi alias.'
            ])
        ]);

        Page::create([
           'name' => 'about_page',
           'content' => json_encode([
               'name' => 'Anastasia Doe',
               'subtitle' => 'Profession Developer',
               'description' => 'description',
               'image' => 'https://cdn.pixabay.com/photo/2015/03/03/08/55/portrait-657116_960_720.jpg'
           ])
        ]);

        Page::create([
           'name' => 'contact_page',
           'content' => json_encode([
               'description' => 'The most happiest time of the day!. Suspendisse condimentum porttitor cursus. Duis nec nulla turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada fermentum bibendum.',
               'instagram' => '#'
           ])
        ]);
    }
}
