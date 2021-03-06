<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TestEnv extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('users')->insert([
                'name' => Str::random(10).'_'.$i,
                'email' => Str::random(10).'_'.$i.'@gmail.com',
                'password' => Hash::make('password').'_'.$i,
            ]);
        }
    }
}
