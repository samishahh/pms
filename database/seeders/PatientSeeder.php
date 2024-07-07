<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;
use Faker\Factory as Faker;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        for ($i=0;$i<5;$i++){
        $refrence_cnic = mt_rand( 1000000000, 9999999999 );
        $patient=new Patient();
        $patient->patientid='checko1';
        $patient->cnic=$refrence_cnic;
        $patient->name=$faker->name;
        $patient->dob=$faker->date;
        $patient->mobileno=$faker->phoneNumber;
        $patient->city=$faker->city;
        $patient->gender='male';
        $patient->save();
        }
    }
}
