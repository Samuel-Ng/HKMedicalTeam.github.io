

<?php

session_start();

if (!$_SESSION["m_name"]){
	
	
header('Location: index.html');
exit;

}


else{
	
	echo"<h3> 登入成功</h3>";
}

?>




