<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\okcl_model;
use Faker\Factory as Faker;
class okcl_user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Faker=Faker::create();
        $okcl_user= new okcl_model;
        $okcl_user->name=$Faker->name;
        $okcl_user->email=$Faker->email;
        $okcl_user->phone="8553028433";
        $okcl_user->password=md5($Faker->password);
        $okcl_user->confirm_password=md5($Faker->password);
        $okcl_user->gender="M";
        $okcl_user->dob=$Faker->date;
        $okcl_user->save();
        //
    }
}
