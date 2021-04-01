<head>
<link rel='stylesheet' href='heading.css'>
</head>
<body>
<p id='heading_BG'>
<img  id='heading' src="./HK_forums.gif"  width='480' height='80' >
</p>

<?php
include('conn.php');

$id=$_GET['id'];
$sql=" select * from design where id=$id  ";
$res=mysqli_query($con, $sql);
while($row=mysqli_fetch_array($res)){ ?>

<table border='1'  align='center'><tr><td  colspan='2'><?php echo $row['topic'] ; ?></td></tr>
<tr><td width='80'><?php echo $row['name']; ?></td><td><?php echo $row['contents']; ?>
</td></tr></table>


<?php
}
?>