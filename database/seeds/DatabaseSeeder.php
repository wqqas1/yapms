<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccountsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(AmenitiesTableSeeder::class);
        $this->call(FeesTableSeeder::class);
        $this->call(PromosTableSeeder::class);
        $this->call(RatesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(PropertiesTableSeeder::class);
        $this->call(PropertyAmenitiesTableSeeder::class);
    }
}
