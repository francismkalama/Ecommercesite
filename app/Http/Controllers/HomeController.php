<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use View;
use App\User;
//use Illuminate\Foundation\Validation\ValidatesRequests;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('aboutUs','index', 'contactus');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categorys = Category::getAllcategories();       
             # code... 
            return view('home')->with(['category' => $categorys]);       
       
    }
    public function adminhome(){
        return view('admin/home');
    }
    public function aboutUs(){
        $category = Category::getAllcategories();
        return view('aboutus', compact('category'));
    }
      public function contactus(){
        return view('contactus');
    }

    public function showpasswordchangeform(){
        return view('auth.passwords.changepassword');

    }
     public function adminshowpasswordchangeform(){
        return view('admin.changepassword');

    }

    public function changepassword(Request $request){
        echo Auth::user()->password."</br>";
        echo bcrypt($request->get('oldpassword'));
      // echo ;

        if (!(Hash::check($request->get('oldpassword'), Auth::user()->password))) {
            # code...
          return redirect()->back()->with("error", "The Old Password does not match your current");
        }
        if (strcmp($request->get('oldpassword'),$request->get('newpassword')) == 0) {
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
            # code...
        }

//  $request->validate([
// 'oldpassword' => 'required',
// 'newpassword' => 'required|string|min:6|confirmed',
// ]);
//Change Password
        //$user = new User();
        $user = Auth::user();
        $user->password = bcrypt($request->get('newpassword'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");


    }
}
