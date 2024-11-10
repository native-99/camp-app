<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $camps=[
            [
                'title'=>'gila',
                'slug'=>'gile',
                'price'=>299,

            ],
            [
                'title'=>'gia',
                'slug'=>'gie',
                'price'=>29,
            ]
        ];

        foreach($camps as $key => $camp){
            Camp::create($camp);
        }

    }
}
