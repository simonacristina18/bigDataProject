<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Alex',
            'email' => 'alex@gmail.com',
            'password' => Hash::make('password'),
            'first_name' => 'Roland',
            'university' => 'Poli',
            'faculty' => 'Automat',
            'programme' => '1',
            'study_language' => 'eng',
            'role' => 'student',
            'year_of_study' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Simon',
            'email' => 'simon@gmail.com',
            'password' => Hash::make('password'),
            'first_name' => 'Michael',
            'university' => 'Poli',
            'faculty' => 'Automat',
            'programme' => '3',
            'study_language' => 'eng',
            'role' => 'student',
            'year_of_study' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Rick',
            'email' => 'rick@gmail.com',
            'password' => Hash::make('password'),
            'first_name' => 'Mont',
            'university' => 'Poli',
            'faculty' => 'Automat',
            'programme' => '3',
            'study_language' => 'eng',
            'role' => 'student',
            'year_of_study' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Angel',
            'email' => 'angel@gmail.com',
            'password' => Hash::make('password'),
            'first_name' => 'Rodriguez',
            'university' => 'Poli',
            'faculty' => 'Automat',
            'programme' => '2',
            'study_language' => 'ro',
            'role' => 'student',
            'year_of_study' => 2
        ]);

        DB::table('users')->insert([
            'name' => 'Selena',
            'email' => 'selena@gmail.com',
            'password' => Hash::make('password'),
            'first_name' => 'Richard',
            'university' => 'Poli',
            'faculty' => 'Automat',
            'programme' => '1',
            'study_language' => 'ro',
            'role' => 'student',
            'year_of_study' => 2
        ]);

        DB::table('users')->insert([
            'name' => 'Milan',
            'email' => 'milan@gmail.com',
            'password' => Hash::make('password'),
            'first_name' => 'John',
            'role' => 'secretary',
            'year_of_study' => 2
        ]);

        DB::table('programme')->insert([
            'name' => 'Computers and Information Technology',
        ]);
        DB::table('programme')->insert([
            'name' => '	Systems Engineering',
        ]);
        DB::table('programme')->insert([
            'name' => 'Mechanical Engineering',
        ]);
        DB::table('programme')->insert([
            'name' => 'Chemical Engineering',
        ]);

        DB::table('series')->insert([
            'name' => 'A1',
            'programme_id' => 1
        ]);
        DB::table('series')->insert([
            'name' => '	A2',
            'programme_id' => 1
        ]);
        DB::table('series')->insert([
            'name' => 'B1',
            'programme_id' => 2
        ]);
        DB::table('series')->insert([
            'name' => 'B2',
            'programme_id' => 2
        ]);
        DB::table('series')->insert([
            'name' => 'C1',
            'programme_id' => 3
        ]);
        DB::table('series')->insert([
            'name' => 'C2',
            'programme_id' => 3
        ]);
        DB::table('series')->insert([
            'name' => 'D1',
            'programme_id' => 4
        ]);
        DB::table('series')->insert([
            'name' => 'D2',
            'programme_id' => 4
        ]);

        DB::table('groups')->insert([
            'name' => '100',
            'series_id' => 1
        ]);
        DB::table('groups')->insert([
            'name' => '101',
            'series_id' => 1
        ]);
        DB::table('groups')->insert([
            'name' => '102',
            'series_id' => 1
        ]);
        DB::table('groups')->insert([
            'name' => '103',
            'series_id' => 1
        ]);
        DB::table('groups')->insert([
            'name' => '200',
            'series_id' => 2
        ]);
        DB::table('groups')->insert([
            'name' => '201',
            'series_id' => 2
        ]);
        DB::table('groups')->insert([
            'name' => '202',
            'series_id' => 2
        ]);
        DB::table('groups')->insert([
            'name' => '203',
            'series_id' => 2
        ]);
        DB::table('groups')->insert([
            'name' => '300',
            'series_id' => 3
        ]);
        DB::table('groups')->insert([
            'name' => '301',
            'series_id' => 3
        ]);
        DB::table('groups')->insert([
            'name' => '302',
            'series_id' => 3
        ]);
        DB::table('groups')->insert([
            'name' => '303',
            'series_id' => 3
        ]);
        DB::table('groups')->insert([
            'name' => '400',
            'series_id' => 4
        ]);
        DB::table('groups')->insert([
            'name' => '401',
            'series_id' => 4
        ]);
        DB::table('groups')->insert([
            'name' => '402',
            'series_id' => 4
        ]);
        DB::table('groups')->insert([
            'name' => '403',
            'series_id' => 4
        ]);
    }
}
