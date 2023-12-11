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
        

    public function delete($Product_id)
    {
        if(isset($Product_id)){
            $this->db->table('products')->where("Product_id", $Product_id)->delete();
            $this->call->view('Ebikelist');
        }
        else{
            $_SESSION['delete'] = "FAILED";
            $this->call->view('Ebikelist');
        }
        
    }

    // public function deleteParts($id)
    // {
    //         $this->db->table('parts')->where("id", $id)->delete();
    //         return redirect()->to('/addParts'); 
    // }

    
    public function edit($id)
    {
        $this->call->model('Addproduct_model');
        $data['edit'] = $this->Addproduct_model->searchInfo($id);
        $this->call->view('/Ebikelist', $data);
    }

    public function submitedit($Product_id)
    {
        if(isset($Product_id))
        {
        $productName = $this->io->post('name');
        $description = $this->io->post('description');
        $price = $this->io->post('price');
        $category = $this->io->post('category');
        $stock = $this->io->post('stock');
        $data = [
            "productName" => $productName,
            "description" => $description,
            "price" => $price,
            "category" =>$category,
            "stock" => $stock,
        ];
        $this->db->table('products')->where("Product_id", $Product_id)->update($data);
        $this->call->view('Ebikelist');    
        }
        
    }
}

?>