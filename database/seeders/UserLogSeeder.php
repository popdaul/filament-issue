<?php

namespace Database\Seeders;

use App\Models\UserLog;
use Illuminate\Database\Seeder;

class UserLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserLog::factory()->count(10)->create();
        UserLog::factory()->create([
            'user_id' => 1,
            'date' => '2021-05-13',
            'login_count' => 1,
        ]);
        UserLog::factory()->create([
            'user_id' => 1,
            'date' => '2021-05-14',
            'login_count' => 2,
        ]);
        UserLog::factory()->create([
            'user_id' => 1,
            'date' => '2021-05-15',
            'login_count' => 3,
        ]);
        UserLog::factory()->create([
            'user_id' => 1,
            'date' => '2021-05-16',
            'login_count' => 4,
        ]);
        UserLog::factory()->create([
            'user_id' => 2,
            'date' => '2021-05-13',
            'login_count' => 1,
        ]);
        UserLog::factory()->create([
            'user_id' => 2,
            'date' => '2021-05-14',
            'login_count' => 2,
        ]);
        UserLog::factory()->create([
            'user_id' => 2,
            'date' => '2021-05-15',
            'login_count' => 3,
        ]);
        UserLog::factory()->create([
            'user_id' => 2,
            'date' => '2021-05-16',
            'login_count' => 4,
        ]);
        UserLog::factory()->create([
            'user_id' => 3,
            'date' => '2021-05-13',
            'login_count' => 1,
        ]);
        UserLog::factory()->create([
            'user_id' => 3,
            'date' => '2021-05-14',
            'login_count' => 2,
        ]);
        UserLog::factory()->create([
            'user_id' => 3,
            'date' => '2021-05-15',
            'login_count' => 3,
        ]);
        UserLog::factory()->create([
            'user_id' => 3,
            'date' => '2021-05-16',
            'login_count' => 4,
        ]);
    }
}
