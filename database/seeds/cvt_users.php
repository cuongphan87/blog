<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cvt_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cvt_users')->insert([
            
            'users_name' => 'admin',
            
            'users_pass' => md5(123456),
            
            'users_level'=>1
        ]);
            
    }
}
