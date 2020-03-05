<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public static function getAllcategories(){
    	$categorylist = static::all();
       	return $categorylist;

    }

    public static function getCategorybyId($id){
    	//$categorylist = static::where('id', '=', $id)->get();
        $categorylist = Category::find($id);
    	return $categorylist;

    }
    public function addCategory(){

    }
  
}
