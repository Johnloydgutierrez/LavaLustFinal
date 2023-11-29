<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Addproduct_model extends Model
{
    public function getProduct()   
{
    return $this->db->table('products')->get_all();
    // return $this->db->limit(20)->order_by('id', 'desc')->get('product')->result();
}
public function searchInfo($product_id)
{
    return $this->db->table('products')->where('product_id',$product_id)->get();
}
    
}



?>