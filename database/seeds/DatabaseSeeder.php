<?php

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
        // $this->call(UserSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(AddressTableSeeder::class);
        $this->call(GroupTableSeeder::class);
        $this->call(ProductTableSeeder::class);
    }
}
