<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contact')->insert([
        	'email'=>'an-architect@gmail.com',
        	'mobile'=>'0984.519.822',
        	'address'=>'CH-03/11/Golden 06-Vinh City-VN',
        	'aboutUs'=>'Là công ty hàng đầu trong ngành thiets kế nội thất và kiến trúc'
        ]);
    }
}
