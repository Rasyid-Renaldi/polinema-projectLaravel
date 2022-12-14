<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name' => 'Rasyed Renaldi',
            'email' => 'renaldirasyed@gmail.com',
            'status' => 'offline'
        ]);
        Student::create([
            'name' => 'Muhammad Khoirul Wahyudin',
            'email' => 'gamingkenzo7@gmail.com',
            'status' => 'online'
        ]);
        Student::create([
            'name' => 'Ahmad Nur Fauzi',
            'email' => 'ahmadnurfauzi0909ok@gmail.com',
            'status' => 'offline'
        ]);
        Student::create([
            'name' => 'Syarif Hidayatullah',
            'email' => 'syarif-hidayatullah11@gmail.com',
            'status' => 'online'
        ]);
    }
}
