<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'title' => '4BHK',
                'school_id' => '101'
            ],
            [
                'title' => '3AHK',
                'school_id' => '101'
            ],
            [
                'title' => '5AHK',
                'school_id' => '101'
            ]
        ];

        foreach ($rooms as $room) {
            $r = new Room();
            $r->title = $room['title'];
            $r->school_id = $room['school_id'];
            $r->save();
        }
    }
}
