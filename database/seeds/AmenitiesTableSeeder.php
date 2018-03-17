<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

use Carbon\Carbon;

class AmenitiesTableSeeder extends Seeder
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

        DB::table('amenities')->truncate();

        Schema::enableForeignKeyConstraints();

        $amenities = array(
            'Hot Tub',
            'Private Swimming Pool',
            'Private Beach Access',
            'Private Parking',
            'Dishwasher',
            'Fireplace',
            'Woodstove',
            'Gas Stove',
            'Electric Stove',
            'Central Heat & Air'
        );

        // The account seeder creates ten accounts
        for ($i = 1; $i <= 10; $i++) {

            for ($j = 0; $j < count($amenities); $j++) {

                DB::table('amenities')->insert([
                    'account_id' => $i,
                    'name' => $amenities[$j],
                    'created_at' => Carbon::now(),
                    'created_by' => 1,
                    'updated_by' => 1,
                ]);
            }
        }
    }
}
