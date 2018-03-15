<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
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

        DB::table('states')->truncate();

        DB::table('states')->insert(
            array(
                array('name' => 'Alabama', 'abbr' => 'AL'),
                array('name' => 'Alaska', 'abbr' => 'AK'),
                array('name' => 'Arizona', 'abbr' => 'AZ'),
                array('name' => 'Arkansas', 'abbr' => 'AR'),
                array('name' => 'California', 'abbr' => 'CA'),
                array('name' => 'Colorado', 'abbr' => 'CO'),
                array('name' => 'Connecticut', 'abbr' => 'CT'),
                array('name' => 'Delaware', 'abbr' => 'DE'),
                array('name' => 'District of Columbia', 'abbr' => 'DC'),
                array('name' => 'Florida', 'abbr' => 'FL'),
                array('name' => 'Georgia', 'abbr' => 'GA'),
                array('name' => 'Hawaii', 'abbr' => 'HI'),
                array('name' => 'Idaho', 'abbr' => 'ID'),
                array('name' => 'Illinois', 'abbr' => 'IL'),
                array('name' => 'Indiana', 'abbr' => 'IN'),
                array('name' => 'Iowa', 'abbr' => 'IA'),
                array('name' => 'Kansas', 'abbr' => 'KS'),
                array('name' => 'Kentucky', 'abbr' => 'KY'),
                array('name' => 'Louisiana', 'abbr' => 'LA'),
                array('name' => 'Maine', 'abbr' => 'ME'),
                array('name' => 'Maryland', 'abbr' => 'MD'),
                array('name' => 'Massachusetts', 'abbr' => 'MA'),
                array('name' => 'Michigan', 'abbr' => 'MI'),
                array('name' => 'Minnesota', 'abbr' => 'MN'),
                array('name' => 'Mississippi', 'abbr' => 'MS'),
                array('name' => 'Missouri', 'abbr' => 'MO'),
                array('name' => 'Montana', 'abbr' => 'MT'),
                array('name' => 'Nebraska', 'abbr' => 'NE'),
                array('name' => 'Nevada', 'abbr' => 'NV'),
                array('name' => 'New Hampshire', 'abbr' => 'NH'),
                array('name' => 'New Jersey', 'abbr' => 'NJ'),
                array('name' => 'New Mexico', 'abbr' => 'NM'),
                array('name' => 'New York', 'abbr' => 'NY'),
                array('name' => 'North Carolina', 'abbr' => 'NC'),
                array('name' => 'North Dakota', 'abbr' => 'ND'),
                array('name' => 'Ohio', 'abbr' => 'OH'),
                array('name' => 'Oklahoma', 'abbr' => 'OK'),
                array('name' => 'Oregon', 'abbr' => 'OR'),
                array('name' => 'Pennsylvania', 'abbr' => 'PA'),
                array('name' => 'Rhode Island', 'abbr' => 'RI'),
                array('name' => 'South Carolina', 'abbr' => 'SC'),
                array('name' => 'South Dakota', 'abbr' => 'SD'),
                array('name' => 'Tennessee', 'abbr' => 'TN'),
                array('name' => 'Texas', 'abbr' => 'TX'),
                array('name' => 'Utah', 'abbr' => 'UT'),
                array('name' => 'Vermont', 'abbr' => 'VT'),
                array('name' => 'Virginia', 'abbr' => 'VA'),
                array('name' => 'Washington', 'abbr' => 'WA'),
                array('name' => 'West Virginia', 'abbr' => 'WV'),
                array('name' => 'Wisconsin', 'abbr' => 'WI'),
                array('name' => 'Wyoming', 'abbr' => 'WY')
            )
        );
    }
}
