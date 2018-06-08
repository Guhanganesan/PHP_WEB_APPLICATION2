<?php   
       
		$dbhost ="localhost";
	    $dbuser="yourusername";
	    $dbpass="";
	    $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, "id4764868_devadasg");
	    $q=mysqli_query($conn,"select * from reg");
	    $data = array();
		while($row = mysqli_fetch_assoc($q))
		{
			$data[] = $row;
		}
		
		$x = json_encode($data);
	  
	    echo $x;
	    
	   /*
	    
	    $sql=mysqli_query($conn, "select * from admin where user='guhan'");
	    
	    $row = mysqli_fetch_assoc($sql);
	    
	    echo "<h2>gUHAM</h2>";
	    echo $row['user'];
	    */
?>
