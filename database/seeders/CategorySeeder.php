<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'Category 1',
                'school_id' => '101'
            ],
            [
                'title' => 'Category 2',
                'school_id' => '101'
            ],
            [
                'title' => 'Category 3',
                'school_id' => '101'
            ]
        ];

        foreach ($categories as $category) {
            $c = new Category();
            $c->title = $category['title'];
            $c->school_id = $category['school_id'];
            $c->save();
        }
    }
}
