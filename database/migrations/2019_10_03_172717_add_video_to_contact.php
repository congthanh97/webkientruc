<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVideoToContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact', function (Blueprint $table) {
            $table->string('videoUrl')->after('link_ytb')->nullable();
            $table->string('image')->after('videoUrl')->nullable();
        });
        DB::table('contact')->where("id",1)->update([
               'maxim'=>'“Không gian thì đa chiều, cớ gì cứ phải giam mình cùng những tiêu chuẩn cũ rích?” - Zaha Hadid',
               'link_ytb'=>'https://www.youtube.com/channel/UCqiihOpAy1AW_47dSJkoi5w',
               'link_fb'=>'#',
               'videoUrl'=>"https://www.youtube.com/watch?v=4wzJiABWNZM",
               'image'=>"hhkjhkj.jpg"
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact', function (Blueprint $table) {
            //
        });
    }
}
