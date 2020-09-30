<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Subject;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Student::factory(10)->create();
        Subject::factory(10)->create();
        // đẩy dữ liệu
        // $this->call([
        //     StudentTableSeeder::class,
        //     TeacherTableSeeder::class,
        // ]);
    }
}
