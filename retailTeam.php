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


<p id="heading_BG">
<img  id='HK_words' src="./HK_medical_team.png
"  width='400' height='55' >
</p>

<p id='sub_head'> </p>


<br><br><br><br><br><br>
<p align='right'><a href="index.html"><button>回首頁</button></a> </p><br><br>



<br><br>

<p align="center" style="font-weight : bold; font-size: 20px ; ">我們的医療隊服務安排 </p>



<?php 

$db=new SQLite3("Teams.db");


$res=$db->query("select * from region");

while($row=$res->fetchArray()){?>


<table  align='center' border='2'>

<tr><td width='30'><a href> <?php echo $row["id"]; ?> </a> </td>
<td><a href='team_item.php?nm=<?php echo $row["id"]; ?> ' > <?php echo $row["region"]; ?> </a> </td></tr>

</table>

	
<?php }  ?>





</body>