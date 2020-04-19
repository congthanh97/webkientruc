<?php

use Illuminate\Database\Seeder;

class ChangeAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->where('id',1)->update([
        	'username'=>'hoangnguyen',
        	'password'=>'lts177101'
        ]);
    }
}
