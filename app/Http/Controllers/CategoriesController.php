<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;

class CategoriesController extends Controller
{
    //
    public function deleteCate($id) {
    	$project = Project::getProjectByCate($id);
    	if(count($project)==0){
    		Category::deleteCate($id);
    		return redirect()->back();
    	}
    	else{
    		$alert = 'Danh mục vẫn chứa dự án không được xóa!';
    		return redirect()->back()->with('alert',$alert);
    	}
    }

	// public function postEditCate($id, Request $request){
	// 	$category = new category();

	// 	$cateName = $request->cateName;
	// 	$status = $request->status;

	// 	$category::editCate($id, $cateName, $status);
    // 	$cates = $category::getCategories();
	// 	return view('admin/category/catelist', compact('cates'));
	// }

	// public function getEditCate($id) {
	// 	$category = new category();

	// 	$cate = $category->getCateById($id);
		
	// 	return view('admin/category/cateModal', compact('cate'));
	// }
	public function editCate($id, Request $request) {//editCate
		$category = new category();

		if($request->cateName){
			$cateName = trim($request->cateName);
			$status = $request->status;

			if($category::getCateByNameDifId($id, $cateName)!=null){
				return json_encode('0');
			}
			else {
				$category::editCate($id, $cateName, $status);
	    		$cates = $category::getCategories();
	    		return json_encode('1');
			}
			
		}
		else {
			$category = new category();
			$cate = $category->getCateById($id);
			return view('admin/category/cateModal', compact('cate'));
		}

	}

	public function postAddCate(Request $request) {
		$cateName = $request->input('cateName');
		$category = new Category;
		$check = $category::getCateByName($cateName);
		if($check==null) {
			$category::addCate($cateName);
			return redirect()->back();
		}
		else {
			$alert = 'Tên danh mục đã có!!';
			return redirect()->back()->with('alert',$alert);
		}
	}

    public function getCategory() {
    	$category = new category();
    	$cates = $category::getCategories();
    	return view('admin.category.categories', compact('cates'));
    }
}
