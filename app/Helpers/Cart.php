<?php 
namespace App\Helpers;

/**
 * summary
 */
class Cart
{
    /**
     * summary
     */
    public $items = [];
    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
    }

    public function add($pro){
    	if (isset($this->items[$pro->id])) {
    		$this->items[$pro->id]['quantity'] +=1;
    	}else{
    		$this->items[$pro->id] = [
	    		'id' => $pro->id,
	    		'name' => $pro->name,
	    		'image' => $pro->image,
	    		'price' => $pro->sale_price ? $pro->sale_price : $pro->price,
	    		'quantity' => 1
	    	];
    	}
    	

    	session(['cart'=>$this->items]);

    	return true;
    }


    public function update($id,$quantity){
    	if (isset($this->items[$id])) {
    		$this->items[$id]['quantity'] = $quantity;
    		session(['cart'=>$this->items]);
    	}
    }


    public function remove($id){
    	if (isset($this->items[$id])) {
    		unset($this->items[$id]);
    		session(['cart'=>$this->items]);
    	}
    }

    public function clear(){
    	session(['cart'=> null]);
    }

}


?>