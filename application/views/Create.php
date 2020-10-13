<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title> Timer Jone Create user</title>
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url().'assetes/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand"> TIMER JONES</a>
		
	</div>
	
</div>
<div class="container" style="padding: 10px;">
	<h3> Create Timer User</h3>
	<hr>
	<form   method ="post"name="Createuser" action="<?php  echo base_url().'Timer/create';?>">
	<div class="row">

		<div class="col-md-6">
			<div class ="form-group">
				<label>Date</label>
			<input type="date" name="date" value="<?php echo set_value('date'); ?>" class="form-control">
				<?php  echo form_error('date');?>
			</div>
			<div class ="form-group">
				<label>H</label>
				<input type="number" name="h" value="<?php echo set_value('h'); ?>" class="form-control">
				<?php  echo form_error('h');?>
			</div>
			<div class ="form-group">
				<label>M</label>
				<input type="number" name="m" value="<?php echo set_value('m'); ?>" class="form-control">
				<?php  echo form_error('m');?>
			</div>
			<div class ="form-group">
				<label>S</label>
				<input type="number" name="s" value="<?php echo set_value('s'); ?>" class="form-control">
				<?php  echo form_error('s');?>
			</div>
			<div class ="form-group">
				<button class="btn btn-primary">Create</button>
				<a href="<?php  echo base_url().'Timer/index';?>" class="btn btn-secondary btn">Cancel</a>
				
			</div>
			
		</div>
		
	</div>
	</form>
</div>

</body>

</html>