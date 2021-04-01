

<?php

session_start();

if (isset($_SESSION["m-name"])){
	
	echo " 已登入";
	
}

else {
	
	echo " 未登入";

	header("refresh: 2 ; login.html");
	
	
}



?>