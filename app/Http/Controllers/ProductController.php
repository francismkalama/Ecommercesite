<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;
use App\Cart;
use Session;
use View;
use App\User;
use App\Order;




class ProductController extends Controller
{

  public function __construct(){
    $this->middleware('auth')->except( 'customerviewProducts', 'viewAllProducts','getCart', 'getreducedCartByOne','getAddToCart', 'getreducedCartbyAll');
  }

    public function index(){

    	//shows defaul page
     $category = Category::getAllcategories();
    	return view('/admin/productadd',compact('category') );
    }

    public function addProduct(Request $request){
       //instantiate
    	$product = new Product();
      $file = $request->file('productimage');    
      //echo $file->getClientOriginalExtension();      
      $product->category_id = $request->category;
       $filename = $file->getClientOriginalName(); 
       $destinationfolder = 'uploads';
       $file->move($destinationfolder, $filename);
      //$path =  $file->storeAs('public/image', $filename);
      $product->product_name = $request->productname;
      $product->product_description =$request->productdesc;
      $product->product_price =  $request->productprice;
      $product->product_image = $filename;
      $product->product_status =$request->productselection;
      $product->product_serial = $request->productserial; 
      $product->save();
    return view('admin/home');
    	//return back();
    }
    //    public function addProductonorders(Request $request){
    //    $orders = new Order();

    //    $request->user()->id;

    // }

    public function viewProductbyCategory($id){

      echo $id;
     // return view('index');
    }

    public function viewProducts(){
    	$products = Product::getAllproducts();
  	return view('/admin/productview', compact('products'));
    }
    public function viewAllProducts(){
      $products = Product::getAllproducts();
      $categories = Category::getAllcategories();
      return view('customers/products')->with(['category'=>$categories, 'product' =>$products]);
    }
    public function customerviewProducts($id){
      $passedid = urldecode($id);
      $categories = Category::getAllcategories();
      $products = Product::getProductById($passedid);
      return view('/customers/product')->with(['product' =>$products, 'category'=>$categories]);

    }
    public function postcheckOutProduct(Request $request){
      $orders = new Order();
      if (!Session::has('cart') ) {
           return redirect()->route('shop.empty');   ///redirects to empty cart
      }else{
        if (Auth::user()) {
          $id = Auth::user()->id;
            # code...
          $oldcart = Session::get('cart');
          $cart =  new Cart($oldcart);
          $orders->user_id = $id;
          $orders->cartdetails = serialize($cart );
          $orders->Noofproducts = $request->orderdquantity;
          $orders->totalorderprice = $request->totalorderprice;
          $orders->modeofcollection = $request->modeofcollection;
          $orders->recepientid = $request->idnumber;
          if(!empty($orders->save())){
              Session::forget('cart');
        return redirect()->route('product.checkedout')->with('sucmsg', 'Item Purchased successfully');
          }else{
      return redirect()->route('product.checkedout')->with('failmsg', 'Item Purchase Not successfully');
          }
}  
        
        //\Stripe\Stripe::setApiKey('sk_test_KRHqzn1vqBJeEc6eKIaD4sfJ');


      }
     
     //  Stripe::setApiKey('sk_test_KRHqzn1vqBJeEc6eKIaD4sfJ');
     //  try {
     //    \Stripe\Charge::create(array(
     //      "amount" => $cart->total_price*100,
     //      "currency" => "usd",
     //      "source" => $request->input('stripeToken'), // obtained with Stripe.js
     //      "description" => "Charge for The goods "
     //    ));
     //    echo "Inafika";

     //  } catch(\Exception $e) {
     //    return view('customers/successcheckout')->with('error', $e->getMessage());        
     //  }
     //  Session::forget('cart');
     // return redirect()->route('shop.empty')->with('sucmsg', 'Item Purchased successfully');
     //  }
    }
    public function viewOrders(){
      return view('admin/orderview');
    }

