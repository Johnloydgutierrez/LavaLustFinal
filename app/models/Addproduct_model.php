<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Addproduct_model extends Model
{
    public function getInfo()   
{
    return $this->db->table('products')->get_all();
    // return $this->db->limit(20)->order_by('id', 'desc')->get('product')->result();
}
public function searchInfo($productID)
{
    return $this->db->table('products')->where('productID',$productID)->get();
}
    
}



?>