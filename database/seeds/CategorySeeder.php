<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([

        	['cateName'=>'Ngoại thất','created_at'=>date('Y-m-d H:i:s')],
        	['cateName'=>'Nội thất','created_at'=>date('Y-m-d H:i:s')],
        	['cateName'=>'Cảnh quan','created_at'=>date('Y-m-d H:i:s')],
        	['cateName'=>'Video','created_at'=>date('Y-m-d H:i:s')]
        ]);
        	
    }
}
