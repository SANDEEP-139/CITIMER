<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
    function __construct() {
        parent::__construct();
        
    }

    
    
    
    public function getUser(){
        $id =$this->input->post('id');
       $result = $this->db->get_where('emp',array('user_id'=>$id))->row_array();
       echo json_encode($result);
    }
    
   
        public function userlist($par1='')
	{
            
            
             
            $pagedata['id']=$par1;
	$pagedata['record']=   $this->db->get('emp')->result_array();
        if($par1){
$pagedata['updaterecord'] = $this->db->get_where('emp',array('user_id'=>$par1))->result_array();
//print_r($pagedata['updaterecord']); die;

}
	$this->load->view('poopup',$pagedata);
        }
        
        
        
        
        
        
        public function usermanagement($par1='',$par2=''){
             $data=array(
    
	'name'=>$this->input->post('name'),
	'email'=>$this->input->post('email'),
	'contact'=>$this->input->post('contact'),
	'address'=>$this->input->post('address'),
         'qualification'=>  $this->input->post('qualification'),
          'gender'=>  $this->input->post('gender'),
          'hoobies'=>  $this->input->post('hoobies')
	);
             if($par1=='create'){

          
//      echo  $result = 
              $this->db->insert('emp',$data);
       
      
        }      
        
        
if($par1=='update'){
    
      //print_r($_POST); die;
   
	$id  =$this->input->post('id');
	$this->db->where( 'user_id' ,$id);
	$result=$this->db->update('emp',$data);
        if ($result) {
            echo "record update successfully";
		# code...
	$this->session->set_flashdata('success','record update successfully');
    }
else{
    echo "record not update ";

      $this->session->set_flashdata('failure','record not updated');
	
  }
  redirect('app/userlist');

	

  

}

///deletesatar
 if ($par1=='delete') {
		 
		 
		
	 	$id=$par2;
	 	$this->db->where('user_id' ,$id);
	    $user=$this->db->delete('emp');
//redirect('app/userlist');
	 	# code...
	  	 if($user){
                       //echo 'record deleted';
	  	 $this->session->set_flashdata('success','record deleted successfully');
	  	 	
	  	 }
	  	else
	  	{ 
	  	 $this->session->set_flashdata('failure','record not found in database');
	 /// echo 'record not deleted';
	  	}
	redirect('app/userlist');
	  
	//
 }
//end
      

} 








}


	 
?>


