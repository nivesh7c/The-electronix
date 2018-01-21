<?php
	
		include("Config.php");	
			$q="select *from songs";


				$res=mysqli_query($link,$q);

			echo "number of rows :",mysqli_num_rows($res);
			
					if($row=mysqli_fetch_array($res))
							{
								print_r($row);
							}


/*
			$i=1;
			echo "<table align='center' width='600px' border='1'>";
			
			
			while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
			{		
					
					if($i==1)
					{
							echo "<tr>";
						foreach ($row as $key => $value) {
							echo "<th>$key</th>";
						}
						echo "</tr>";
					}	
					echo "<tr>";

						foreach ($row as $tr => $td_data) {
							echo "<td>$td_data</td>";
						}
					
					$i++;
					echo "</tr>";
			}
			echo "</table>";
			*/

	
?>