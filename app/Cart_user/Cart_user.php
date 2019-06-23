<?php 
	namespace App\Cart_user;

	/**
	 * 
	 */
	class Cart_user 
	{
		public $items = [];
		public $total_quantity = 0;
		public $total_amount = 0;
		public function __construct()
		{
			$this->items = session('cart_user') ? session('cart_user') : [];
			$this->total_quantity = $this->total_quantity();
			$this->total_amount = $this->total_amount();
		}

		public function add($pro_detail,$pro,$quantity){
			if(isset($this->items[$pro->id])){
				$quantity_new = $this->items[$pro->id]['quantity'] + $quantity;
			}else{
				$quantity_new = $quantity;
			}
			$this->items[$pro->id] = [
				'id' => $pro->id,
				'name' => $pro->name,
				'slug' => $pro->slug,
				'image' => $pro->image,
				'price' => $pro->price_sale ? $pro->price_sale : $pro->price,
				'quantity' => $quantity_new
			];
			session(['cart_user'=>$this->items]);
			return true;
		}
		public function update($id,$quantity){
			if(isset($this->items[$id])){
				$this->items[$id]['quantity'] = $quantity;
				session(['cart_user'=>$this->items]);
			}
		}
		public function delete($id){
			if(isset($this->items[$id])){
				unset($this->items[$id]);
				session(['cart_user'=>$this->items]);
			}
		}
		public function clear(){
			session(['cart_user'=>null]);
		}

		public function total_quantity(){
			$t = 0;
			foreach ($this->items as $item) {
				$t = $t + $item['quantity'];
			}
			return $t;
		}
		public function total_amount(){
			$t = 0;
			foreach ($this->items as $item) {
				$t = $t + ($item['quantity']*$item['price']);
			}
			return $t;
		}
	}

 ?>