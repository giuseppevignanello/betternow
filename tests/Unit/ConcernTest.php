<?php

namespace Tests\Unit;

use App\Models\Concern\Concern;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase;

class ConcernTest extends TestCase
{
    use RefreshDatabase;
    public function test_it_can_create_a_concern()
    {
        $data = [
            'title' => 'Anxiety Test',
            'text' => null,
            'expected_resolution_date' => null,
            'risk_level' => config('general.riskLevelIds.high'),
            'status_id' => config('general.statusIds.open'),
        ];

        $concern = Concern::create($data);

        $this->assertDatabaseHas('concerns', $data);

        $highRiskLevelId = 3;
        $this->assertEquals($highRiskLevelId, $concern->risk_level);

        $openStatusId = 1;
        $this->assertEquals($openStatusId, $concern->status_id);
    }
}
