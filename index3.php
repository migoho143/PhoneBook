<?php include('process.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css"	href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<div id="main">
			
<br>
	<section class="main">
    <div class="row justify-content-center">
	<div class="col-sm-4">
	<div class="row justify-content-center">
	<form action="process.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
		<font color="white"><label for="exampleInputEmail1">Enter Your Name</label>
			<input type="text" name="firstname" class="form-control" value="<?php echo $firstname;?>"placeholder="Firstname" required>
		</div>
		<div class="form-group">
		<font color="white"><label for="exampleInputEmail1">Enter Your Lastname</label>
			<input type="text" name="lastname" class="form-control" value="<?php echo $lastname;?>"placeholder="Lastname" required>
		</div>
		<div class="form-group">
		<font color="white"><label for="exampleInputEmail1">Enter Your Address</label>
			<input type="text" name="address" class="form-control" value="<?php echo $address;?>"placeholder="Address" required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn btn-info" name="update">Update</button>
		<a href="index2.php"class="btn btn-info">Cancel</a>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="save">Save</button>
			<a href="index2.php"class="btn btn-primary">Cancel</a>
		<?php endif;?>
		</div>
	</form>
	</div>

<br>

</body>
</html>
