<head>

<link rel='stylesheet' href='other_pages.css'>
<style>
table{   width:400px; height: 200px;
background-color:cornsilk; border-color: tan;}

</style>

<meta charset="utf-8">
</head>


<body>

<p id='heading_BG'>
<img  id='HK_words' src="./HK_TCM_team.png
"  width='400' height='55' >
</p>
<p id='sub_head'><a href='Contact.html' id='contact'>&nbsp;&nbsp;&nbsp;和我們聯繫</a>&nbsp;&nbsp;
<a href='About_us.html' id='about'>關於我們</a></p>

<br><br><br><br><br><br>

<?php

if (isset($_POST['submit'])){
	
	
$name=$_POST['user'];
$pass=$_POST['password'];



$db=new SQLite3("members.db");

$res=$db->query("select * from member where name='$name' " );

$row=$res->fetchArray(SQLITE3_ASSOC);
if($row!= false){
	
	echo "名稱已註冊, 請另選別的 ";
	header("refresh: 3 ; url=register.html");
}


elseif( empty($_POST['user']) || empty(  $_POST['password'] )){
	
	echo "漏填資料 , 請重新登入 ";
	header("refresh: 2.5 ; url=register.html");
}
	

	
	


	else{	
$db->exec(" insert into member(name, password) values('$name','$pass') ");


echo "<h3>成功註冊!</h3>";

echo " 回首頁...." ;
header("refresh: 1.5 ; url=index.html");


}

}

?>




</body>
