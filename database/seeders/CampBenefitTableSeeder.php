<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campbenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Tech Stack Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Tech Stack Kit 2',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Tech Stack Kit 3',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Tech Stack Kit 4',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Tech Stack Kit 5',
            ],
            [
                'camp_id' => 2,
                'name' => 'Baru Belajar 1',
            ],
            [
                'camp_id' => 2,
                'name' => 'Baru Belajar 2',
            ],
            [
                'camp_id' => 2,
                'name' => 'Baru Belajar 3',
            ],
            [
                'camp_id' => 2,
                'name' => 'Baru Belajar 4',
            ],            
        ];

        foreach($campbenefits as $key => $benefits){
            CampBenefit::create($benefits);
        }
    }
}
