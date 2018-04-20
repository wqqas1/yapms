<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
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

        DB::table('users')->truncate();

        Schema::enableForeignKeyConstraints();

        // users.id = 1
        DB::table('users')->insert([
            'account_id' => 1,
            'role_id' => 1,
            'first_name' => 'Jay',
            'last_name' => 'Forbes',
            'address1' => '1234 Main St',
            'address2' => 'Suite 1234',
            'city' => 'Wilmington',
            'state' => 'NC',
            'zip' => '28403',
            'cell' => '9105555555',
            'email' => 'admin@yapms.com',
            'password' => bcrypt('admin'),
            'created_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
