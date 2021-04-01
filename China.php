
<head>
<link rel='stylesheet' href='other_pages.css'>

<style>


table{   width:400px; height: 50px;
background-color:cornsilk; border-color: tan;

border-radius: 3px; 


}

a{ text-decoration: none;}
 

</style>
<meta charset="utf-8" >
</head>

<body>

<p id='heading_BG'>
<img  id='HK_words' src="./HK_medical_team.png
"  width='400' height='55' >
</p>
<p id='sub_head'><a href='Contact.html' id='contact'>&nbsp;&nbsp;&nbsp;和我們聯繫</a>&nbsp;&nbsp;
<a href='About_us.html' id='about'>關於我們</a></p>

<br> <br><br><br> <br><br>
<p align='right'><a href="index.html"><button>回首頁</button></a> </p><br><br>


<br><br>

<p align="center" style="font-weight : bold; font-size: 20px ; "> 和國內的聯系</p>


<?php 

$db=new SQLite3("China.db");


$res=$db->query("select * from Activity");

while($row=$res->fetchArray()){?>


<table  align='center' border='2'>

<tr><td width='30'><a href> <?php echo $row["id"]; ?> </a> </td>
<td><a href='china_item.php?nm=<?php echo $row["id"]; ?> ' > <?php echo $row["name"]; ?> </a> </td></tr>

</table>

	
<?php }  ?>




</body>