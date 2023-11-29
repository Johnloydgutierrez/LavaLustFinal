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
	public function AddAssignment() {
		if ($this->form_validation->submitted()) {
			$this->form_validation

			->name('employee')	

			->name('description')

			->name('location')

			->name('contact')

			->name('customer')
			->required();
			
			if ($this->form_validation->run())
			{
				$this->Main_model->insert($this->io->post('employee'), $this->io->post('description'), $this-> io->post('location'), $this->io->post('contact'), $this->io->post('customer'));
				redirect('/AddAssignment');
				exit();
			}
			else{
				$this->call->view('AddAssignment');
			}

				}	
			$data=$this->Main_model->table();	
			$this->call->view('AddAssignment', $data);
	}

	

}
?>