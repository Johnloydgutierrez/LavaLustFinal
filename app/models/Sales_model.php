<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Sales_model extends Model {

    public function __construct(){
        $this->call->database();
    }
	public function insert($customer, $category, $product, $quantity, $amount) {
        $data = array(
			'customer' => $customer,
			'category' => $category,
			'product' => $product,
			'quantity' => $quantity,
			'amount' => $amount,
		);

		$result = $this->db->table('sales')->insert($data);

        }
    
	
	public function table() {
		return $this->db->raw("select * from sales");
	}
	public function read()
    {
        return $this->db->table('sales')->get_all();
    }


	
}
?>