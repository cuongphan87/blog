<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cvt_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cvt_category')->insert([
            
            'cats_name' => 'laravel',
            
            'cats_slug' => 1
        ]);
    }
}
