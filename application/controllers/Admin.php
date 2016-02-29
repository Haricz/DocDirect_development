<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/admin
	 *	- or -
	 * 		http://example.com/index.php/admin/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){

		$this->load->model('Admin_model');		
		$data['temp'] = $this->Admin_model->get_pending_doctors_number();
		$data['number_of_pending'] = count($data['temp']);

		$this->load->view('admin/admin_view', $data);		
	}

	public function add_doctor_page(){

		$this->load->library('form_validation');
		$this->load->model('Admin_model');

		$data['spec'] = $this->Admin_model->get_specializations();
		$data['hospitals'] = $this->Admin_model->get_hospitals();
		$data['temp'] = $this->Admin_model->get_pending_doctors_number();
		$data['number_of_pending'] = count($data['temp']);

		/*$config = array(
					array(				
					'field' => array('doc_fname', 'doc_mname', 'doc_lname', 'doc_dob', 'doc_gender', 'doc_prc', 
									'doc_main_spec', 'doc_med_ed_institution', 'doc_course', 'doc_hospital', 
									'doc_room', 'doc_office_number', 'doc_work', 'doc_med_ex_institution', 
									'doc_start_date', 'doc_end_date'),
					'label' => array('First Name', 'Middle Name', 'Last Name', 'Date of Birth', 'Gender', 'PRC', 
									'Main Specialization', 'Medical Institution', 'Course', 'Hospital', 
									'Room', 'Office Number', 'Work', 'Medical Institution', 
									'Start Date', 'End Date'),
					'rules' => 'required'
					),
				);		*/
		//$this->form_validation->set_rules($config);

		$this->form_validation->set_rules('doc_fname', 'Firstname', 'required|min_length[2]|max_length[50]');
		//$this->form_validation->set_rules('doc_lname', 'Lastname', 'required|min_length[2]|max_length[50]');		
		//$this->form_validation->set_rules('doc_email', 'Email', 'required|valid_email');	
		//$this->form_validation->set_rules('doc_dob', 'Date of Birth', 'required');		
		
		//$this->form_validation->set_rules('doc_course[]', 'Course', 'required');		
		//$this->form_validation->set_rules('doc_med_ed_institution[]', 'Educational Institution', 'required');

							

			if ($this->form_validation->run() == FALSE)
				$this->load->view('admin/add_doctor_view',$data);		
			
			else if($this->form_validation->run() == TRUE){
				$result = $this->Admin_model->insert_doctor();
				redirect(base_url() . 'admin/add_doctor_page');				
			}
			
	}

	public function delete_doctor_page(){
		$this->load->model('Admin_model');
		$data['temp'] = $this->Admin_model->get_pending_doctors_number();
		$data['number_of_pending'] = count($data['temp']);

		$this->load->view('admin/delete_doctor_view',$data);
	}


	public function register_doctor(){


	
	}
	

	public function email_test(){
	
	$config = Array(		
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.gmail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'docdirect.info@gmail.com',
		    'smtp_pass' => 'docdirect2016',
		    'smtp_timeout' => '4',
		    'mailtype'  => 'text', 
		    'charset'   => 'iso-8859-1'
		);

 		 $subject = "Activate your account on DocDirect.ph";
		 $message = 'You have recently entered your activation code at DocDirect.ph' 
		 			. "\n\n\n"
		 			.'Click or copy the link below to activate your account.'
		 			. "\n"
		 			. "DocDirect.ph/verify/hasodihoiashdoiashdoihasodh1093u219032";

		 $this->load->library('email', $config);
		 $this->email->set_newline("\r\n");
     	 $this->email->from('docdirect.info@gmail.com'); // change it to yours
    	 $this->email->to('johnpatricksuelto@gmail.com.com');// change it to yours
    	 $this->email->subject($subject);
    	 $this->email->message($message);
    	  
    	 	if($this->email->send())    	 
   	 			echo 'Email sent.';   	 	 
    		else
    	 		show_error($this->email->print_debugger());
  	  
	}

	public function test_pages(){

		$this->load->view('testing.html');

	}


}
