<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Vendor;
use App\User;


class VendorController extends Controller
{
    //
 //;

      public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
      $id = Auth::user()->id;
        $allmyproducts = Vendor::getMyProductsbyId($id);
        return view("vendors/vendorhome", compact('allmyproducts'));


    }

    public function vendorsellpage(){
    	 $category = Category::getAllcategories();
    	 //echo "<pre>";print_r($category);
    	return view("vendors/postproduct", compact('category'));

    }
    public function addPostProduct(Request $request){
    	$vendor = new Vendor();
    	//echo $request->category;
     // user_id
     $id = Auth::user()->id;
       $file = $request->file('productimage');    
      //echo $file->getClientOriginalExtension();
       $filename = $file->getClientOriginalName(); 
       $destinationfolder = 'uploads';
       $file->move($destinationfolder, $filename);
       $vendor->category_id = $request->category;
       $vendor->user_id=$id;
      //$path =  $file->storeAs('public/image', $filename);
      $vendor->product_name = $request->productname;
      $vendor->product_description =$request->productdesc;
      $vendor->product_price =  $request->productprice;
      $vendor->product_image = $filename;
      $vendor->product_status = 'active';
      $vendor->product_serial = $request->productserial; 
      $savestatus = $vendor->save();
      if ($savestatus == 1) {
          $products = Vendor::getAllproducts();
            return redirect('vendor/home')->with('savedsuccessful','Product Saved successfully');           
      } else {
          return redirect('vendor/home')->with('savedunsuccessful','Product not Saved successfully');
      }

    }

    public static function returndefaulpage(){
       	return view('vendors/defaultvendor');
    }
}
