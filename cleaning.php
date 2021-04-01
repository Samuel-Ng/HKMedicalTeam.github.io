<head>
<link rel='stylesheet' href='heading.css'>
</head>
<body>
<p id='heading_BG'>
<img  id='heading' src="./HK_forums.gif"  width='480' height='80' >
</p>

<?php
//session_start();
//include('conn.php');

//if  (isset($_SESSION['name'])){ 
//echo"<script>window.location.href='Lcleaning.php';  </script>";
//}
//elseif(isset($_SESSION['name'])==null){
//$sql='select * from cleaning';
//$res=mysqli_query($con, $sql) or die('cannot contact table');
    echo '<table border=2 align=center>
<tr><th>Who starts</th><th>Topics</th></tr>';
//while($row=mysqli_fetch_array($res)){
 // $id=$row['id'];
 echo'<tr><td width=90 >'.$row['name'].'</td><td width=400><a 
 style=text-decoration:none   href=cleaning_S.php?id='.$id.'>'.
 $row['topic'].'</a></td></tr>';
//}
echo '</table>';
//}
?>
</body>