<?php
			include("config.php");
		
				if(isset($_FILES["myfile"]))
				{
				
							$nm=$_FILES["myfile"]["name"];
							$path=$_FILES["myfile"]["tmp_name"];

							$q="insert into imgupload(image_path,uploadtm) values('pic/$nm','".date("Y-m-d H:i:s")."')";
							//echo $q;
							
							if(mysqli_query($con,$q))
							{
							
								if(move_uploaded_file($path,"pic\\".$nm))
								{
									echo $nm;
								}
							}
							else
							{
								echo"uploading problem...";
							}
							
				}	
				else{
					echo"not get";
				}			
?>