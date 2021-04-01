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




if (isset($_POST["submit"])){
	
	
$name=$_POST["user"];
$password=$_POST["password"];


$db=new SQLite3("members.db");

$res=$db->query(" select password from member where name= '$name' ");

while($row=$res->fetchArray()){
	
	$r=$row["password"];
	
	if($r==$password){

	echo "成功登入" ;
	session_start();
	$_SESSION["m_name"]=$name;
	
	
	header("refresh: 1 ; url=index.html");
	
	
    } 
    elseif($r<>$password){
	  
	  
     echo "<script>alert('登入有誤,請重新登入'); </script>";
	 header("refresh: 1; url=login.html");
	  
	  
    }

}



if( empty($_POST["user"]) || empty($_POST["password"] ) ){
	
	echo "<script>alert('漏填資料 , 請重新登入'); </script>";
	
	header("refresh: 1; url=login.html");
	
        }
}
	


?>




</body>
