<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* For Authentication functions of the system */
class User extends CI_Controller {

	public function index()
	{
		$this->load->view('common/gu/appointments');
	}

	public function appointments(){
		$gu_id = $this->session->userdata('acc_id');

		$data['gu'] = $this->Gu_m->get_general_user_by_id($gu_id);
		$this->Misc_m->print_formatted($data['gu']);

		$this->load->view('common/gu/appointments', $data);
	}

	public function edit_profile(){
		$gu_id = $this->session->userdata('acc_id');

		$data['gu'] = $this->Gu_m->get_general_user_by_id($gu_id);
		$this->Misc_m->print_formatted($data['gu']);
		
		$this->load->view('common/gu/edit_user_profile', $data);
	}

	public function save_edits(){
		$gu_id = $this->input->post('gu_id');
		$gu['gu_firstname'] = $this->input->post('firstname');
		$gu['gu_lastname'] = $this->input->post('lastname');
		$gu['gu_mobile_no'] = $this->input->post('mobile_no');
		$gu['gu_email'] = $this->input->post('email');
		$gu['gu_gender'] = $this->input->post('gender');

		$this->Gu_m->update_general_user($gu_id, $gu);

		$this->session->set_flashdata('success_msg', 'Your account information has been updated.');
		redirect(base_url() . 'user/edit_profile?section=personal_info');
	}

	public function save_password_edits(){
		$gu_id = $this->input->post('gu_id');
		$curr_pw = $this->input->post('curr_pw');
		$new_pw = $this->input->post('new_pw');
		$new_pw2 = $this->input->post('new_pw2');

		if($new_pw == $new_pw2 && $this->Auth_m->if_general_user_exists($this->session->userdata('gu_email'), $curr_pw)) {

			$gu['gu_password'] = $this->input->post('new_pw');

			$this->Gu_m->update_general_user($gu_id, $gu);

			$this->session->set_flashdata('success_msg', 'Your password has been updated.');
			redirect(base_url() . 'user/edit_profile?section=password');
		} else {
			$this->session->set_flashdata('error_msg', 'Current password is incorrect or New Password & Retype New Password does not match');
			redirect(base_url() . 'user/edit_profile?section=password');
		}
	}
}
