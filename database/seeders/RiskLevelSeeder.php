<?php

namespace Database\Seeders;

use App\Models\Common\RiskLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiskLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            1 => 'low',
            2 => 'medium',
            3 => 'high',
            4 => 'alert',
        ];

        foreach ($data as $id => $name) {
            RiskLevel::updateOrCreate(
                [
                    'id' => $id,
                ],
                [
                    'name' => $name,
                ]
            );
        }
    }
}
