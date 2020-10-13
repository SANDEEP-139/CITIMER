<?php

class User_model extends CI_model
{
	function create($formArray)
	{
		$this->db->insert('timer' ,$formArray);
		 // insert into table  


	}

	function all(){

        // $this->db->from('timer');
        // $this->db->order_by("id", "desc");
        //$query = $this->db->get(); 
        // return $query->result_array();
        $result = $this->db->get('timer')->result_array();
        return $result;

		// return $users=$this->db->get('timer')->result_array();
		 //select * from users
	}
	 function getUser($userId){
	 	$this->db->where( 'id' ,$userId);
	 	 return $user=$this->db->get('timer')->row_array();
	 	 //select * table where id
	 }
	 function updateuser($userId,$formArray)
	 {
	 	$this->db->where( 'id' ,$userId);
	 	$this->db->update('timer',$formArray);
	 } 
	 //update users where id
	    function deleteuser($userId)
	    {
	    	$this->db->where('id' ,$userId);
	    	$this->db->delete('timer');
	    	// delete from table where id
	    }
}
?>