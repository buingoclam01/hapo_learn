<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use App\Models\UserCourse;
use Illuminate\Database\Seeder;

class UserCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserCourse::factory()->count(5)->create();
    }
}
