<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'identifier'    => 'mail_from',
                'value'         => 'warriorcms@warriorcms.com',
            ],
            [
                'identifier'    => 'user_activation',
                'value'         => 'FALSE',
            ],
        ]);
    }
}
