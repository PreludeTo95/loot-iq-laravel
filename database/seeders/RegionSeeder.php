<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Region;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    public function run(): void
    {
        Region::insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'US',
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Europe',
            ],
            [
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
              'name' => 'Korea',
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Taiwan',
            ],
        ]);
    }
}
