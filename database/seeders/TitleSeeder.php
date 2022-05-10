<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            'title' => 'Amazing [Services Features] for you',
            'description' => 'If you need the greatest collection of HTML templates for your business, please visit [TooCSS] Blog. If you
        need to have a contact form PHP script, go to (our contact page) for more information.',
        ]);
        DB::table('titles')->insert([
            'title' => 'Check What [The Clients Say] About Our App Dev',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut
            labore et dolore magna.',
        ]);

    }
}
