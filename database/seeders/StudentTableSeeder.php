<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('students')->count() === 0) {
            DB::table('students')->insert([
                [
                    'name' => 'ngo quang hoc',
                    'phone' => '0123456789',
                    'age' => 24,
                    'gender' => 1,
                    'address' => 'HN',
                    'is_active' => true,
                ],
                [
                    'name' => 'dsadsadsad',
                    'phone' => '56782293',
                    'age' => 24,
                    'gender' => 0,
                    'address' => 'HN',
                    'is_active' => true,
                ],
            ]);
        }else{
            echo ' bang nay da co du lieu' . PHP_EOL;
        }
    }
}
