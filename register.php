<?php


if(isset($_POST['submit'])){
      if ( ($_POST['user']!='') and ($_POST['pas']!='')){
		   $user=$_POST['user'];  $pas=$_POST['pas'];
		   include('conn.php');
		   $sql=" select * from users where name='$user' and password='$pas' "; 
		   $q=mysqli_query($con, $sql) or die ('cannot access DB');
		   $num=mysqli_num_rows($q);
		   if($num==1){
			   
			   echo "<script> alert('User name exists...'); </script>"; 
                    echo "<script>window.location.href='register.html' </script>";
			 		   
                         }   
	       elseif($num==null) { 
		   $sql="insert into users(name,password)values('$user' ,'$pas')";
			 $q=mysqli_query($con,$sql)or die('insert not successful');
		   echo " <script>alert('Register successfully, leading to the home page...');
		   </script>";
	       echo "<script>window.location.href='index.html' </script>";
		   
	  }}
			
		else {	 
		      echo "<script>alert('please fill in all information .') ;  </script>";
		       echo "<script>window.location.href='register.html' </script>";
			 }  
}
	
  ?>
    
         
