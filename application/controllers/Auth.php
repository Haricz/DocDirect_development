<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* For Authentication (Login/Logout) functions of the system */
class Auth extends CI_Controller {

	public function index()
	{
		$this->login();
	}

	public function login()
	{
		$this->load->view('common/login.php');
	}

	public function validate_login()
	{
		/*$this->load->model('Gu_m');
		$this->load->model('Auth_m');*/

 		// get login credentials
 		$email = $this->input->post('email');
 		$password = $this->input->post('password');
 		// check if it is in the database
 		$gu_id = $this->Auth_m->if_general_user_exists($email, $password);
 		if($gu_id == 0) // not valid login
 		{
 			//echo $gu_id
 			$this->session->set_userdata('error_msg', 'Invalid email or password');
 			redirect(base_url() . 'home/login');
 		}
 		else
 		{
	 		$gu = $this->Gu_m->get_general_user_by_id($gu_id);
	 		//$this->Misc_m->print_formatted($gu);
	 		// set session data
	 		$newdata = array(
	 				'acc_id' => $gu->gu_id,
	 				'acc_email' => $gu->gu_email,
	 				'acc_firstname' => $gu->gu_firstname,
	 				'acc_lastname' => $gu->gu_lastname
	 			);
	 		$this->session->set_userdata($newdata);

			$this->Misc_m->print_formatted($newdata);

	 		// unset error msg, if any
	 		$this->session->unset_userdata('error_msg');

	 		// redirect user if valid, print error if not
	 		redirect(base_url() . 'home/');
	 	}
	}

	public function register()
	{
		$this->load->model('Gu_m');
		$this->load->model('Auth_m');

		// Get POST data
		$email = $this->input->post('email');
		$hashed_password = $this->Auth_m->create_hash($this->input->post('password')); // SALT & HASH password first
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$contact_no = $this->input->post('contact_no');

		$this->Gu_m->insert_general_user($email, $hashed_password, $firstname, $lastname, $contact_no);

		// set successful registration message
 		$this->session->set_userdata('succ_msg', 'Successful registration. Login now.');
		redirect(base_url() . 'home/login');
	}

	
	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url() . 'home');
	}

	public function destroy_session(){
		$this->session->sess_destroy();
	}

	public function change_doctor_pass(){

		$this->load->model('Admin_model');

		$email = $this->session->userdata('change_pass_email');
		$newpass = $this->input->post('password');
		$this->Admin_model->changePassword($email,$newpass);


	}
}
