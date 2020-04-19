<?php

use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('themes')->insert([
        	[
                'coverImage'=>'bg-15.jpg',
                'videoUrl'=>'https://www.youtube.com/watch?v=XQxEhxJK0IM',
                'smallCoverImage'=>'test.jpg',
                'status'=>'0',
                'created_at'=>date('Y-m-d H:i:s')
            ]
        ]);
    }
}
