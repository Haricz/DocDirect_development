<?php

class Doctor_m extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  

  /*DOCTOR REGISTRATION*/
  function insert_to_doctor_pending_table($pending_doctor_data){

    $query = $this->db->insert('tbl_pending_doctors',$pending_doctor_data);
  }
  /*DOCTOR REGISTRATION*/

  /*CHECK IF AUTHENTICATION CODE IS VALID*/

  function check_if_code_is_valid($code){

    $query = $this->db->get_where('tbl_doctor_code',array('dc_code' => $code));
    return $query->result_array();
  }

  function check_if_code_is_activated($code){

    $query = $this->db->get_where('tbl_doctor_code',array('dc_code' => $code));
    $data = $query->result_array();
    $doc_id = $data['0']['dc_doc_id'];
    //echo $doc_id;

    $query2 = $this->db->get_where('tbl_doctor_account',array('dacc_doc_id' => $doc_id));
    $data2 = $query2->result_array();
    //echo $data2['0']['dacc_activation_status'];
    return $data2['0']['dacc_activation_status'];
  }

  /*CHECK IF AUTHENTICATION CODE IS VALID*/

  /*CHECK IF EMAIL IS ALREADY IN USE*/

  function check_if_email_is_in_use($email){

    $query = $this->db->get_where('tbl_doctor_account', array('dacc_email' => $email));
    return $query->num_rows();

  }

  function check_if_email_is_pending($email){

    $query = $this->db->get_where('tbl_pending_doctors', array('pd_email' => $email));
    return $query->num_rows();

  }

  /*CHECK IF EMAIL IS ALREADY IN USE*/

  function get_email_from_code(){

    $query = $this->db->get_where('tbl_doctor');
  }


  /* DOCTOR FUNCTIONS */
  function get_doctor_id_by_longname($doc_longname)
  {
    $query = $this->db->select('doc_id')->from('tbl_doctor')->where('doc_longname', $doc_longname)->get();
    return $query->result_array()[0]['doc_id'];
  }

  function get_doctor_by_id($doc_id = 0)
  {
		$query = $this->db->get_where('tbl_doctor', array('doc_id' => $doc_id), 1, 0);
		// merge doctor info
  }

  function get_all_doctors()
  {
  	$query = $this->db->get('tbl_doctor');
  	// merge doctor info
  	return $query->result();
  }

  function count_doctors_by_search($spec = 0, $has_booking = 0, $hospital = 0, $availability = 0, $name = "") {
    /* filters are: 
      -specialization
      -w/ online booking
      -institution/hospital
      -availability
    */

    // HAS BOOKing FILTER
    if($has_booking == 0)
      $this->db->select('COUNT(*)')->from('tbl_doctor'); // any doctor w/ or without booking
    else
      $this->db->select('COUNT(*)')->from('tbl_doctor')->where('doc_has_booking', $has_booking);

    if($name != "") {
      $this->db->like("CONCAT(doc_fname, ' ', doc_lname)", $name); 
    }

    // SPECIALIZATION FILTER
    if($spec == 0) {  // any specialization
      // do nothing
      $this->db->join('tbl_doc_spec', 'tbl_doc_spec.docspec_doc_id = tbl_doctor.doc_id');
      $this->db->join('tbl_specialization_list', 'tbl_specialization_list.spec_id = tbl_doc_spec.docspec_spec_id');
    }
    else {
      $this->db->join('tbl_doc_spec', 'tbl_doc_spec.docspec_doc_id = tbl_doctor.doc_id')->where('docspec_spec_id', $spec);
      $this->db->join('tbl_specialization_list', 'tbl_specialization_list.spec_id = tbl_doc_spec.docspec_spec_id');
      // $this->db->select('*')->where('docspec_spec_id', $spec)->from('tbl_doc_spec');
    }

    if($hospital == 0) { // any hospital
      // do nothing
    }
    else{
      $this->db->join('tbl_office', 'tbl_office.office_doc_id = tbl_doctor.doc_id')->where('office_hosp_id', $hospital);
    }

    // add filter for availability here!

    // add other info for doctor here like: - offices, - stars
    // $this->db->join('tbl_office', 'tbl_office.office_doc_id = tbl_doctor.doc_id');

    $query = $this->db->get();
    return $query->result_array()[0]['COUNT(*)'];
  }

  function get_doctors_by_search($spec = 0, $has_booking = 0, $hospital = 0, $availability = 0, $name = "", $page = 1, $per_page = 10)
  {
  	/* filters are: 
			-specialization
			-w/ online booking
			-institution/hospital
			-availability
  	*/

		// HAS BOOKing FILTER
		if($has_booking == 0)
			$this->db->select('*')->from('tbl_doctor'); // any doctor w/ or without booking
		else
			$this->db->select('*')->from('tbl_doctor')->where('doc_has_booking', $has_booking);

    if($name != "") {
      $this->db->like("CONCAT(doc_fname, ' ', doc_lname)", $name); 
    }

		// SPECIALIZATION FILTER
		if($spec == 0) {	// any specialization
			// do nothing
			$this->db->join('tbl_doc_spec', 'tbl_doc_spec.docspec_doc_id = tbl_doctor.doc_id');
			$this->db->join('tbl_specialization_list', 'tbl_specialization_list.spec_id = tbl_doc_spec.docspec_spec_id');
		}
		else {
			$this->db->join('tbl_doc_spec', 'tbl_doc_spec.docspec_doc_id = tbl_doctor.doc_id')->where('docspec_spec_id', $spec);
			$this->db->join('tbl_specialization_list', 'tbl_specialization_list.spec_id = tbl_doc_spec.docspec_spec_id');
			// $this->db->select('*')->where('docspec_spec_id', $spec)->from('tbl_doc_spec');
		}

		if($hospital == 0) { // any hospital
			// do nothing
		}
		else{
			$this->db->join('tbl_office', 'tbl_office.office_doc_id = tbl_doctor.doc_id')->where('office_hosp_id', $hospital);
		}

		/* add filter for availability here! */

		// add other info for doctor here like: - offices, - stars
		// $this->db->join('tbl_office', 'tbl_office.office_doc_id = tbl_doctor.doc_id');


    /* Getting of doctors' image */
    $this->db->join('tbl_doctor_image', 'tbl_doctor_image.img_doc_id = tbl_doctor.doc_id');


    /* Add LIMITS for PAGINATION HERE */
    if($page != 0)
      $this->db->limit($per_page, ($page - 1) * $per_page);


		$query = $this->db->get();
		echo $this->db->last_query();

		$doctors = $query->result(); 

		foreach ($doctors as $doctor) {
			$this->db->reset_query();
			$query = $this->db->get_where('tbl_office', array('office_doc_id' => $doctor->doc_id));

			$doc_offices = $query->result();

			$doctor->offices = $doc_offices;
		}


		//echo '<br/>' . $this->db->last_query();
		return $doctors;
  }

  function create_doctor_availability_string($office_id)
  {
    $this->db->select('o.office_id, o.office_doc_id, s.sched_day, s.sched_time_start, s.sched_time_end')->from('tbl_office AS o')->join('tbl_schedule AS s', 'o.office_id = s.sched_office_id')->where('o.office_id', $office_id);

    /*$string_arr = array();
    for($i = 0; $i < count($scheds); $i++) {
      for($j = $i + 1; $j < count($scheds); $j++) {
        if($scheds[$i]->sched_time_start == $scheds[$j]->sched_time_start && $scheds[$i]->sched_time_end == $scheds[$j]->sched_time_end) {
          array_push($string_arr);
        }
      }
    }*/

    $query = $this->db->get();
    $scheds = $query->result();
  }

  function get_doctor_availability_string()
  {

  }

  /* DOCTOR PROFILE FUNCTIONS */
  function retrieve_doctor_info($session)
  {
    $this->db->start_cache();
    $this->db->flush_cache();
    $this->db->select("*");
    /* Getting of doctors' image */
    $this->db->join('tbl_doctor_image', 'tbl_doctor_image.img_doc_id = tbl_doctor.doc_id');
    $result = $this->db->get_where("tbl_doctor", array('doc_id' => $session))->result_array();
    return $result;
  }

  function retrieve_office_info($session)
  {
    $this->db->start_cache();
    $this->db->flush_cache();
    $this->db->select("*");
    $result = $this->db->get_where("tbl_office", array('office_doc_id' => $session))->result_array();
    return $result;
  }

  function retrieve_specialization($session)
  {
    $this->db->start_cache();
    $this->db->flush_cache();
    $query = $this->db->from("tbl_doc_spec")->where('docspec_doc_id', $session)->join('tbl_specialization_list', 'tbl_specialization_list.spec_id = tbl_doc_spec.docspec_spec_id')->get();
    return $query->result_array();
  }

  function retrieve_education_info($session)
  {
    $this->db->start_cache();
    $this->db->flush_cache();
    $this->db->select("*");
    $result = $this->db->get_where("tbl_education", array('edu_doc_id' => $session))->result_array();
    return $result;
  }

  function retrieve_organization_info($session)
  {
    $this->db->start_cache();
    $this->db->flush_cache();
    $this->db->select("*");
    $result = $this->db->get_where("tbl_organization", array('org_doc_id' => $session))->result_array();
    return $result;
  }

  function retrieve_certification_info($session)
  {
    $this->db->start_cache();
    $this->db->flush_cache();
    $this->db->select("*");
    $result = $this->db->get_where("tbl_certification", array('cert_doc_id' => $session))->result_array();
    return $result;
  }

  function retrieve_experience_info($session)
  {
    $this->db->start_cache();
    $this->db->flush_cache();
    $this->db->select("*");
    $result = $this->db->get_where("tbl_experience", array('exp_doc_id' => $session))->result_array();
    return $result;
  }

  function update_office($id, $value)
  {
    $this->db->where('office_id', $id);
    $this->db->update('tbl_office',$value);
  }

  function update_address($id, $value)
  {
    $this->db->where('hosp_id', $id);
    $this->db->update('tbl_hospital',$value);
  }

  function update_doc_info($id, $value, $name)
  {
    if($name == "edu_institution")
    {
      $this->db->where('edu_id', $id);
      $this->db->update('tbl_education',$value);
    }

    else if($name == "cert_name")
    {
      $this->db->where('cert_id', $id);
      $this->db->update('tbl_certification',$value);
    }

    else if($name == "org_name")
    {
      $this->db->where('org_id', $id);
      $this->db->update('tbl_organization',$value);
    }
  }

  function retrieve_firstrow()
  {
    // $last_row=$this->db->select('subj_id')->order_by('subj_id',"desc")->limit(1)->get('tbl_subjects')->row();
    // $row = $query->last_row();
    $query = $this->db->query("SELECT * FROM tbl_office;");
    $row = $query->first_row('array');
    return $row;
  }

  function get_office_info($office_doc_id)
  {
    $query = $this->db->query("SELECT * from tbl_office left join tbl_hospital on tbl_hospital.hosp_id=tbl_office.office_hosp_id where office_doc_id =". $office_doc_id);
    // $query = $this->db->query("SELECT * FROM 'tbl_office' 
    //                           WHERE 'office_doc_id' = 1 
    //                           JOIN 'tbl_hospital' 
    //                           ON tbl_hospital.hosp_id=tbl_office.office_hosp_id");
    // $query = $this->db->from("tbl_office")->where('office_doc_id', $office_doc_id)->get();
     // echo '<pre>';
     // print_r($query->result_array());
     // echo '</pre>';
    // ->join('tbl_hospital', 'tbl_hospital.hosp_id = tbl_office.office_hosp_id')->get()
    return $query->result_array();

  }

  function get_doctor_info($doc_id)
  {
    $query = $this->db->from("tbl_doctor")->where('doc_id', $doc_id)->join('tbl_education', 'tbl_education.edu_doc_id = tbl_doctor.doc_id')
    ->join('tbl_experience', 'tbl_experience.exp_doc_id = tbl_doctor.doc_id')
    ->join('tbl_organization', 'tbl_organization.org_doc_id = tbl_doctor.doc_id')
    ->join('tbl_specialization_list', 'tbl_specialization_list.spec_id = tbl_doctor.doc_id')
    ->join('tbl_certification', 'tbl_certification.cert_doc_id = tbl_doctor.doc_id')->get();
    return $query->result_array();
  }

  function retrieve_review($doc_id)
  {
      $this->db->start_cache();
      $this->db->flush_cache();
      $query = $this->db->query("SELECT * from tbl_doctor_review left join tbl_general_user on tbl_general_user.gu_id=tbl_doctor_review.rev_gu_id where rev_doc_id = $doc_id ORDER BY rev_id DESC" );
      //$this->db->select("controlnumber, purpose, quantity, venue, mealtype, datetimeneeded, ordertype, food_voucher, status");
      // $this->db->select("*");
      // $result = $this->db->get_where("tbl_doctor_review", array('rev_doc_id' => $doc_id))->result_array();
      // $this->db->order_by("ID", "desc");
      // $result = $this->db->get("announcement");
      // return $result->result_array();
      return $query->result_array();
  }
  function addReview($post)
  {
    $this->db->insert('tbl_doctor_review', $post);
  }



  /* SPECIALIZATION FUNCTIONS */
  function get_all_specializations() {
  	$query = $this->db->select('spec_id, spec_name')->from('tbl_specialization_list')->get();
  	return $query->result();
  }

  function get_specialization_by_id($spec_id = 0){
    if($spec_id == 0)
      return 'Doctor';
    else
      $query = $this->db->select('spec_name')->from('tbl_specialization_list')->where('spec_id', $spec_id)->get();
    return $query->first_row()->spec_name;
  }

  /* HOSPITAL FUNCTIONS */
  function get_all_hospitals() {
  	$query = $this->db->select('hosp_id, hosp_name')->from('tbl_hospital')->get();
  	return $query->result();
  }
}