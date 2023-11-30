<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {

		public function display(){
			$this->call->model('Addproduct_model');
			$data['info'] = $this->Addproduct_model->getInfo();
			$this->call->view('Ebikelist', $data);
		}

        public function add()
        {
            $productName = $this->io->post('name');
            $description = $this->io->post('description');
            $price = $this->io->post('price');
            $stock = $this->io->post('stock');
            $category = $this->io->post('category');
        
            $bind = array(
                "productName" => $productName,
                "description" => $description,
                "price" => $price,
                "stock" => $stock,
                "category" => $category
            );
        
            $this->db->table('products')->insert($bind);
         $this->call->view('Ebikelist');
        }
        

    public function delete($productID)
    {
        if(isset($productID)){
            $this->db->table('products')->where("productID", $productID)->delete();
            $this->call->view('Ebikelist');
        }
        else{
            $_SESSION['delete'] = "FAILED";
            $this->call->view('Ebikelist');
        }
        
    }

    
    public function edit($id)
    {
        $this->call->model('Addproduct_model');
        $data['info'] = $this->Addproduct_model->getInfo();
        $data['edit'] = $this->Addproduct_model->searchInfo($id);
        $this->call->view('/Ebikelist', $data);
    }

    public function submitedit($productID)
    {
        if(isset($productID))
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
        $this->db->table('products')->where("productID", $productID)->update($data);
        redirect('/Ebikelist');    
        }
        
    }
}

?>