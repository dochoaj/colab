<?php 
$user = $_POST["usuario"];
$pwd = $_POST["pass"];

$conexion = mysql_connect("localhost", "root", "root");
mysql_select_db("baseinve",$conexion);

$sql  = "SELECT idInvest FROM investigadores WHERE nomInvest = '$user' AND pasInvest = '$pwd'";
$comprobar = mysql_query($sql);

if(mysql_num_rows($comprobar) > 0){
	header("Location: www.google.cl");
}
else{
	
	header("Location: index.html");
}

?>



