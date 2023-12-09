<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class parts extends Controller {

		public function display(){
			$this->call->model('partsModel');
			$data['info'] = $this->partsModel->getInfo();
			$this->call->view('/addparts', $data);
		}

        public function add()
        {
            $name = $this->io->post('name');
            $description = $this->io->post('description');
            $price = $this->io->post('price');
           
        
            $bind = array(
                "name" => $name,
                "description" => $description,
                "price" => $price,
                
            );
        
            $this->db->table('parts')->insert($bind);
         $this->call->view('/addparts');
        }
        

    public function delete($id)
    {
        if(isset($id)){
            $this->db->table('parts')->where("id", $id)->delete();
            $this->call->view('addparts');
        }
        else{
            $_SESSION['delete'] = "FAILED";
            $this->call->view('addparts');
        }
        
    }

    
    public function edit($id)
    {
        $this->call->model('partsModel');
        $data['edit'] = $this->partsModel->search($id);
        $this->call->view('addparts', $data);
    }

    public function submitedit($id)
    {
        if(isset($id))
        {
        $name = $this->io->post('name');
        $description = $this->io->post('description');
        $price = $this->io->post('price');
        
        $data = [
            "name" => $name,
            "description" => $description,
            "price" => $price,
            
        ];
        $this->db->table('parts')->where("id", $id)->update($data);
        $this->call->view('addparts');    
        }
        
    }
}

?>