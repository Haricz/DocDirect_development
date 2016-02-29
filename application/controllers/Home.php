<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	This controller is only a TEST controller
*/
class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['specializations'] = $this->Doctor_m->get_all_specializations();

		$this->load->view('directory/home.php', $data);
	}

	public function search()
	{
		$this->load->view('directory/gu/search_results.php');
	}

	public function doc_profile()
	{
		$this->load->view('directory/doctor_profile.php');
	}

	public function login()
	{
		$this->load->view('common/login.php');	
	}

	public function doctor_registration(){

		$this->load->model('Admin_model');		

		$data['spec'] = $this->Admin_model->get_specializations();
		
		$this->load->view('common/register_doctor_view.php',$data);

	}

	public function doctor_registration_code(){
		
		$this->load->view('common/register_doctor_code.php');

	}


	public function doctor_registration_details(){

		$this->load->model('Admin_model');		

		$data['spec'] = $this->Admin_model->get_specializations();
		$this->load->view('common/register_doctor_details.php',$data);

	}

	public function validate_authorization_code(){

		$this->load->model('Doctor_m');		

		// check if code is valid/existing
		$code = $this->input->post('authentication_code');
		$result = $this->Doctor_m->check_if_code_is_valid($code);
		$result2 = 0;

		if (empty($result) == FALSE) 
		$result2 = $this->Doctor_m->check_if_code_is_activated($code);

		if($result2 == 1){			
			$this->session->set_flashdata('invalid_code_error_msg', 'Code is already validated');
			$this->load->view('common/register_doctor_code.php');
		}

		else if(empty($result) == TRUE){
			$this->session->set_flashdata('invalid_code_error_msg', 'Code is either invalid or does not exist');
			$this->load->view('common/register_doctor_code.php');
		}
		else
			$this->_email_doctor_details($result['0']['dc_doc_id']);
		
		//send email to doctor 


	}

	public function validate_doctor_email_address(){

		$this->load->model('Doctor_m');	
		$this->load->model('Admin_model');		

		$data['spec'] = $this->Admin_model->get_specializations();

		$email = $this->input->post('email');

		$result = $this->Doctor_m->check_if_email_is_in_use($email);
		$result2 = $this->Doctor_m->check_if_email_is_pending($email);
		 
		if($result2 >0){
			$this->session->set_flashdata('email_in-use_error_msg', 'This email is already submitted for checking.');
			$this->load->view('common/register_doctor_view.php',$data);
		}

		else if($result > 0){
			$this->session->set_flashdata('email_in-use_error_msg', 'This email is already in use.');
			$this->load->view('common/register_doctor_view.php',$data);
		}
		else if (isset($email)){

			$doc_fname = $this->input->post('firstname');
			$doc_lname = $this->input->post('lastname');
			$doc_spec = $this->input->post('specialty');
			$doc_email = $this->input->post('email');
			$doc_contact = $this->input->post('contactnumber');

			$pending_registration_link = md5(uniqid(rand(), true));

			$pending_doctor_data = array(
									'pd_fname' => $doc_fname, 
									'pd_lname' => $doc_lname, 
									'pd_specialization' => $doc_spec, 
									'pd_email' => $doc_email, 
									'pd_contact' => $doc_contact, 
									'pd_registration_link' => $pending_registration_link,
									'pd_status' => 0
									);

			$this->Doctor_m->insert_to_doctor_pending_table($pending_doctor_data);
			$this->registration_successful();
		}

		else 
			$this->doctor_registration();
	
	}

	public function registration_successful(){

		$this->load->view('common/registration_successful.php');

	}

	public function verify($activation_code){

	$this->load->model('Admin_model');

	$records = $this->Admin_model->verifyEmailAddress($activation_code);	
 	
	if($records == -1)
		echo "Your account is already validated.";
	elseif ($records > 0)
		redirect('home/changeDoctorPassword');
	else
		echo "The link is invalid";

	}


	private function _email_doctor_details($doc_id){
	
		$this->load->model('Admin_model');

	$config = Array(		
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.gmail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'docdirect.info@gmail.com',
		    'smtp_pass' => 'docdirect2016',
		    'smtp_timeout' => '4',
		    'mailtype'  => 'text', 
		    'charset'   => 'iso-8859-1',
		    'wordwrap' => TRUE
		);


		/*GET DOCTOR EMAIL*/
		$doc_details = $this->Admin_model->get_details_for_activation($doc_id);
		$recipient = $doc_details['0']['dacc_email'];

		/*GET ACTIVATION CODE*/
		$activation_code = $doc_details['0']['dacc_activation_code'];


 		 $subject = "Activate your account on DocDirect.ph";
		 $message = 'You have recently entered your activation code at DocDirect.ph' 
		 			. "\n\n\n"
		 			.'Click or copy the link below to activate your account.'
		 			. "\n"
		 			. "http://localhost/docdirect/home/verify/".$activation_code;

		 $this->load->library('email', $config);
		 $this->email->set_newline("\r\n");
     	 $this->email->from('docdirect.info@gmail.com', 'DocDirect'); // change it to yours
    	 $this->email->to($recipient);// change it to yours
    	 $this->email->subject($subject);
    	 $this->email->message($message);
    	  
    	 	if($this->email->send())    	 
   	 			echo 'Email sent.';   	 	 
    		else
    	 		show_error($this->email->print_debugger());

	}


	public function changeDoctorPassword(){

		$this->load->view('common/doctor_change_pass');
	}

}
