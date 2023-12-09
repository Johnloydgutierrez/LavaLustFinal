<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class partsModel extends Model
{
    public function getInfo()   
{
    return $this->db->table('parts')->get_all();
    // return $this->db->limit(20)->order_by('_id', 'desc')->get('product')->result();
}
public function search($id)
{
    return $this->db->table('parts')->where('id',$id)->get();
}
    
}
?>