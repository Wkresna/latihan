<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'id' => Str::uuid(),
                'name' => 'SMEA TP 45 DPS'
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Universitas Udayana'
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Bisma Informatika'
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Universitas Udayana'
            ],
            ];
            School::insert($datas);
    }
}
