<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use App\Models\Theme;
use App\Http\Requests\ProjectRequest;
use App\Models\Slidehome;

class ProjectController extends Controller
{
    //

	public function getProjectAdmin() {
		$project = new Project;
		$category = new Category;
		$user = new User;
		$projects = $project::getAllProject();
		return view('admin/project/listProject', compact('projects', 'category', 'user'));
	}

	public function searchProjectAdmin(Request $request) {
		$project = new Project;
		$category = new Category;
		$user = new User;
		if($request->cateId!='all'):
			$cateId = $request->cateId;
			$projects = $project::getProjectByCate($cateId);
		elseif($request->cateId=='all'):
			$projects = $project::getAllProject();
		endif;

		return view('admin/project/listProjectAjax', compact('projects', 'category', 'user'));
	}

	public function getEditProject($id) {
		$projects = new Project;
		$category = new Category();
		$cates = $category::getCategories();
		$project = $projects::getProjectById($id);
		return view('admin/project/editProject', compact('project', 'cates'));
	}

	public function deleteProject($id) {
		$project = new Project;
		$project::deleteProject($id);
		return redirect()->back();
	}

	public function postEditProject($id, ProjectRequest  $request){
    	$user = new User;
    	$project = new Project;
		
		$cateId = $request->input('cateId');
    	$projectName = trim($request->input('projectName'));
    	$featureImage = $request->file('featureImage');
    	$videoUrl = $request->input('videoUrl');
		$architect = $request->input('architect');
		$surface = $request->input('surface');
    	$placement = $request->input('placement');
    	$year = $request->input('year');
		$projectContent = $request->input('projectContent');
		
		$poster = $user::findUserByUsername(session('UserAdmin'));
		$posterId = $poster->id;

		//feature image
		if($featureImage!=null) {
			$featureImageName = time().'_'.$featureImage->getClientOriginalName();
			$featureImage->move('public/img/portfolio',$featureImageName);

			if(file_exists('public/img/portfolio/'.$request->input('featureImage'))) {
				unlink('public/img/portfolio/'.$request->input('featureImage'));
			}
		}
		else {
			$featureImageName = $request->input('featureImage');
		}

		$content = preg_split('[src\="]', $projectContent);
		$n = count($content);
		$projectContent = "";
		for($i = 0; $i < $n; $i++) {
			$content1 = preg_split('[class\=]', $content[$i]);
			if($i < $n-1):
				$projectContent .= str_replace("<img", "<img class='img".$i." projectphoto'", $content1[0]).'src="';
			else:
				$projectContent .= str_replace("<img", "<img class='img".$i." projectphoto'", $content1[0]);
			endif;
		}
		$project::updateProject($id, $cateId, $projectName, $featureImageName, $videoUrl, $architect, $surface, $placement, $year, $projectContent, $posterId, '1');

		return redirect('admin/project');
	}

	public function getAddProject(){
		$category = new Category();
		$cates = $category::getCateActive();
		return view('admin/project/addProject', compact('cates'));
	}

    public function postAddProject(ProjectRequest $request){
    	$user = new User;
    	$project = new Project;
		
		$cateId = $request->input('cateId');
    	$projectName = $request->input('projectName');
    	$featureImage = $request->file('featureImage');
    	$videoUrl = $request->input('videoUrl');
		$architect = $request->input('architect');
		$surface = $request->input('surface');
    	$placement = $request->input('placement');
    	$year = $request->input('year');
		$projectContent = $request->input('projectContent');
		
		$poster = $user::findUserByUsername(session('UserAdmin'));
		$posterId = $poster->id;

		//feature image
		$featureImageName = time().'_'.$featureImage->getClientOriginalName();
		$featureImage->move('public/img/portfolio',$featureImageName);		
		//

		$content = preg_split('[src\="]', $projectContent);
		$n = count($content);
		$projectContent = "";
		for($i = 0; $i < $n; $i++) {
			if($i < $n-1):
				$projectContent .= str_replace("<img", "<img class='img".$i." projectphoto'", $content[$i]).'src="';
			else:
				$projectContent .= str_replace("<img", "<img class='img".$i." projectphoto'", $content[$i]);

			endif;
		}
		$project::addProject($cateId, $projectName, $featureImageName, $videoUrl, $architect, $surface, $placement, $year, $projectContent, $posterId, '1');

		return redirect('admin/project');
		
		// $projectId = Projects::max('id');

		// for($i = 1; $i < $n; $i++) {
		// 	$conten1[$i] = preg_split('[\"]', $content[$i]);
		// 	$urlImg = $conten1[$i][0].";";
		
		// 	projectImg::insert([
		// 		'projectId'=>$projectId,
		// 		'imgUrl'=> $urlImg,
		// 	]);
		// }
    }
    public function showProject() {
    	$category = new Category;
    	$project = new Project;
    	$theme = new Theme;


    	$projects = $project::getAllProjectByCateActive();
    	$categories = $category::getCateActive();
    	$themes = $theme::getTheme();
    	$slidehomes = Slidehome::getSlide();
    	return view('showProject', compact('projects', 'categories', 'themes', 'slidehomes'));
    }

    public function projectDetail($id) {
    	$projects = new Project;
    	$project = project::getProjectById($id);
    	return view('project', compact('project'));
    }
}
