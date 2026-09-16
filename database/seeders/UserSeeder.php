<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            [
                'email' => 'test1@email.com',
                'password' => 'password1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'region_id' => 1,
            ],
            [
                'email' => 'test2@email.com',
                'password' => 'password2',
                'created_at' => Carbon::now()->subDays(1),
                'updated_at' => Carbon::now()->subDays(1),
                'region_id' => 1,
            ],
            [
                'email' => 'test3@email.com',
                'password' => 'password3',
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
                'region_id' => 1,
            ],
        ]);
    }
}
