<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	['username'=>'admin','password'=>'123456','fullname'=>'Nguyeen duc hieu','email'=>'ducieu.ptit@gmail.com','mobile'=>'031239949','role'=>1,'created_at'=>date('Y-m-d H:i:s')],
        ]);
    }
}
