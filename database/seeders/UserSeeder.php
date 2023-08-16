<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'uuid'=>Str::uuid(),

            'username' =>  'admin',
            'phone'=>'0123456789',
            'collage_id'=>'1'
           
           ]);
           User::create([
            'uuid'=>Str::uuid(),

            'username' =>  'ahmad',
            'phone'=>'0987654321',
            'collage_id'=>'1'
           
           ]);
           User::create([
            'uuid'=>Str::uuid(),

            'username' =>  'aya',
            'phone'=>'0912345678',
            'collage_id'=>'2'
           
           ]);
           User::create([
            'uuid'=>Str::uuid(),

            'username' =>  'elias',
            'phone'=>'0981234567',
            'collage_id'=>'3'
           
           ]);
           User::create([
            'uuid'=>Str::uuid(),

            'username' =>  'asma',
            'phone'=>'0987123456',
            'collage_id'=>'4'
           
           ]);
    }
}
