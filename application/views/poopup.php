
<head>
  <title>Ajax CRUD APPLICATION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #00ff80;">

    <div class="container" style="margin-top:20px; margin-bottom: 20px;">
 
  <!-- Trigger the modal with a button -->
  
  <button type="button" id="adddata" class="btn btn-info btn-lg" >AddRecord</button>
 

  <!-- Modal -->
  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <form method="post"  id="saverecord"  id="saveupdate">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <label>Name</label>
		  <div class="form-group">
                      <td><input type="hidden" name="hidden_id" id="hidden_id" value="" ></td>
                 
                      <td><input type="text" name="name"  id="name"  value="" class="form-control"></td>
		  </div>
        </div>
		<div class="modal-body">
          <label>Email</label>
		  <div class="form-group">
		  <td><input type="text" name="email"  id="email" value="" class="form-control"></td>
		  </div>
        </div>
		<div class="modal-body">
          <label>Contact</label>
		  <div class="form-group">
                      <td><input type="number" name="contact" id="contact" value=""  class="form-control"></td>
		  </div>
        </div>
          <div class="modal-body">
          <label>Address</label>
		  <div class="form-group">
                      <td><input type="text" name="address" id="address"  value=""  class="form-control"></td>
		  </div>
        </div>
          <div class="modal-body">
              <label>Qualification</label>
               <div class="form-group">  
          Degree: <select name="qualification" id="qualification">
        <option selected>-- Select Group --</option>
        <option>BCA</option>
        <option>MCA</option>
        <option>Btec</option>
        <option>B.sc computer</option>
      </select>
           </div>
      </div>
          
          <div class="modal-body">
              <label>Gender</label>
               <div class="form-group">
          <input type="radio" name="gender" id="gender" value="male" checked> Male<br>
  <input type="radio" name="gender"  value="female"> Female<br>
  
          </div>
      </div>
          
        
          
           <div class="modal-body">
              <label>Hobbies</label>
               <div class="form-group">
                   <input type="checkbox" name="hoobies" id="hoobies" checked="checked"  value="Bike"> I have a bike<br>
                   <input type="checkbox" name="hoobies"id="hoobies"  checked="checked" value="Car"> I have a car
          </div>
      </div>
		
        <div class="modal-footer">
            
            <button type="button"  id="savedata" class="btn  btn-primary"  >Submit</button>
            <button type="button"  id="update_btn" class="btn btn-danger" style="display:none;" >update</button>
            
        </div>
      </div>
      </form>
    </div>
  </div>
  
</div>

</body>
</html>

<?php 
//print_r($updaterecord);
//error_reporting(0);
if($updaterecord){
$action = 'update';
}else{
 $action = 'create';   
}
 ?>




<div class="container" >
    <div class="row" style="background-color: #00ffbf;">
		<div class="col-md-8">
			<table class="table table-striped">
                            
                            <tr style="background-color: #00ffbf;">
                                      
					<th>SNO</th>
					<th>Name</th>
					<th>Email</th>
					<th> Contact</th>
					<th> Address</th>
                                        <th>Qualification</th>
                                        <th>Gender</th>
                                        <th>Hoobies</th>
                                        <th> Action</th>
                                </tr>
                                <?php   if(!empty($record)){ foreach($record as $user){?>
                                <tr style="background-color: #00ffbf;">
		<td><?php  echo  $user['user_id']?></td>
                    <td><?php  echo  $user['name']?></td>
                    <td><?php  echo  $user['email']?></td>
                    <td><?php  echo  $user['contact']?></td>
                    <td><?php  echo  $user['address']?></td>
                    <td><?php  echo $user ['qualification']?></td>
                    <td><?php  echo $user['gender']?></td>
                    <td><?php  echo $user ['hoobies']?></td>
                    
                                               
       
       <td>
           <button type="button"  id="updrecord" value="<?php echo $user['user_id']; ?>" class="btn btn-primary btn-lg">Edit</button>
	</td>
	<td>
            <a href="<?php  echo base_url().'app/usermanagement/delete/'.$user['user_id'];?>"class="btn btn-danger btn-lg" class="del">Delete</a>
            <input type="hidden" id="delrecord" value="<?php echo $user['user_id'];?>">
		
	</td>
				</tr>
                                <?php }} else {?>
        <tr><td colspan="4">no record</td></tr>
        <?php }?>
				</div>
            
</table>
                
        </div>
    </div>
            



            <script>
            
$(document).ready(function() {
$("#savedata").click(function(event) {	

var a = $("form").serializeArray(); 
//console.log(a[0].value); return false;

jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "app/usermanagement/create",
data: {id:a[0].value,
       name:a[1].value,
       email:a[2].value,
       contact:a[3].value,
       address:a[4].value,
       	qualification:a[5].value,
       gender:a[6].value,
        hoobies:a[7].value
        
       
     },
success: function(res) {
alert(res);
if(res){
    location.reload();
}
//
}
});


});
//for update 

$("#update_btn").click(function(event) {	

var a = $("form").serializeArray(); 
//console.log(a[0].value); return false;

jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "app/usermanagement/update",
data: {id:a[0].value,
       name:a[1].value,
       email:a[2].value,
       contact:a[3].value,
       address:a[4].value,
       qualification:a[5].value,
       gender:a[6].value,
        hoobies:a[7].value
     },
success: function(res) {
//alert(res); return false;
if(res){
    location.reload();
}
//
}
});


});
//



// for 
 $(document).on('click', '#adddata', function(){
 $("#myModal").modal('show');
$("#update_btn").hide();
$("#savedata").show();
 });
 //------------end-------------//


 $(document).on('click', '#updrecord', function(){
   
   //alert(this.value); return false;
   //---------------------
   
   
   jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "app/getUser",
data: {id:this.value },
success: function(res) {
//alert(res);
var result = JSON.parse(res);
$("#myModal").modal('show');
$("#update_btn").show();
$("#savedata").hide();
$("#name").val(result.name);
$("#email").val(result.email);
$("#contact").val(result.contact);
$("#address").val(result.address);
$("#qualification").val(result.qualification);
$("#gender").val(result.gender);
$("#hoobies").val(result.hoobies);
$("#hidden_id").val(result.user_id);


}
});
   
   
   
   
   //-------------
   
  });
  
  
  
  
  //delete
  
  
  $(document).ready(function() {
$("#delrecord").click(function(event) {	
//alert('record deleted'); //return false;

var id  = $(".del").val();
jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "app/usermanagement/delete/"+id,
data: {id: id},
success: function(res) {
//alert(res);
location.reload();
}
});
});



});

  //enddelete
  

}); 


//}










</script>


