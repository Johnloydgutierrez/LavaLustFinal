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
    
public function insert($name, $description, $price, $image){
    // $this->call->database();
    $data = array(
        'name' => $name,
        'description' => $description,
        'price' => $price,
        'image' => $image
    );
    $result = $this->db->table('parts')->insert($data);
}
}
?>