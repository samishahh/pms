<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
Use Faker\Factory as Faker;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        for ($i=0;$i<2;$i++){
            $doctor=new Doctor();
            $doctor->qualification='mbbs';
            $doctor->name=$faker->name;
            $doctor->mobileno=$faker->phoneNumber;
            $doctor->save();
        }
    }
}
