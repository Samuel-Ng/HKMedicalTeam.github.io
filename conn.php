<?php

$name='peter';  $pass='1959';

$con=mysqli_connect('localhost',$name,$pass) or die( 'cannot contact DB');
mysqli_select_db($con,'sam') or die( 'cannot get the DB');

?>