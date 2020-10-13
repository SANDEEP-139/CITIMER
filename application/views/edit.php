<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title> Timer Jone Update user</title>
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url().'assetes/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand"> TIMER JONES</a>
		
	</div>
	
</div>
<div class="container" style="padding: 10px;">
	<h3> Update Timer User</h3>
	<hr>
	<form   method ="post" name="Createuser" action="<?php  echo base_url().'Timer/edit/'.$user['id'];?>">
	<div class="row">

		<div class="col-md-6">
			<div class ="form-group">
				<label>Date</label>
	<input type="date" name="date" value="<?php echo set_value('date',$user['date']); ?>" class="form-control">
				<?php echo form_error('date');?>
			</div>
			<div class ="form-group">
				<label>H</label>
				<input type="number" name="h" value="<?php echo set_value('h',$user['h']); ?>" class="form-control">
				<?php  echo form_error('h');?>
			</div>
			<div class ="form-group">
				<label>M</label>
				<input type="number" name="m" value="<?php echo set_value('m',$user['m']); ?>" class="form-control">
				<?php  echo form_error('m');?>
			</div>
			<div class ="form-group">
				<label>S</label>
				<input type="number" name="s" value="<?php echo set_value('s',$user['s']); ?>" class="form-control">
				<?php  echo form_error('s');?>
			</div>
			<div class ="form-group">
				<button class="btn btn-primary">Update</button>
				<a href="<?php  echo base_url().'Timer/index';?>" class="btn btn-secondary btn">Cancel</a>
				
			</div>
			
		</div>
		
	</div>
	</form>
</div>
</body>
<script>
 var countDownDate = <?php 
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
</html>