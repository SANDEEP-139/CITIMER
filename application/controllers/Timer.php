<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timer extends CI_Controller {

	function __construct() {
        parent::__construct();
    }


    public function getproduct($par1=''){
       

       $result = $this->db->get_where('add_subcategory',array('category'=>$par1))->result_array();
      //print_r($result);die;
       $output = '';
       foreach($result as $value){
       	?>
       	<option value="<?php  echo $value['category'];?>"><?php  echo $value['subcategory_name'];?>	</option>
       	<?php
       

       }


     
    } 
	
	function index()
	{
		$this->load->model('User_model');
		$users=$this->User_model->all();
		$this->session->set_userdata('users',$users);
		$res=$this->session->userdata('users');
		//var_dump($res[0]['date']); die;
	    $data=array();
		$data['users']=$users;
		
		//var_dump($users['date']); die;
		//$users = $users['date'];
		//var_dump($users['date']) ; die;
          //$data = $users['h'];
         // $data = $users['m'];
          //$data = $users['s'];
		$this->load->view('list',$data);
	}
	 function create()
	 {
	 	$this->load->model('User_model');
	 	$this->form_validation->set_rules('date','date','required');
	 	$this->form_validation->set_rules('h','h','required');
	 	$this->form_validation->set_rules('m','m','required');
	 	$this->form_validation->set_rules('s','s','required');
	 	if($this->form_validation->run()==false)
	 	{
	 		$this->load->view('create');

	 	}
	 	else

	 	{
	 		//save record to database
	 		$formArray=array();
	 		$formArray['date']=$this->input->post('date');
	 		$formArray['h']=$this->input->post('h');
	 		$formArray['m']=date('m');
	 		$formArray['s']=date('s');
	 		$this->User_model->create($formArray);
	 		$this->session->set_flashdata('success','record added successfully');
	 		redirect( base_url().'Timer/index');
	 	}
	 	
	 }
	 function edit($userId){
	 	$this->load->model('User_model');
	 	$user=$this->User_model->getUser($userId);
	 	$data=array( );
	 	$data ['user']=$user;
	 	$this->form_validation->set_rules('date','date','required');
	 	$this->form_validation->set_rules('h','h','required');
	 	$this->form_validation->set_rules('m','m','required');
	 	$this->form_validation->set_rules('s','s','required');
	 	if($this->form_validation->run()==false){
	 	$this->load->view('edit',$data);
}
else{
	$formArray=array();
	$formArray['date']=$this->input->post('date');
	$formArray['h']=$this->input->post('h');
	$formArray['m']=$this->input->post('m');
	$formArray['s']=$this->input->post('s');
	$this->User_model->updateuser($userId,$formArray);
	$this->session->set_flashdata('success','record update successfully');
	redirect(base_url().'Timer/index');

	//update user recoord
}

	 }


	  function delete($userId)
	  {
	  	$this->load->model('User_model');
	  	 $user=$this->User_model->getuser($userId);
	  	 if(empty($user)){
	  	 $this->session->set_flashdata('failure','record not found in database');
	redirect(base_url().'Timer/index');	
	  	 }
	  	 $this->User_model->deleteuser($userId);
	  	 $this->session->set_flashdata('success','record deleted successfully');
	redirect(base_url().'Timer/index');
	  }
}
