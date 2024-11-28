<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 'school_id' => null krn ada relasi ke tabel schools
     */
    public function run(): void
    {
        $datas = [
            [
                'id' => Str::uuid(),
                'school_id' => null,
                'name' => 'SMEA TP 45 DPS',
                'title' => 'Akuntansi',
                'start_date' => '1993-06-01',
                'end_date' => '1995-07-31',
            ],
            [
                'id' => Str::uuid(),
                'school_id' => null,
                'name' => 'Universitas Udayana',
                'title' => 'Perpajakan, Fakultas Ekonomi',
                'start_date' => '1996-06-01',
                'end_date' => '1997-07-31',
            ],
            [
                'id' => Str::uuid(),
                'school_id' => null,
                'name' => 'Bisma Informatika',
                'title' => 'Database Programmer',
                'start_date' => '1997-06-01',
                'end_date' => '1998-07-31',
            ],
            [
                'id' => Str::uuid(),
                'school_id' => null,
                'name' => 'Universitas Udayana',
                'title' => 'Akuntansi, Fakultas Ekonomi',
                'start_date' => '2002-06-01',
                'end_date' => '2024-07-31',
            ],
            ];
            Education::insert($datas);
    }
}
