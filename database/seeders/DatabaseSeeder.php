<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Adding an admin user
        // \App\Models\User::factory()
        //     ->count(1)
        //     ->create([
        //         'email' => 'admin@admin.com',
        //         'password' => \Hash::make('admin'),
        //     ]);

        $this->call(UserSeeder::class);
        // $this->call(TypeSeeder::class);
        // $this->call(DistributorSeeder::class);
        // $this->call(TransactionSeeder::class);
        // $this->call(ProductSeeder::class);


    }
}
