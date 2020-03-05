<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['customer_id','product_id','Noofproducts','modeofcollection','totalorderprice','dateofpick', 'recepientid','deliveryaddress','countofdelivery','townofdelivery'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
