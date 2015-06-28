<?php
class userinfo extends CI_Model {
	function creating_user() {
		$insert_user_in_database = array (
				'firstname' => $this->input->post ( 'firstname' ),
				'lastname' => $this->input->post ( 'lastname' ),
				
				'emailad' => $this->input->post ( 'emailad' ),
				'mobile' => $this->input->post ( 'mobile' ) 
		);
		
		$query = $this->db->insert ( 'users_info', $insert_user_in_database );
		return $query;
	}
	function view_Contacts() {
		$this->db->select ( "id,firstname,lastname,emailad,mobile" );
		$this->db->from ( 'users_info' );
		$query = $this->db->get ();
		return $query->result ();
	}
	function fetch_f_model($id) {
		$query = $this->db->get_where ( 'users_info', array (
				'id' => $id 
		) );
		
		if ($query->num_rows () > 0) {
			return $query->row_array ();
		} else {
			return false;
		}
	}
	function delete($id) {
		$query = $this->db->delete ( 'users_info', array (
				'id' => $id 
		) );
		return $query;
	}
	function  update($id,$date_user_in_database){
		
		$this->db->where('id', $id);
		$this->db->update('users_info', $date_user_in_database);
		return  true;
	}
}
?>