<?php
        
        $dbhost ="localhost";
	    $dbuser="";
	    $dbpass="";
	    $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, "");
	   
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
