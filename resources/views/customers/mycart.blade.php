@extends('layouts.cartmaster')
 @section('main_content') 
@if(Session::has('cart'))

hiko

@else
haiko
@endif 

 @endsection