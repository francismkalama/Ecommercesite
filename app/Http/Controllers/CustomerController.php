<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CustomerController extends Controller
{
    //

    public function index(){

    }
    public function viewCustomers(){
    	$users = User::where('category', 'customer')->get();

    	return view('/admin/customerview', compact('users'));



    }
    public function storeCustomer(){

    }
}
