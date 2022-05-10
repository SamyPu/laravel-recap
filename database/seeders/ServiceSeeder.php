<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'App Maintenance',
            'description' => 'You are not allowed to redistribute this template ZIP file on any other website.',
            'button_link' => '#',
            'icon' => "first",
        ]);
        DB::table('services')->insert([
            'title' => 'Rocket Speed of App',
            'description' => 'You are allowed to use the Chain App Dev HTML template. Feel free to modify or edit this
            layout.',
            'button_link' => '#',
            'icon' => "second",
        ]);
        DB::table('services')->insert([
            'title' => 'Multi Workflow Idea',
            'description' => 'If this template is beneficial for your work, please support us little via PayPal. Thank you.',
            'button_link' => '#',
            'icon' => "third",
        ]);
        DB::table('services')->insert([
            'title' => '24/7 Help & Support',
            'description' => 'Lorem ipsum dolor consectetur adipiscing elit sedder williamsburg photo booth quinoa and
            fashion axe.',
            'button_link' => '#',
            'icon' => "fourth",
        ]);
    }
}
