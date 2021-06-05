<?php

namespace App\Models;

class Cart
{
 public $items=null;
 public $total_qty=0;
 public $total_price=0;


 public function __construct($existing_cart)
 {
    if($existing_cart){
        $this->items=$existing_cart->items;
        $this->total_qty=$existing_cart->total_qty;
        $this->total_price=$existing_cart->total_price;
    }
 }

public function add_to_cart($item, $id){
$stored_item=['qty'=>0, 'sub_price'=>$item->price, 'unit_price'=>$item->purchase_price, 'item'=>$item];
if($this->items){
    if(array_key_exists($id, $this->items)){
        $stored_item=$this->items[$id];
    }
}

  $stored_item['qty']++;
  $stored_item['sub_price']=$item->purchase_price*$stored_item['qty'];
  $this->items[$id]=$stored_item;
  $this->total_qty++;
  $this->total_price+=$item->purchase_price;

}

}