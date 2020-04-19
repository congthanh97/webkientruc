<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
			[
	        	'cateId'=>'1',
	        	'projectName'=>'Nội thất trong văn phòng',
	        	'featureImage'=>'3.jpg',
	        	'videoUrl'=>'',
	        	'architect'=>'Davici',
	        	'surface'=>'150',
	        	'placement'=>'Hải Phòng',
	        	'year'=>'2017',
	        	'projectContent'=>'<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr4.jpg" style="height:570px; width:850px" /></p>
					<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr5.jpg" style="height:570px; width:850px" /></p>
					<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr6.jpg" style="height:570px; width:850px" /></p>
					<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr7.jpg" style="height:570px; width:850px" /></p>
					<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr8.jpg" style="height:570px; width:850px" /></p>
					<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr3.jpg" style="height:570px; width:850px" /></p>
	        	',
				'poster'=>'1',
				'status'=>'1',
				'created_at'=>date('Y-m-d H:i:s')
			],
			[
        	'cateId'=>'4',
        	'projectName'=>'Nội thất trong văn phòng',
        	'featureImage'=>'32.jpg',
        	'videoUrl'=>'https://www.youtube.com/watch?v=Pkh8UtuejGw',
        	'architect'=>'Davici',
        	'surface'=>'150',
        	'placement'=>'Hải Phòng',
        	'year'=>'2017',
        	'projectContent'=>'<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr4.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz10.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr8.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz9.jpg" style="height:570px; width:850px" /></p>
        	',
			'poster'=>'1',
			'status'=>'1',
			'created_at'=>date('Y-m-d H:i:s')
			],
			[
	        	'cateId'=>'2',
	        	'projectName'=>'Nội thất trong văn phòng',
	        	'featureImage'=>'6.jpg',
	        	'videoUrl'=>'',
	        	'architect'=>'Davici',
	        	'surface'=>'150',
	        	'placement'=>'Hải Phòng',
	        	'year'=>'2017',
	        	'projectContent'=>'<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr4.jpg" style="height:570px; width:850px" /></p>
					<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz10.jpg" style="height:570px; width:850px" /></p>
					<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr6.jpg" style="height:570px; width:850px" /></p>
					<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz6.jpg" style="height:570px; width:850px" /></p>
					<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr8.jpg" style="height:570px; width:850px" /></p>
					<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz9.jpg" style="height:570px; width:850px" /></p>
	        	',
				'poster'=>'1',
				'status'=>'1',
				'created_at'=>date('Y-m-d H:i:s')
			],
			[
        	'cateId'=>'3',
        	'projectName'=>'Nội thất trong văn phòng',
        	'featureImage'=>'6.jpg',
        	'videoUrl'=>'',
        	'architect'=>'Davici',
        	'surface'=>'150',
        	'placement'=>'Hải Phòng',
        	'year'=>'2017',
        	'projectContent'=>'<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr4.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz10.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr8.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz9.jpg" style="height:570px; width:850px" /></p>
        	',
			'poster'=>'1',
			'status'=>'1',
			'created_at'=>date('Y-m-d H:i:s')
			],
			[
        	'cateId'=>'3',
        	'projectName'=>'Nội thất trong văn phòng',
        	'featureImage'=>'6.jpg',
        	'videoUrl'=>'',
        	'architect'=>'Davici',
        	'surface'=>'150',
        	'placement'=>'Hải Phòng',
        	'year'=>'2017',
        	'projectContent'=>'<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr4.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz10.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr8.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz9.jpg" style="height:570px; width:850px" /></p>
        	',
			'poster'=>'1',
			'status'=>'1',
			'created_at'=>date('Y-m-d H:i:s')
			],
			[
        	'cateId'=>'4',
        	'projectName'=>'Nội thất trong văn phòng',
        	'featureImage'=>'32.jpg',
        	'videoUrl'=>'https://www.youtube.com/watch?v=Pkh8UtuejGw',
        	'architect'=>'Davici',
        	'surface'=>'150',
        	'placement'=>'Hải Phòng',
        	'year'=>'2017',
        	'projectContent'=>'<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr4.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz10.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr8.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz9.jpg" style="height:570px; width:850px" /></p>
        	',
			'poster'=>'1',
			'status'=>'1',
			'created_at'=>date('Y-m-d H:i:s')
			],
			[
        	'cateId'=>'4',
        	'projectName'=>'Nội thất trong văn phòng',
        	'featureImage'=>'32.jpg',
        	'videoUrl'=>'https://www.youtube.com/watch?v=Pkh8UtuejGw',
        	'architect'=>'Davici',
        	'surface'=>'150',
        	'placement'=>'Hải Phòng',
        	'year'=>'2017',
        	'projectContent'=>'<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr4.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz10.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr8.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz9.jpg" style="height:570px; width:850px" /></p>
        	',
			'poster'=>'1',
			'status'=>'1',
			'created_at'=>date('Y-m-d H:i:s')
			],
			[
        	'cateId'=>'3',
        	'projectName'=>'Nội thất trong văn phòng',
        	'featureImage'=>'6.jpg',
        	'videoUrl'=>'',
        	'architect'=>'Davici',
        	'surface'=>'150',
        	'placement'=>'Hải Phòng',
        	'year'=>'2017',
        	'projectContent'=>'<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr4.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz10.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr8.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz9.jpg" style="height:570px; width:850px" /></p>
        	',
			'poster'=>'1',
			'status'=>'1',
			'created_at'=>date('Y-m-d H:i:s')
			],
			[
        	'cateId'=>'3',
        	'projectName'=>'Nội thất trong văn phòng',
        	'featureImage'=>'6.jpg',
        	'videoUrl'=>'',
        	'architect'=>'Davici',
        	'surface'=>'150',
        	'placement'=>'Hải Phòng',
        	'year'=>'2017',
        	'projectContent'=>'<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr4.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz10.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr8.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz9.jpg" style="height:570px; width:850px" /></p>
        	',
			'poster'=>'1',
			'status'=>'1',
			'created_at'=>date('Y-m-d H:i:s')
			],
			[
        	'cateId'=>'4',
        	'projectName'=>'Nội thất trong văn phòng',
        	'featureImage'=>'32.jpg',
        	'videoUrl'=>'https://www.youtube.com/watch?v=Pkh8UtuejGw',
        	'architect'=>'Davici',
        	'surface'=>'150',
        	'placement'=>'Hải Phòng',
        	'year'=>'2017',
        	'projectContent'=>'<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr4.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz10.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr8.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz9.jpg" style="height:570px; width:850px" /></p>
        	',
			'poster'=>'1',
			'status'=>'1',
			'created_at'=>date('Y-m-d H:i:s')
			],
			[
        	'cateId'=>'2',
        	'projectName'=>'Nội thất trong văn phòng',
        	'featureImage'=>'6.jpg',
        	'videoUrl'=>'',
        	'architect'=>'Davici',
        	'surface'=>'150',
        	'placement'=>'Hải Phòng',
        	'year'=>'2017',
        	'projectContent'=>'<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr4.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz10.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr8.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz9.jpg" style="height:570px; width:850px" /></p>
        	',
			'poster'=>'1',
			'status'=>'1',
			'created_at'=>date('Y-m-d H:i:s')
			],
			[
        	'cateId'=>'4',
        	'projectName'=>'Nội thất trong văn phòng',
        	'featureImage'=>'32.jpg',
        	'videoUrl'=>'https://www.youtube.com/watch?v=Pkh8UtuejGw',
        	'architect'=>'Davici',
        	'surface'=>'150',
        	'placement'=>'Hải Phòng',
        	'year'=>'2017',
        	'projectContent'=>'<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr4.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz10.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr8.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz9.jpg" style="height:570px; width:850px" /></p>
        	',
			'poster'=>'1',
			'status'=>'1',
			'created_at'=>date('Y-m-d H:i:s')
			],
			[
        	'cateId'=>'1',
        	'projectName'=>'Nội thất trong văn phòng',
        	'featureImage'=>'6.jpg',
        	'videoUrl'=>'',
        	'architect'=>'Davici',
        	'surface'=>'150',
        	'placement'=>'Hải Phòng',
        	'year'=>'2017',
        	'projectContent'=>'<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr4.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz10.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz6.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/scr8.jpg" style="height:570px; width:850px" /></p>
				<p><img alt="" class="img0 projectphoto" src="/public/img/project-page-images/tz9.jpg" style="height:570px; width:850px" /></p>
        	',
			'poster'=>'1',
			'status'=>'1',
			'created_at'=>date('Y-m-d H:i:s')
			]
        ]);
    }
}
