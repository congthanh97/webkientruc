<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = 'projects';
    public $timestamps = true;

    public static function AddProject($cateId, $projectName, $featureImage, $videoUrl, $architect, $surface, $placement, $year, $projectContent, $poster, $status) {
    	self::insert([
    		'cateId'=>$cateId,
    		'projectName'=>$projectName,
    		'featureImage'=>$featureImage,
    		'videoUrl'=>$videoUrl,
    		'architect'=>$architect,
    		'surface'=>$surface,
    		'placement'=>$placement,
    		'year'=>$year,
    		'projectContent'=>$projectContent,
    		'poster'=>$poster,
    		'status'=>$status,
    		'created_at'=>date('Y-m-d H:i:s')
    	]);
    }

    public static function updateProject($id, $cateId, $projectName, $featureImage, $videoUrl, $architect, $surface, $placement, $year, $projectContent, $poster, $status) {
        self::where('id', $id)
            ->update([
            'cateId'=>$cateId,
            'projectName'=>$projectName,
            'featureImage'=>$featureImage,
            'videoUrl'=>$videoUrl,
            'architect'=>$architect,
            'surface'=>$surface,
            'placement'=>$placement,
            'year'=>$year,
            'projectContent'=>$projectContent,
            'poster'=>$poster,
            'status'=>$status,
            'updated_at'=>date('Y-m-d H:i:s')
            ]);
    }

    public static function deleteProject($id) {
        self::where('id', $id)->delete();
    }
    public static function getAllProject() {
    	return self::select('*')->paginate(12);
    }
    public static function getAllProjectByCateActive() {
        return self::leftjoin('categories', 'projects.cateId', '=', 'categories.id')
                    ->where('categories.status', '!=', 0)
                    ->select('projects.*')
                    ->orderBy('id','desc')
                    ->paginate(12);
    }

    public static function getProjectByCate($cateId) {
        return self::where('cateId', $cateId)->paginate(12);
    }

    public static function getProjectByName($keyword) {
        return self::where('projectName', 'like', "%$keyword%")->paginate(12);
    }

    public static function getProjectById($id) {
    	return self::where('id', $id)->first();
    }
}
