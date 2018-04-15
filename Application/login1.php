<?php
        // id4764868_phpguhan","guha0804","id4764868_devadasg
        $dbhost ="localhost";
	    $dbuser="id4764868_phpguhan";
	    $dbpass="guha0804";
	    $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, "id4764868_devadasg");
	   
	     	$x1=$_POST['x1'];
	     	$x2=$_POST['x2'];
	        $q= "select * from admin where user='$x1' and pass='$x2'";
	        
	     	$sql=mysqli_query($conn,$q);
	     	
	     	$row=mysqli_fetch_row($sql);
	     	session_start();
	     	$_SESSION['user']=$row[0];
	        $_SESSION['pass']=$row[1];
	     	
	     	if($row)
		    {
		      header("Location:details1.php");
		    }
		    
		    else
		    {
		        header("Location:Index.php");
		    }
	    
		
?>		