<?php
		include("Config.php");


//		$q="insert into songs values(22,'abc','abc abc abc hoo','abc kumar','2011')";


		//$q="insert into songs(title,artist,year,lyrics) values('xyz','xyz kumar','2111','xy xy xyz ')";


$title="pqr";
$artist="pqr kumar";
$year="2044";
$lyr="pq pq pq qp";

$q="insert into songs(title,artist,year,lyrics) values('$title','$artist','$year','$lyr')";


		if(mysqli_query($link,$q))
		{
			echo "insertion successfully";
		}

?>