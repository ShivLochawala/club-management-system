<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_supports')->insert([
            'client_id'=>'CL-002',
            'client_subject'=>'Not able to access',
            'client_description'=>'I am not able to login',
            'date'=>'2021-01-01',
            'status'=>0
        ]);
    }
}
