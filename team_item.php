<head>

<link rel='stylesheet' href='other_pages.css'>

<style>

table{   width:400px; height: 50px;
background-color:cornsilk; border-color: tan;
border-radius: 3px; }

</style>

<meta charset="utf-8" >

</head>


<body>


<p id='heading_BG'>
<img  id='HK_words' src="./HK_medical_team.png
"  width='400' height='55' >
</p>

<p id='sub_head'> </p>

<br>
<br>




<br><br><br>
<p align='right'><a href="index.html"><button>回首頁</button></a> </p><br><br>


<?php

$n=$_GET["nm"];

$db=new SQLite3("teams.db");

$res=$db->query( "select region, desc from region where id=$n ");

while($r=$res->fetchArray()){ ?>
	
	
	


<table  align='center' border='2' cellpadding='10'>
<tr><td><?php echo $r["region"] ; ?></tr></td>

<tr><td><textarea cols='70' , rows='18' value= ><?php echo $r["desc"]; ?>  </textarea></td></tr>

<br><br>


</table>

		
	
<?php  }   ?>

<br>
<br>

	

</body>