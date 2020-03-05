<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vendor extends Model
{
    //
    protected $table = 'products';
    protected $fillable = ['category_id','user_id','product_name','product_description','product_price','product_image','product_status','product_serial']; 

    public static function getAllproducts(){
     	$result = static::all();
    	return $result;
    }
    public static function getMyProductsbyId($loggedinid){
    	$result = static::find($loggedinid);
    	return $result;
    }


}
