<?php

use App\Models\Role;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment() === 'production') {
            exit('Not meant to run in a production environment.');
        }

        Schema::disableForeignKeyConstraints();

        DB::table('roles')->truncate();

        Schema::enableForeignKeyConstraints();

        // Admins are users who have access to all accounts, permissions will determine
        // what the admins can do
        Role::create([
            'name'       => 'Admin',
            'created_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        // Agents are individuals who manage leads, drip campaigns, vendors, associated and vacation
        // rentals, the most important part of this application
        Role::create([
            'name'       => 'Agent',
            'created_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        // Guests can log in to see past and current bookings, make payments if allowed on a vacation rental
        Role::create([
            'name'       => 'Guest',
            'created_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        // An owner can check availability of their property and book available dates, schedule maintenance,
        // communicate with agents and vendors
        Role::create([
            'name'       => 'Owner',
            'created_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        // Vendors cover roofing, painting, construction, heating and air companies. Giving them access allows
        // the vendor to see requests, invoices, so forth and so on
        Role::create([
            'name'       => 'Vendor',
            'created_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
