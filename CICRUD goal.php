
viewlist//
 
 <?php  include 'header.php'?>
<div class="container">
<div class="row">
        <div class="col-md-12">
            <?php
            $success=$this->session->userdata('success');
            if ($success != "") {   
            ?>
            <div class="alert alert-success" style="position: relative; left: 22px;"><?php  echo $success;?></div>
            <?php
             }
            ?>
            <?php
            $failure=$this->session->userdata('failure');
            if ($failure != "") {   
            ?>
            <div class="alert alert-danger"><?php echo $failure; ?></div>
            <?php
             }
            ?>
        </div>
    </div> 
   <div id="content">
                <div class="row mb-4">
                    <div class="col-12 mb-4 mb-xl-0">
                                <div class="card redial-border-light redial-shadow mb-4">
                                    <div class="card-body">
                                                
                  <ul class="list-inline mb-0">
                    <li id="dropzone" class="list-inline-item mr-3 redial-relative">
                    <div class="row">
       
                                               
                                                
                                                
                      </div> 
                </li>

              </ul>
                            
          </div>    

        <div class="col-12 col-sm-12">
            <div class="row">
                <div class="col-12 col-md-12 mb-4">
                    <div class="card redial-border-light redial-shadow">
                        <div class="card-body" style="overflow: visible;">
                        

                                        
                        </div>
                        <div>



<div class="card-body">
        <table id="" class="display table table-bordered" cellspacing="0" style="width:100%">
         <thead>
            <tr>
        <th>Srno</th>
        <th>Title</th>
        <th>Description</th>
        <th>upload</th>

        
        <th>Actions</th>
                </tr>
        </thead>
        <tbody>

<?php  
$i = 1;
         foreach($about as $user){ ?>

            <tr>
    <td> <?php  echo $i;?></td>
    <td> <?php  echo $user['title']?></td>
    <td><?php  echo $user['description']?></td>
    
   
    <td><img src="<?php echo base_url();?>/uploads/<?php  echo $user['uploadfile'];?>" height="55px" width="100px"/></td>


       <td>
            <div class="btn-group">
             <a href="<?php  echo base_url().'About/update/'.$user['id'];?>"> <i class="fa fa-edit"></i></a>
            </div>  
           <div class="btn-group">
             <a href="<?php echo base_url(); ?>About/updateaboutlist/<?php echo $user['id']; ?>/view">View</a>
            </div>
            <div class="btn-group">
              <a href="<?php  echo base_url().'About/delete/'.$user['id'];?>
                " onclick="return confirm('Are you sure you want to delete this item?');" >  <i class="fa fa-trash"></i></a>
            </div>
            </td>
                                                </tr>
                      <?php $i++;} ?> 
                                                
                                            </tbody>
                                        </table>
                                                           
                                                    </div>           
                                                
                                     

                                
</div>
</div>
</div>

</div>           




</div>
</div>
</div>

</div>



</div>
</div>

<?php include 'footer.php' ?>
    
                                                           
                                                
                                                
                        

views//add
<?php  include 'header.php'?>

<?php

if(isset($updaterecord)){
  $action='update_about';
}
else{
  $action='about_management';
 }
?>
<head><script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script></head>
<style>
    .error{
color: red;
    }
</style>
<div class="container">
    <div class="row">
    <div class="col-md-12">
        <?php
        $success=$this->session->userdata('success');
        if ($success != "") {   
        ?>
        <div class="alert alert-success"><?php  echo $success;?></div>
        <?php
         }
        ?>
        <?php
        $failure=$this->session->userdata('failure');
        if ($failure != "") {   
        ?>
        <div class="alert alert-danger"><?php echo $failure; ?></div>
        <?php
         }
        ?>
    </div>
</div> 

<div id="content">
<div class="row mb-4">
<div class="col-12 mb-4 mb-xl-0">

</div>
<div class="col-12 col-sm-12">
<div class="row">
<div class="col-12 col-md-12 mb-4">
<div class="card redial-border-light redial-shadow">
<div class="card-body" style="overflow: visible;">
<form  method="post" action="<?php  echo base_url()?>About/<?php  echo $action; ?>"
enctype="multipart/form-data">


<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">


<div class="form-group">
     <label class="redial-font-weight-600" style="margin-bottom: 10px;">About Title</label>
