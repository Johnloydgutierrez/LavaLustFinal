<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Addproduct_model extends Model
{
    public function getInfo()   
{
    return $this->db->table('products')->get_all();
    // return $this->db->limit(20)->order_by('_id', 'desc')->get('product')->result();
}
public function searchInfo($Product_id)
{
    return $this->db->table('products')->where('Product_id',$Product_id)->get();
}
    
}
?>