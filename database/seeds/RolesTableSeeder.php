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

        // Admins are users who have full access to all accounts, permissions will determine
        // what the admin can do, when administering accounts
        Role::create([
            'name'  => 'admin',
            'created_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        // Agents are individuals who manage leads, drip campaigns, vendors, associated and vacation
        // rentals, the most important part of this application
        Role::create([
            'name' => 'agent',
            'created_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        // An owner can check availability of their property and book available dates, schedule maintenance,
        // communicate with agents and vendors
        Role::create([
            'name' => 'owner',
            'created_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        // Guests can log in to see past and current bookings, make payments if allowed on a vacation rental
        Role::create([
            'name' => 'guest',
            'created_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
