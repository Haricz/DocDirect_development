<!-- Controller for Admin -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* For Authentication functions of the system */
class Doctor extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Manila');
	}

	function index()
	{
		$this->load->model("Doctor_m");

		$result = $this->Doctor_m->retrieve_doctor_info(1);
		$data["doctor"] = $result;

		$result = $this->Doctor_m->retrieve_education_info(1);
		$data["education"] = $result;

		$result = $this->Doctor_m->retrieve_experience_info(1);
		$data["experience"] = $result;

		$result = $this->Doctor_m->retrieve_certification_info(1);
		$data["certification"] = $result;

		$result = $this->Doctor_m->retrieve_organization_info(1);
		$data["organization"] = $result;

		$result = $this->Doctor_m->retrieve_specialization(1);
		$data["spec"] = $result;

		$result = $this->Doctor_m->get_office_info(1);
		$data["offices"] = $result;	

		$result = $this->Doctor_m->retrieve_review(1);
		$data["reviews"] = $result;

		// $this->load->view('common/header_doc.php');
		$this->load->view('directory/doctor_profile.php', $data);
		// $this->load->view('common/footer.php');

		$this->Misc_m->print_formatted($data['doctor']);
	}

	function update_office()
	{
		$id = $_POST['pk'];
    	$name = $_POST['name'];
   		$value = $_POST['value'];

    	$this->load->model("Doctor_m");

    	if($name == "office_tel_no")
    	{
			$update_info=array(
				'office_tel_no' => $value
			);
		}

		else if($name == "office_name")
		{
			$update_info=array(
				'office_name' => $value
			);	
		}	

		else if($name == "hosp_address")
		{
			$update_info=array(
				'hosp_address' => $value
			);	
			$this->Doctor_m->update_address($id,$update_info);
		}	

		if($name != "hosp_address")
		{
			$this->Doctor_m->update_office($id,$update_info);
		}
	}

	function update_doc_info()
	{
		$id = $_POST['pk'];
    	$name = $_POST['name'];
   		$value = $_POST['value'];

    	$this->load->model("Doctor_m");

    	if($name == "edu_institution")
    	{
			$update_info=array(
				'edu_institution' => $value
			);
		}

		else if($name == "cert_name")
    	{
			$update_info=array(
				'cert_name' => $value
			);
		}

		else if($name == "org_name")
    	{
			$update_info=array(
				'org_name' => $value
			);
		}

		$this->Doctor_m->update_doc_info($id,$update_info,$name);
	}


	function addReview1()
	{
		$review_info=array( 
				'rev_gu_id' => 4, //user session id
				'rev_doc_id' => 1, //doctor session id
				'rev_rating' => $this->input->post('rev_rating'),
				'rev_review' => $this->input->post('rev_review'),
				);
		$this->load->model("Doctor_m");
		$this->Doctor_m->addReview($review_info);
		$result = $this->Doctor_m->retrieve_doctor_info(2);
		$data["doctor"] = $result;

		$result = $this->Doctor_m->retrieve_education_info(2);
		$data["education"] = $result;

		$result = $this->Doctor_m->retrieve_experience_info(2);
		$data["experience"] = $result;

		$result = $this->Doctor_m->retrieve_certification_info(2);
		$data["certification"] = $result;

		$result = $this->Doctor_m->retrieve_organization_info(2);
		$data["organization"] = $result;

		$result = $this->Doctor_m->retrieve_specialization(2);
		$data["spec"] = $result;

		$result = $this->Doctor_m->get_office_info(2);
		$data["offices"] = $result;	

		$result = $this->Doctor_m->retrieve_review(2);
		$data["review"] = $result;
		echo json_encode($data);
	}

	
}
