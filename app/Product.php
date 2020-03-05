<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Product extends Model
{
    //
    protected $fillable = ['product_name','product_description','product_price','product_image','product_status','product_serial']; 

    public static function getAllproducts(){
    	$productlist = DB::table('categories')->
    	join('products', 'categories.id','=','products.category_id')->get();
    	return $productlist;

    }
      public static function getProductById($id){
         // $product = Product::find($id);
         // echo "<pre>";print_r($product);
    	$productlist = DB::table('categories')->
    	join('products', 'categories.id','=','products.category_id')->where('categories.id', '=', $id)->get();
    	//print_r($productlist) ;
        return $productlist;
    }
    public static function admingetProductById($id){
        // $product = DB::select("Select prdcts.*, categ.category_name  from products prdcts inner join categories categ where prdcts.id ={$id} and categ.id = prdcts.category_id ");
        $product = Product::find($id);
        //$product = DB::select("SELECT * FROM products p, categories c WHERE p.id =$id  AND p.category_id = c.id ");

         // AND c.from_user1=? AND c.to_user2=? OR u.id = $id AND c.to_user2=? AND c.from_user1 = ?", [$logedin, $id, $logedin,$id]);
        //echo "<pre>"; print_r($product);
        
        return $product;
    }

    public function editProduct($request){
      $file = $request->file('product_image');
      $productid = $request->id;  
      $productupdate = Product::find($productid);
     if ($request->hasFile('product_image')) {        
        $filename = $file->getClientOriginalName(); 
        $productupdate->product_name = $request->productname ;
        $productupdate->product_description = $request->productdesc;
        $productupdate->product_price = $request->productprice;
        $productupdate->product_image = $filename;
        $productupdate->product_status = $request->product_status;
        $productupdate->product_serial = $request->productserial;
        $productupdate->touch();
        $savedpoa = $productupdate->update();
        if ($savedpoa) {
            return true;
        }else{
            return false;
        }

      }else{
        $productupdate->product_name = $request->productname ;
        $productupdate->product_description = $request->productdesc;
        $productupdate->product_price = $request->productprice;
        // $productupdate->product_image = $filename;
        $productupdate->product_status = $request->product_status;
        $productupdate->product_serial = $request->productserial;
        $productupdate->touch();
        $savedpoa = $productupdate->update();
        if ($savedpoa) {
            # code...
            return true;
        }else{
            return false;
        }
        
      }
     
    

    }

    public function vendordeleteproduct($id){
        echo $id;

    }

 
}

