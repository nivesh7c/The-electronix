<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>

			<h1 align='center'>Ajax Image uploading</h1>
		<div id="lay-form">
			<form name="myform" method="post" enctype="multipart/form-data">
				<div class='pic_here' id="mypic">

					<?php
							include("config.php");
							$q="select image_path as p from imgupload where img_id=(select max(img_id) from imgupload)";
							$r=mysqli_query($con,$q);
							if(mysqli_num_rows($r)>0)
							{
										$row=mysqli_fetch_array($r);
									echo "<img src='{$row['p']}' height='100px' width='100px' id='oo'/>";
							}

					?>
				</div>

				<label for="file1" style='color:red;' >Choose your pic</label>
			<input type="file" id="file1" name="file1" size="3000" onchange="getInfo()"/>			
			</form>
		</div>
		<div id="pro"></div>
</body>
</html>