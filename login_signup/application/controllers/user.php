<?php
class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('userinfo');
		$this->baseurl=dirname(dirname(base_url()));
	}
	function members(){
		$data['content']='success';
		$this->load->view('v_content',$data);
	}
	public function index()
	{
		  $this->load->view('landingpage');
	}
	 
	public function addcontact(){
		$this->load->view('add_contact');
	}
	
	 
	 public	function registration(){

		 

		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
		 

		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
		 
		$this->form_validation->set_rules('emailad', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('mobile', 'mobile', 'valid_number|required|min_length[10]|max_length[10]');
		 
		if($this->form_validation->run() == false)
		{
			$this->addcontact();
		}
			
		else
		{
			if($query = $this->userinfo->creating_user())
			{
				$this->viewcontacts();
			}
			else
			{
			//$this->load->view('add_contact');
				$this->index();
			}
		}

	 

	}
	public function viewcontacts(){
	
         $this->data['contact']=$this->userinfo->view_Contacts();
		$this->load->view('view_contacts',$this->data);
         

	}
	public function edit(){
		$id  = $this->input->get('id');
	
		$this->qdata['post_r']=$this->userinfo->fetch_f_model($id);
	
	
		 
	
			$this->load->view('edit',$this->qdata);
			
	
		 
	 
	}
	public function delete(){
		$id  = $this->input->get('id');
	$delete=	$this->qdata['post_r']=$this->userinfo->delete($id);
	if($delete){
		$this->viewcontacts();
	}
		
	}
	public function update(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
			
		
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
			
		$this->form_validation->set_rules('emailad', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('mobile', 'mobile', 'valid_number|required|min_length[10]|max_length[10]');
			
		if($this->form_validation->run() == false)
		{
			$this->edit();
		}else{
		$id  = $this->input->post('id');
		$date_user_in_database = array (
				'firstname' => $this->input->post ( 'firstname' ),
				'lastname' => $this->input->post ( 'lastname' ),
		
				'emailad' => $this->input->post ( 'emailad' ),
				'mobile' => $this->input->post ( 'mobile' )
		);
			if($query = $this->userinfo->update($id,$date_user_in_database))
			{
				$this->viewcontacts();
			} 
		}
	}
	}
 

?>