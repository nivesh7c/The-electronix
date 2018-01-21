<?php
			include("config.php");	
			$fnm="";
			$eml="";
			$pass="";
			$mob="";
		if(isset($_POST["login"]))
		{
			$l=$_POST["eml"];
			$p=$_POST["pass"];
				$q="select *from register where user_email='$l' and user_password='$p'";

				$res=mysqli_query($con,$q);
		
					if(mysqli_num_rows($res)>0)
					{
							session_start();
							$_SESSION["u_email"]=$l;
							header("location:index.php");
					}
					else
					{
						header("location:login.php?msg=error");
					}
		}

		if(isset($_POST["register"]))
		{
				if(empty($_POST["fnm"]))
				{
						$err_nm="name is empty";
				}
				else
				{
						$fnm=$_POST["fnm"];
				}
				if(empty($_POST["eml"]))
				{
						$err_nm="email is empty";
				}
				else
				{
						$eml=$_POST["eml"];
				}
				if(empty($_POST["pass"]))
				{
						$err_nm="password is empty";
				}
				else
				{
						$pass=$_POST["pass"];
				}
				if(empty($_POST["mob"]))
				{
						$err_nm="name is empty";
				}
				else
				{
						$mob=$_POST["mob"];
				}

				$q="insert into register(username,user_password,contact_no,user_email) values('$fnm','$pass','$mob','$eml')";

					if(mysqli_query($con,$q))
					{
			header("location:register.php?suc_msj=success");
					}
		}
?>