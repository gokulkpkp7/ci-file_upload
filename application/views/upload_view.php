<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		
		.header{

			background-color: #6666ff; 
			text-align: center; 
			color: black; 
			height: 100px;
			font-size: 40px; 
			font-family: monospace; 
			padding: 25px; 
			box-shadow: 0 0 10px #696969; 
			border-radius: 3px;
		}
		.form{

			padding: 50px; 
			box-shadow: 0 0 10px #696969;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row header">
		<div class="col-md-12">
			FILE UPLOAD
		</div>
	</div>
	<div class="row form">
		<div class="col-md-12">

			<?php echo $error;?>
			<?php echo form_open_multipart('upload/do_upload');?>
			<input type="file" name="userfile" size="20" />
			<br /><br />
			<input type="submit" value="Upload" class="btn btn-primary" />
			</form>

		</div>
	</div>
</div>
	

</body>
</html>