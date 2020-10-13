   

<!DOCTYPE html>
<html>
<head>
	<title> Timer Jone Show</title>
<link rel="stylesheet" type="text/css" href="<?php  echo base_url().'assetes/css/bootstrap.min.css';?>">
	
</head>
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
<body>
	<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand"> TIMER JONE</a>
		
	</div>
	
</div>
<div class="container" style="padding: 10px;">
	<h3> Create User Timer</h3>
	<hr>
           <form method="POST" action="<?php echo base_url();?>">
            Date*<input type="date" name="date" value="">
               H* <input type="number" name="h" value="">
           M* <input type="number" name="m" value="">
              S*<input type="number" name="s" value="">
             <button type="submit" name="update">Update</button>
             </form>
            </div>
         </body>
  </html>


