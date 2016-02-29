<?php

class Gu_m extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }
  
	/* Model for General User */
	function insert_general_user($email, $hashed_password, $firstname, $lastname, $contact, $gender)
	{
		$gu = array(
				'gu_email' => $email,
				'gu_password' => $hashed_password,
				'gu_firstname' => $firstname,
				'gu_lastname' => $lastname,
				'gu_contact' => $contact,
				'gu_gender' => $gender
			);

		$this->db->insert('tbl_general_user', $gu);
	}

	function update_general_user($gu_id, $gu_details)
	{
		$this->db->where('gu_id', $gu_id);
		$this->db->update('tbl_general_user', $gu_details, NULL, 1);
	}

	function get_all_general_users()
	{
		$query = $this->db->get('tbl_general_user');
		return $query->result();	// returns all the generals users as an Object, not as an array
	}

	function get_general_user_by_id($gu_id = 0)
	{
		$query = $this->db->select('gu_id, gu_email, gu_firstname, gu_lastname, gu_mobile_no, gu_gender')->get_where('tbl_general_user', array('gu_id' => $gu_id), 1, 0);
		return $query->first_row();
	}
}