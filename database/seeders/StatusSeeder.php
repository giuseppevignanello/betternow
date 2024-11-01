<?php

namespace Database\Seeders;

use App\Models\Common\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            1 => 'open',
            2 => 'closed',
            3 => 'cancelled',
            4 => 'archived',
        ];

        foreach ($data as $id => $name) {
            Status::updateOrCreate([
                'id' => $id,
            ], [
                'name' => $name,
            ]);
        }
    }
}
