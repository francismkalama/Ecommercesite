<?php

namespace App;


class Cart {
    //
    public $items = null;
    public $total_quantity = 0;
    public $total_price = 0;
   

    public function __construct($oldcart){   
    	if($oldcart){
    		$this->items = $oldcart->items;
    		$this->total_quantity = $oldcart->total_quantity;
    		$this->total_price = $oldcart->total_price;
       	}
    }

    public function addItem($item, $id){         
    	$storeditem = ['qty'=> 0, 'price'=> $item->product_price, 'item'=>$item];   
    	if(!empty($this->items)){
            if(array_key_exists($id, $this->items)){
                     $storeditem = $this->items[$id];    //adds to the already increasing item.
                    }             
    	}
    	$storeditem['qty']++;
      	$storeditem['price'] = $item->product_price * $storeditem['qty'];
    	$this->items[$id] = $storeditem;
    	$this->total_quantity++;
    	$this->total_price += $item->product_price;
    }

    public function removeItembyOne($id){
    //  echo "<pre>";  print_r($this->items[$id]);
    $this->items[$id]['qty']--;
    $this->items[$id]['price'] -= $this->items[$id]['item']['product_price'];
    $this->total_quantity--;
    $this->total_price -= $this->items[$id]['item']['product_price'];

    if ($this->items[$id]['qty']<=0) {
        unset($this->items[$id]);
        # code...
    }

    }
    public function removeAllItemsbyId($id){
        $this->total_quantity -= $this->items[$id]['qty'];
        $this->total_price -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
