<head>

<link rel='stylesheet' href='other_pages.css'>

<style>

table{   width:400px; height: 200px;
background-color:cornsilk; border-color: tan;
border-radius: 3px; }
</style>

<meta charset="utf-8" >

</head>


<body>


<p id='heading_BG'>
<img  id='HK_words' src="./HK_TCM_team.png
"  width='400' height='55' >
</p>

<p id='sub_head'></p>




<br><br><br>
<br><br><br>
<br><br>

<p   align='center' >歡迎來信跟我們聯絡, &nbsp; 提出您的寶貴意見&nbsp; :&nbsp; &nbsp; Samwu33@hotmail.com </p>


<table  align='center' border='2' cellpadding='10'>

<tr><td><form action="contact.php" method='POST' >
<textarea name='myidea'  cols='70' , rows='18' autofocus="autofocus"> </textarea><br><br>

<input type='submit' name='submit' value='提交' >

</form></td></tr>

</table>

<?php 

if (isset($_POST['submit'])){
	
	if(!empty( $_POST['idea'])&& !empty( $_POST['subject'] ) ){  

$idea=$_POST['idea'] ; 
$sub=$_POST['subject'];
$add="sameu33@hotmail.com";

 

mail($add,$sub, $idea);
echo  " <p align='center' style='font-weight:bold ; ' >謝謝來信, 會很快處理</p> ";


}

}
?>


</body>