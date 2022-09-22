<?php

namespace Database\Seeders;

use App\Models\Faculty;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faculty::create([
            'name'=> "Medicine",
        ]);
        Faculty::create([
            'name'=> "Architecture",
        ]);
        Faculty::create([
            'name'=> "Business Administration",
        ]);
    }
}