<input type="hidden" name="id" value="<?php  echo $updaterecord[0]['id']; ?>">
<input type="text" name="title" value="<?php if($updaterecord) {echo $updaterecord[0]['title'];}else{echo '';} ?>" class="form-control">
</div>
<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Description*</label>
<textarea name="description" class="ckeditor"   rows="10" cols="20" id="txtdescription" value=""  placeholder="Enter your Description" style="border-style:Groove; "><?php if($updaterecord) {echo $updaterecord[0]['description'];}else{echo '';} ?></textarea>
</div>
            
 <div class="form-group">
 <label>Profile pic</label>
  <input type="file" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?>  id="uploadfile" name="uploadfile" />
 
  <input type="hidden" class="" id="update_uploadfile" name="update_uploadfile"  value="<?php  echo $updaterecord[0]['uploadfile'];?>">
  <img src="<?php echo base_url();?>uploads/<?php  echo $updaterecord[0]['uploadfile'];?>" alt="photo" style="border-radius: 50%; width:50px; height: 50px;">
</div>
                </div>
               
            </div>
                
                                        
                                        
               
          
              
    
           <?php  if($pagestatus!='view'){
                                                    ?>
     <button type="submit" class="btn btn-primary btn-sm ">ADD</button>
           <?php } ?>
                
    
                                    </form>
                            </div>
                            </div>
                                    
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                               

</div>




<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>

<?php  include 'footer.php'?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller{
    
    
    
     public  function update($id)
	  {
	  
	  	 $user['updaterecord']=$this->Admin_model->getabout($id);
	  	 $this->load->view('Admin/addabout',$user);
    }	
    
    

	 public  function delete($id)
	  {
	  
	  	 $user=$this->Admin_model->getabout($id);
	  	 
	  	 $users=$this->Admin_model->deleteabout($id);
	  	if ($users) {
		# code...
	$this->session->set_flashdata('success','Record deleted successfully');
	
	 
    }
else{

      $this->session->set_flashdata('failure','record not added');
      
	
  }
 redirect("About/aboutlist"); 
      	
}	

    
  public function updateaboutlist(){

 $this->load->view('Admin/addabout');
  
} 


	 public function aboutlist(){
	     
         $data['about']=$this->Admin_model->about_data();
      $this->load->view("Admin/listabout",$data);  
    }

     
 public function about_management()
         { 

if(!empty($_FILES['uploadfile']['name']))
{
    $config['upload_path'] = 'uploads/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    @unlink('uploads');

    if (!$this->upload->do_upload('uploadfile')) 
        {
        $error = array('error' => $this->upload->display_errors());
       }

    else {
 
    $file_name =  $this->upload->data();

    $filename = $file_name['file_name'];
 
 
    }
    }else
    {
        $filename = $_POST['update_uploadfile'];
    }
    
    
 $data=array(
    
'title'=>$this->input->post('title'),
'description'=>$this->input->post('description'),
'uploadfile'=>$filename

	);
 
 

    $this->load->view('Admin/addabout',$data);
    
 


 if($par1='create'){
            

	 $user=$this->Admin_model->aboutadd($data);	
	 		
	 	
	 	if ($user) {
		# code...
	$this->session->set_flashdata('success','Record added successfully');
	
	redirect("About/aboutlist");
	 
    }
else{

      $this->session->set_flashdata('failure','record not added');
      
	
  }
  
}

 }
 
 public function update_about()
 {
	
	
if(!empty($_FILES['uploadfile']['name']))
{
    $config['upload_path'] = 'uploads/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    @unlink('uploads');

    if (!$this->upload->do_upload('uploadfile')) 
        {
        $error = array('error' => $this->upload->display_errors());
       }

    else {
 
    $file_name =  $this->upload->data();

    $filename = $file_name['file_name'];
 
 
    }
    }else
    {
        $filename = $_POST['update_uploadfile'];
    } 

        $id=$this->input->post('id');
    	$this->db->where('id' ,$id);
    	$data=array(
'title'=>$this->input->post('title'),
'description'=>$this->input->post('description'),
'uploadfile'=>$filename
	);
	$user=$this->db->update('about',$data);
	
	if ($user) {
		# code...
	$this->session->set_flashdata('success','Record update successfully!');
	
	redirect("About/aboutlist");
	
   }
else{

     $this->session->set_flashdata('failure','record not updated');
     
	
  }
 }
 
 
}
?>
//model//
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Admin_model extends CI_Model{
     
     
     
    
    public function aboutadd($data){
        
        return $user=$this->db->insert('about',$data);
        
     } 
    
     public function about_data()
   {
        
        $s= $this->db->get('about');
         return $s->result_array();
   }
   
    public function getabout($id){
     $this->db->where('id' ,$id);
     $user=$this->db->get('about');
     return $user->result_array();
     
   }
     
    
     
   
   

   public function deleteabout($id)
      {
        $this->db->where('id' ,$id);
        $this->db->delete('about');
        // delete from table where id
      }
      
      
       public function aboutupdate($id)
      {
        $this->db->where('id' ,$id);
        $this->db->update('about');
        
      }
   
 } 

?>