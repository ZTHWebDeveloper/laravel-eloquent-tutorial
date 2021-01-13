<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_records')->insert([
            [
                'name'=>'John',
                'student_rank'=>1
            ],
            [
                'name'=>'Doe',
                'student_rank'=>2
            ],
            [
                'name'=>'Justin',
                'student_rank'=>3
            ],
            [
                'name'=>'Chainsmoker',
                'student_rank'=>4
            ],
            [
                'name'=>'Akon',
                'student_rank'=>5
            ],
            [
                'name'=>'Maung',
                'student_rank'=>4
            ],
            [
                'name'=>'Roe',
                'student_rank'=>10
            ],
            [
                'name'=>'JustinBeber',
                'student_rank'=>12
            ],
            [
                'name'=>'Baby Rock',
                'student_rank'=>8
            ],
            [
                'name'=>'Rocker',
                'student_rank'=>9
            ],

        ]);
    }
}
