<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {

		public function display(){
			$this->call->model('Addproduct_model');
			$data['info'] = $this->Addproduct_model->getProduct();
			$this->call->view('admintable', $data);
		}


	public function add(){
		$name = $this->io->post('name');
		$description = $this->io->post('description');
		$price = $this->io->post('price');
		$stock_quantity = $this->io->post('stock_quantity');
		$category_product = $this->io->post('category_product');
		$bind = array(
			"name" => $name,
			"description" => $description,
			"price" => $price,
			"stock_quantity" => $stock_quantity,
			"category_product" => $category_product,
			
		);
		$this->db->table('product')->insert($bind);
		redirect('adminform');
	}
	
	public function delete($product_id)
    {
        if(isset($product_id)){
            $this->db->table('product')->where("product_id", $product_id)->delete();
            redirect('/admintable');
        }
        else{
            $_SESSION['delete'] = "FAILED";
            redirect('/admintable');
        }
        
    }

    public function edit($product_id)
    {
        $this->call->model('Addproduct_model');
        $data['edit'] = $this->Addproduct_model->searchInfo($product_id);
        return $this->call->view('adminform', $data);
    }

    public function submitedit($product_id)
    {
        if(isset($product_id))
        {
        $name = $this->io->post('name');
        $description = $this->io->post('description');
        $price = $this->io->post('price');
        $stock_quantity = $this->io->post('stock_quantity');
        $data = [
            "name" => $name,
            "description" => $description,
            "price" => $price,
            "stock_quantity" => $stock_quantity,
        ];
        $this->db->table('products')->where("product_id", $product_id)->update($data);
        redirect('/Ebiketable');    
        }
        
    }
}

?>