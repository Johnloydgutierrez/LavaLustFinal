<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Main_model extends Model {

    public function __construct(){
        $this->call->database();
    }
	public function insert($employee, $description, $location, $contact, $customer) {
        $data = array(
			'employee' => $employee,
			'description' => $description,
			'location' => $location,
			'contact' => $contact,
			'customer' => $customer,
		);

		$result = $this->db->table('addasign')->insert($data);

        }
    
	
	public function table() {
		return $this->db->raw("select * from addasign");
	}
	public function read()
    {
        return $this->db->table('addasign')->get_all();
    }


	
}
?>