

E html>
<html>
<head>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</head>
<body>
<select id="selectBox" onchange="changeFunc();">
<option value="MCA">MCA</option>
<option value="MBA">MBA</option>
<option value="not_listed">Not Listed</option>
</select>
<input name="dd_number" placeholder="Add New" class="form-control" type="text" style="display: none" id="textboxes">
<script type="text/javascript">
function changeFunc() {
var selectBox = document.getElementById("selectBox");
var selectedValue = selectBox.options[selectBox.selectedIndex].value;
if (selectedValue=="not_listed"){
$('#textboxes').show();
}
else {
alert("Error");
$('#textboxes').hide();
}
}
</script>
</body>
</html>
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title> Timer Jone View users</title>
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url().'assetes/css/bootstrap.min.css';?>
	">
	
</head>
<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand"> TIMER JONES</a>
		
	</div>
	
</div>
<div class="container" style="padding: 10px;">
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
			<div class="alert alert-success"><?php echo $failure; ?></div>
			<?php
		     }
			?>
		</div>
	</div>
<div class="row">
	<div class="col-md-8">
		<div class="row">
	<div class="col-6"><h3>View Users Timer</h3></div>
	<div class="col-6 text-right">
		<a href="<?php  echo base_url().'Timer/create';?>" class=" btn btn-primary">Create</a>
		<a href="<?php  echo base_url().'Export/generateXls';?>" class=" btn btn-primary">Export</a>
		</div>
	   </div>
	   <hr>
   </div>
</div>

	<div class="row">
		<div class="col-md-8">
			<table class="table table-striped" id="datatable">
				<tr>
					<th>Sr no</th>
					<th>Date</th>
					<th>H</th>
					<th>M</th>
					<th>S</th>
					<th width="60">Edit</th>
					<th width="100">Delete</th>
				</tr>
				<?php   foreach($users as $user) { ?>
				<tr>
					
					<td><?php  echo  $user['id']?></td>
					<td><?php  echo  $user['date']?></td>
					<td><?php  echo  $user['h']?></td>
					<td><?php  echo  $user['m']?></td>
					<td><?php  echo  $user['s']?></td>
					<td>
						<a href="<?php echo base_url().'Timer/edit/'.$user['id']?>" class=" btn btn-primary">Edit</a>
					</td>
					<td>
						<a href="<?php echo base_url().'Timer/delete/'.$user['id']?>" class=" btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php }  ?>
				<!-- <tr>
					<td colspan="5">Record not found</td>
				</tr> -->
			<?php ?>
			</table>
		</div>
		
	</div>
	
</div>

	<div class="container">
		<a href="#" class="navbar-brand"> TIMER JONES</a>
		<div class="navbar navbar-dark bg-gray" id="demo" >
		
	</div>
	
</div>

<!-- <div class="timerjone" class="navbar navbar-dark bg-dark" id="demo"></div> -->

</body>
<!-- <script>
	
        $(document).ready(function() {
    $('#datatable').DataTable();
} );
        
</script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
<script>
 var countDownDate = <?php 
 $res=$this->session->userdata('users');
 $date= $res[0]['date'];
 $h=$res[0]['h'];
 $m=$res[0]['m'];
 $s=$res[0]['s'];
echo strtotime("$date $h:$m:$s" ) ?> * 1000;
var now = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x = setInterval(function() {
now = now + 1000;
// Find the distance between now an the count down date
var distance = countDownDate - now;
// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
// Output the result in an element with id="demo"
document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
minutes + "m " + seconds + "s ";
// If the count down is over, write some text 
if (distance < 0) {
clearInterval(x);
 document.getElementById("demo").innerHTML = "EXPIRED";
}
    
}, 1000);

    </script>
    <script>

function test(x){
var category_name= x;
jQuery.ajax({
type: "POST",
url: "<?php echo base_url();?>" + "Product/getproduct/"+category_name,
data: {},
success: function(response) {


$('#fabric_subcategory').html(response);

}

});
//ajax se data send kroge ctroller ki kisi function pr
}




</script>
</html>