<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	public function __construct() {
		parent::__construct();
		$this->call->model('Main_model');
		$this->call->model('Sales_Model');
	}

	public function index() {
		$this->call->view('Nhome');
	}
	
	public function home() {
		$this->call->view('Nhome');
	}

	public function contact() {
		$this->call->view('contact');
	}
	public function admin() {
		$this->call->view('adminpage');
	}
	public function signin() {
		$this->call->view('signin');
	}
	public function showassignment() {
		$this->call->view('assignment');
	}
	public function index1() {
		$this->call->view('index1');
		
	}
	public function Ebike() {
		$this->call->view('Ebikelist');
	}
	public function Etable() {
		$this->call->view('Ebiketable');
	}
	public function assignment() {
		$this->call->view('assignment');
	}
	public function addparts() {
		$this->call->view('addparts');
	}

	public function partsTable() {
		$this->call->view('partsTable');
	}
	public function AddAssignment()  {


		if ($this->form_validation->submitted()) {
			$this->form_validation->name('employee')->required()
								->name('description')->required()
								->name('location')->required()
								->name('contact')->required()
								->name('customer')->required();
		
			if ($this->form_validation->run()) {
				$employee = $this->io->post('employee');
				$description = $this->io->post('description');
				$location = $this->io->post('location');
				$contact = $this->io->post('contact');
				$customer = $this->io->post('customer');
		
				$this->Main_model->insert( $employee, $description, $location, $contact, $customer );
				redirect('AddAssignment'); // Replace 'success_page' with your actual success page URL
			} else {
				// Handle form validation errors
				$data['error_message'] = validation_errors(); // Include form validation errors in your data
				$this->call->view('AddAssignment', $data); // Replace 'your_form_view' with your actual form view
			}
		} else {
			$data = $this->Main_model->read();
			$this->call->view('AddAssignment',$data);	
		}
    }

	public function addPart()
{
    $name = $this->io->post('name');
    $description = $this->io->post('description');
    $price = $this->io->post('price');

    // Check if the file is uploaded successfully
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'public/images/';
        $uploadFile = $uploadDir . basename($_FILES["image"]["name"]);

        // Move the uploaded file to the destination directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile)) {
            $imageFileName = basename($uploadFile);

            // Instantiate the partsModel and insert the data into the database
            $this->call->model('partsModel');
            $this->partsModel->insert($name, $description, $price, $imageFileName);

            // Redirect to the 'addparts' view after successful insertion
        $this->call->view('/addParts');
        } else {
            // Handle file upload failure
            echo 'File upload failed.';
        }
    } else {
        // Handle file not uploaded
        echo 'File not uploaded.';
    }
}


	public function read(){
        $data = $this->Main_model->read();
        $this->call->view('AddAssignment', $data);
    }

	public function Sales()  {


		if ($this->form_validation->submitted()) {
			$this->form_validation->name('customer')->required()
								->name('category')->required()
								->name('product')->required()
								->name('quantity')->required()
								->name('amount')->required();
		
			if ($this->form_validation->run()) {
				$customer = $this->io->post('customer');
				$category = $this->io->post('category');
				$product = $this->io->post('product');
				$quantity = $this->io->post('quantity');
				$amount = $this->io->post('amount');
		
				$this->Sales_model->insert( $customer, $category, $product, $quantity, $amount );
				redirect('Sales'); // Replace 'success_page' with your actual success page URL
			} else {
				// Handle form validation errors
				$data['error_message'] = validation_errors(); // Include form validation errors in your data
				$this->call->view('Sales', $data); // Replace 'your_form_view' with your actual form view
			}
		} else {
			$data = $this->Sales_model->read();
			$this->call->view('Sales',$data);	
		}
    }

	

}
?>