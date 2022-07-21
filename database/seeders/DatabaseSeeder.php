<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\CoursesTableSeeder;
use Database\Seeders\TeacherCourseTableSeeder;
use Database\Seeders\UserCourseTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(UserCourseTableSeeder::class);
        $this->call(TeacherCourseTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
    }
}
