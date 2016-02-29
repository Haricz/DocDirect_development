<?php

	class Admin_model extends CI_Model {
 

		function add_doctor(){

			
		}

		function get_specializations(){
			
			$query = $this->db->get('tbl_specialization_list');
			return $query->result();
		}

		function get_hospitals(){

			$query = $this->db->get('tbl_hospital');
			return $query->result();

		}

		function get_pending_doctors_number(){
			$query = $this->db->get('tbl_pending_doctors');
			return $query->result();
		}

		public function add_doctor_to_pending($pending_doctor_data){

		$this->load->model('Doctor_m');

		$this->Doctor_m->insert_to_doctor_pending_table($doc_fname, $doc_lname, $doc_spec, $doc_email, $doc_contact,$pending_registration_link);

		redirect(base_url() . 'home/registration_successful');
		
		}

		function insert_doctor(){

			//PERSONAL INFORMATION
			$doc_fname = $this->input->post('doc_fname');
			$doc_mname = $this->input->post('doc_mname');
			$doc_lname = $this->input->post('doc_lname');
			$doc_email= $this->input->post('doc_email');
			$doc_dob= $this->input->post('doc_dob');
			$doc_gender= $this->input->post('doc_gender');
				$doc_longname = "dr-" . $doc_fname . "-" .$doc_lname;
				$doc_longname = strtolower($doc_longname);
			$doc_prc = $this->input->post('doc_prc');
			//SPECIALIZATION
				//docspec_doc_id -> refers to the Doctor (tbl_doctor)
				//docspec_spec_id -> refers to the Specialization (tbl_specialization_list)			
			$doc_main_spec = $this->input->post('doc_main_spec');
			$doc_other_spec = $this->input->post('doc_other_specialties');
			//ORGANIZATION
			$doc_pos = $this->input->post('doc_pos');
			$doc_org = $this->input->post('doc_org');
			//MEDICAL EDUCATION			
			$doc_med_ed_institution = $this->input->post('doc_med_ed_institution');
			$doc_course = $this->input->post('doc_course');
			//CLINIC AND OFFICE INFORMATION
			$doc_hospital = $this->input->post('doc_hospital');
			$doc_room = $this->input->post('doc_room');
			$doc_office_number = $this->input->post('doc_office_number');
			$doc_consultation_fee = $this->input->post('doc_consultation_fee');
			//MEDICAL EXPERIENCE
			$doc_work = $this->input->post('doc_work');
			$doc_med_ex_institution = $this->input->post('doc_med_ex_institution');
			$doc_start_date = $this->input->post('doc_start_date');
			$doc_end_date = $this->input->post('doc_end_date');

			
			$sql_personal_info = "INSERT INTO tbl_doctor(doc_gender, doc_status, doc_fname, doc_mname, doc_lname,
											doc_longname, doc_bday, doc_prc_num, doc_has_booking)
  									VALUES('$doc_gender', 2, '$doc_fname', '$doc_mname', '$doc_lname', 
  									'$doc_longname', '$doc_dob', '$doc_prc', 0)";

		
			$this->db->query($sql_personal_info);
			$doc_id = $this->db->insert_id(); //CURRENT DOCTOR 	


			$sql_main_specialization = "INSERT INTO tbl_doc_spec(docspec_doc_id, docspec_spec_id)
										VALUES('$doc_id', '$doc_main_spec');";				

	
				
				


			$this->db->trans_begin();

			if($doc_main_spec > 0)
			$this->db->query($sql_main_specialization);

			if(empty($doc_other_spec) == FALSE){
				foreach ($doc_other_spec as $spec) {
					$sql_other_specializations = "INSERT INTO tbl_doc_spec(docspec_doc_id, docspec_spec_id)
													VALUES('$doc_id', '$spec');";
					$this->db->query($sql_other_specializations);
				}				
			}

			if(empty($doc_pos) == FALSE){
				for($i=0; $i<count($doc_pos); $i++){
				$sql_organization = "INSERT INTO tbl_organization(org_doc_id, org_position, org_name)
						VALUES('$doc_id', '$doc_pos[$i]', '$doc_org[$i]');";
				$this->db->query($sql_organization);
				}				
			}

			if(empty($doc_course) == FALSE){
				for($i=0; $i<count($doc_course); $i++){
				$sql_med_education = "INSERT INTO tbl_education(edu_doc_id, edu_institution, edu_course)
						VALUES('$doc_id', '$doc_org[$i]', '$doc_course[$i]');";
						$this->db->query($sql_med_education);
				}		
			}

			if(empty($doc_work) == FALSE){
				for($i=0; $i<count($doc_work); $i++){
				$sql_med_experience = "INSERT INTO tbl_experience(exp_doc_id, exp_start_year, exp_end_year,
													exp_position, exp_office_name)
						VALUES('$doc_id', '$doc_start_date[$i]', '$doc_end_date[$i]', 
								'$doc_work[$i]', '$doc_med_ex_institution[$i]');";	
				$this->db->query($sql_med_experience);
				}	
			
			}


			if(empty($doc_hospital) == FALSE){
					for($i=0; $i<count($doc_hospital); $i++){
						$query = $this->db->get_where('tbl_hospital',array('hosp_id' => $doc_hospital[$i]));
						$result = $query->result_array();
						$doc_office_name = $result[0]['hosp_name'];	

						$doc_office_name = "Room " . $doc_room[$i] . " " . $doc_office_name;
						$sql_hospital = "INSERT INTO tbl_office(office_doc_id, office_hosp_id, office_name, office_tel_no, office_consultation_fee)
										VALUES('$doc_id', '$doc_hospital[$i]', '$doc_office_name', '$doc_office_number[$i]', '$doc_consultation_fee[$i]')";	
					$this->db->query($sql_hospital);
					}
				}
				

			if ($this->db->trans_status() === FALSE)
   				 $this->db->trans_rollback();
   				else
   					$this->db->trans_commit();









   			$this->db->trans_begin();
   			/*Generate random code for doctor*/
				$this->load->model('Misc_m');
				$doc_code = $this->Misc_m->get_rand_id();

				$sql_random_code= "INSERT INTO tbl_doctor_code(dc_code, dc_used, dc_date_created, dc_status, dc_doc_id)
									VALUES('$doc_code', 0, CURRENT_TIMESTAMP, 0, '$doc_id')";
				$this->db->query($sql_random_code);
				$dc_id = $this->db->insert_id();

			/*Generate account for doctor*/			
				$this->load->model('Auth_m');
				$doc_password = $this->Auth_m->create_hash($doc_code);

				$activation_code = md5(uniqid(rand(), true));

				$sql_doc_account= "INSERT INTO tbl_doctor_account(dacc_doc_id, dacc_email, dacc_password, dacc_date_created,
									dacc_activation_code, dacc_activation_status, dacc_changed_pass_status, dacc_dc_id)
									VALUES('$doc_id', '$doc_email', '$doc_password', CURRENT_TIMESTAMP, '$activation_code', 0, 0, '$dc_id')";

				$this->db->query($sql_doc_account);

			if ($this->db->trans_status() === FALSE)
   				 $this->db->trans_rollback();
   				else
   					$this->db->trans_commit();
			
			

			return $doc_fname;

		}

		function get_details_for_activation($doc_id){

			$query = $this->db->get_where('tbl_doctor_account', array('dacc_doc_id' => $doc_id));
			return $query->result_array();

		}

		function verifyEmailAddress($activation_code){

				$sql2 = $this->db->get_where('tbl_doctor_account', array('dacc_activation_code' => $activation_code));
				$result = $sql2->result_array();

				$data= $result[0]['dacc_activation_status'];
				if($result == 1)
					return -1;				
				else{
					$sql = $this->db->get_where('tbl_doctor_account', array('dacc_activation_code' => $activation_code));
					//$sql = "UPDATE tbl_doctor_account SET dacc_activation_status=1 WHERE dacc_activation_code=?";
					$check_if_existing = $sql->num_rows();

					$sql3 = $this->db->get_where('tbl_doctor_account', array('dacc_activation_code' => $activation_code));
					$result = $sql3->result_array();
					$email = $result[0]['dacc_email'];

					$this->session->set_userdata('change_pass_email',$email);
					return $check_if_existing;
				}
			
		}

		function changePassword($email, $password){

			$this->load->model('Auth_m');


			$password = $this->Auth_m->create_hash($password);
			$sql = "UPDATE tbl_doctor_account SET dacc_password=? WHERE dacc_email=?";
			$this->db->query($sql,array($password,$email));

			$sql = "UPDATE tbl_doctor_account SET dacc_activation_status=1, dacc_changed_pass_status=1 WHERE dacc_email=?";
			$this->db->query($sql,array($email));

			$this->session->unset_userdata('change_pass_email');	

			echo "You have successfully changed your password!";			

		}

	}