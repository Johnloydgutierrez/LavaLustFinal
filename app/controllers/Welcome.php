<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	public function __construct() {
		parent::__construct();
		$this->call->model('Main_model');
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
	public function read(){
        $data = $this->Main_model->read();
        $this->call->view('AddAssignment', $data);
    }

	

}
?>