    // public function checkedOutconfirmation(){
    //    return redirect()->route('shop.empty');
    // }

    public function getAddToCart(Request $request,$categ,$id){
      $product = Product::find($id);      
      $oldcart = Session::has('cart') ? Session::get('cart') : null;   
      //echo $categ;//print_r($oldcart['category_id']);
       $cart = new Cart($oldcart);      
      $cart->addItem($product,$product->id);     
       $request->session()->put('cart', $cart);
       return redirect("customer/view_products/categ/$categ");
    
    }

    public function getCart(){
      if(!Session::has('cart')){
        return view('customers/viewshoppingcart', ['products'=>null]);
      }
      $oldcart = Session::get('cart');
      $cart =  new Cart($oldcart);
      return view('customers/viewshoppingcart', ['products'=>$cart->items, 'totalprice'=>$cart->total_price]);
    }

  public function productchecked(){
      if(!Session::has('cart')){
        return view('customers/checkoutstatus');
      }else{
      $oldcart = Session::get('cart');
      $cart =  new Cart($oldcart);
      return view('customers/viewshoppingcart', ['products'=>$cart->items, 'totalprice'=>$cart->total_price]);
    }
    }

    

    public function getreducedCartByOne($id){
      $oldcart = Session::has('cart') ? Session::get('cart') : null;   
      $newcart = new Cart($oldcart);  
      $newcart->removeItembyOne($id); 
      if (count($newcart->items)>0) {
        Session::put('cart', $newcart); 
        # code...
      }else{
        Session::forget('cart'); 
      }
        
     return redirect()->route('product.shopingcart');     
      
    }

    public function getreducedCartbyAll($id){
      $oldcart = Session::has('cart') ? Session::get('cart') : null;   
      $newcart = new Cart($oldcart);  
      $newcart->removeAllItemsbyId($id); 
       if (count($newcart->items)>0) {
        Session::put('cart', $newcart); 
        # code...
      }else{
        Session::forget('cart'); 
      }
          return redirect()->route('product.shopingcart');  
      

    }
    public function editProduct($id){   
      $product = Product::admingetProductById($id);
      //$category = Category::getAllcategories();
     return  view("admin/productedit")->with(['producttoedit' => $product]);
      //return View::make('test')->with('products', $product);
     }

     public function updateProduct(Request $request){
      $product = new Product();
      $updatestatus = $product->editProduct($request);

      if ($updatestatus == 1) {
        # code...
        $products = Product::getAllproducts();
        //return route('admin.view', ['product' => $products]);
    return redirect()->route('admin.view');
              }else{
        return route('admin.view', ['product' => $products]);
               return back()->withInput();
              }   

     }

    public function getCheckout(){
      if(!Session::has('cart')){
        return view('customers/viewshoppingcart', ['products'=>null]);
      }
      $oldcart = Session::get('cart');
      $cart = new Cart($oldcart);
       //$ttprice = $cart->total_price;
       // echo "<pre>"; print_r($cart);echo "</prev>";
      return view('customers/shop', ['products'=>$cart->items, 'totalprice'=>$cart->total_price, 'quantitys'=>$cart->total_quantity]);

    }
 
        public function getCheckoutcompdelivery(){
      if(!Session::has('cart')){
        return view('customers/viewshoppingcart', ['products'=>null]);
      }
      $oldcart = Session::get('cart');
      $cart = new Cart($oldcart);
       $ttprice = $cart->total_price;
       return view('customers/deliverycart', ['totalamount' => $ttprice]);

    }

    public function getCustomerordersAdmin(){
      $orders = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.user_id')
           ->select('users.name','users.email', 'orders.*')
            ->get();

   return view('admin/orderview', ['customeroders' => $orders]);
      // foreach ($orders as $order) {
      //   # code...

      //   print_r(unserialize($order->cartdetails));
      // }
      //

    }


    
}
