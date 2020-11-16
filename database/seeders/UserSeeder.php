<?php

namespace Database\Seeders;
use DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
    		'name' => 'admin',
    		'role' => 'admin',
    		'email' => 'admin@example.com',
    		'password' => bcrypt('admin'),
    		'remember_token' => str_random(60)
    	]);
    }
}
