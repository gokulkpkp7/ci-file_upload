<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row" style="padding: 50px;">
			<div class="col-md-12">	
				<h3>Your file was successfully uploaded!</h3>
				<img src="http://localhost/CI-file-upload/uploads/<?php echo $upload_data['file_name']; ?>" height="50%" width="50%"/>
				<ul>
					<?php foreach ($upload_data as $item => $value):?>
						<li><?php echo $item;?>: <?php echo $value;?></li>
					<?php endforeach; ?>
				</ul>
				<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
			</div>
		</div>
	</div>

</body>
</html>