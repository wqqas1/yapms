<?php

use App\Models\UserRole;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class UserRolesTableSeeder extends Seeder
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

        DB::table('user_roles')->truncate();

        Schema::enableForeignKeyConstraints();

        // Seed for the system
        UserRole::create([
            'user_id' => 1,
            'role_id' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
