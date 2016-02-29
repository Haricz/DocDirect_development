<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dir extends CI_Controller {

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
		$this->load->view('directory/gu/basic_search.php');
	}

	public function search()
	{
		$data['specializations'] = $this->Doctor_m->get_all_specializations();
		$data['hospitals'] = $this->Doctor_m->get_all_hospitals();

		$spec = $this->input->get('specialization');
		$data['search_subject'] = $this->Doctor_m->get_specialization_by_id($spec);

		$hospital = $this->input->get('hospital');
		if(isset($_GET['booking']))
			$has_booking = 1;
		else
			$has_booking = 0;
		
		// get day
		/*foreach($_GET['day'] as $days){
			print_r($days);
		}*/
 
		// get name
		$name = $this->input->get('name');

		// add availability

		// get count no. of doctors
		$num_doctors = $this->Doctor_m->count_doctors_by_search($spec, $has_booking, $hospital, 0, $name);
		$data['num_doctors'] = $num_doctors;

		// add limits for pagination
		$this->load->library('pagination');
		$config['base_url'] = base_url('dir/search');
		$config['total_rows'] = $num_doctors;
		$config['per_page'] = 2;
		$config['reuse_query_string'] = TRUE;
		$config['first_tag_open'] = $config['last_tag_open'] = $config['next_tag_open'] = $config['prev_tag_open'] = '<li>';
		$config['first_tag_close'] = $config['last_tag_close'] = $config['next_tag_close'] = $config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><span><b>';
		$config['cur_tag_close'] = '</b></span></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		if($this->uri->segment(3)) {
			$page = $this->uri->segment(3);
		} else {
			$page = 1;
		}

		$doctors = $this->Doctor_m->get_doctors_by_search($spec, $has_booking, $hospital, 0, $name, $page, $config['per_page']);

		$this->Misc_m->print_formatted($doctors);

		$data['doctors'] = $doctors;
		$this->load->view('directory/gu/search_results.php', $data);
	}

	public function doctor($doc_longname)
	{
		$doc_id = $this->Doctor_m->get_doctor_id_by_longname($doc_longname);

		$result = $this->Doctor_m->retrieve_doctor_info($doc_id);
		$data["doctor"] = $result;

		$result = $this->Doctor_m->retrieve_education_info($doc_id);
		$data["education"] = $result;

		$result = $this->Doctor_m->retrieve_experience_info($doc_id);
		$data["experience"] = $result;

		$result = $this->Doctor_m->retrieve_certification_info($doc_id);
		$data["certification"] = $result;

		$result = $this->Doctor_m->retrieve_organization_info($doc_id);
		$data["organization"] = $result;

		$result = $this->Doctor_m->retrieve_specialization($doc_id);
		$data["spec"] = $result;

		$result = $this->Doctor_m->get_office_info($doc_id);
		$data["offices"] = $result;	

		$result = $this->Doctor_m->retrieve_review($doc_id);
		$data["reviews"] = $result;

		$this->load->view('directory/doctor_profile.php', $data);
	}

	public function test_schedule($doc_id)
	{
		$this->Misc_m->print_formatted($this->Doctor_m->create_doctor_availability_string($doc_id));
	}
}