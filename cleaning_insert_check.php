<?php

	       				
			
           session_start();
           include('conn.php');

		  $tpc=$_POST['tpc']; $tta=$_POST['tta'];
		       
			   echo $tpc;  echo $tta;
			 $user=$_SESSION['name'];
			 $sql="insert into cleaning(name,topic,contents)values('$user','$tpc','$tta')";
			  mysqli_query($con,$sql) or die('cannot insert ');
			  
			
			header("Location:Lcleaning.php"); exit();
			  
	
	    		      

	
  ?>
    
         
