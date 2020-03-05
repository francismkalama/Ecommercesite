<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

	public function __constructor(){
		$this->middleware('auth')->except('showAll');
	}

public function index(){
	return view('admin/categoryadd');
}

public function showAll(){
    $category = Category::getAllcategories();
    return view('admin/categoryview', compact('category'));
}
public function showCategdropdown(){
    $category = Category::all();
     //return view('customers/index', compact('category'));
     return view('customers/index2',compact('category'));
}

public function store(Request $request){

	$category = new Category();
	$category->category_name = $request->categoryname;
	$category->category_description = $request->categorydesc;
	$category->status = 'active';
	$category->save();
	$category = Category::all();
     return view('admin/categoryview', compact('category'));
	}

	public function editCategoryform($id){
		$category = Category::getCategorybyId($id);

		//echo "<pre>";print_r($category);
   		return view("admin/categoryedit")->with(['categoryedit' => $category]);

	}

public function updateCategory(Request $request){
			print_r($request);

}

public function deleteCategory($id){
	 $category = Category::FindOrFail();
	$result = $category->delete();

	if($result){
		return response();
	} else {
		return response();
	}
	// $category = '';
	// $category = Category::all();
   // return view('admin/index', compact('category'));

}


    
}
