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
            'client_id'=>'CL-003',
            'client_subject'=>'Payment',
            'client_description'=>'Payment Failed',
            'date'=>'2021-01-09',
            'status'=>0
        ]);
    }
}
