<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = IdGenerator::generate(['table' => 'clients', 'length' => 6, 'prefix' =>'CL-']);
        DB::table('clients')->insert([
            'id'=> $id,
            'company_name'=>'CDF',
            'first_name'=>'CDF',
            'last_name'=>'PUB',
            'address'=>'Surat, Gujarat',
            'country'=>'India',
            'state'=>'Gujarat',
            'city'=>'Surat',
            'postal_code'=>'395005',
            'email'=>'cdf@gmail.com',
            'phone'=>'(26241) 2631149',
            'mobile'=>'7984389894',
            'slug'=>'/cdf',
            'status'=>'Expiring in 5 days'
        ]);
    }
}
