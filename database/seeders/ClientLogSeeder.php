<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_logs')->insert([
            'client_id'=>'CL-001',
            'date'=>'2020-12-29',
            'activity'=>'Change Password'
        ]);
    }
}
