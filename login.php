

<?php
include('conn.php');

if(isset($_POST['submit'])){
      if ( ($_POST['user']!='') and ($_POST['pas']!='')){
		  $user=$_POST['user']; $pas=$_POST['pas'];
		  
		  $sql="select * from users where name='$user' and password='$pas' " ;
		  $q=mysqli_query($con, $sql) or die ('failed');
		  
		  $num=mysqli_num_rows($q);
		   if($num==1){
			 session_start();
			$_SESSION['name']=$user;
		  
		   echo "<script>alert('Login successfully, leading to the home page...');</script>";
	       echo "<script>window.location.href='index.html' </script>";

	                              }
         else  {  
		 echo "<script>alert('please fill in correct information.') ;  </script>";
		       echo "<script>window.location.href='login.html' </script>";
	  }	}		 
			 
	 else{	 
		      echo "<script>alert('please fill in all information .') ;  </script>";
		       echo "<script>window.location.href='login.html' </script>";
			 }  
}
	
  ?>
    
         
