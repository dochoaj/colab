<?php 
$user = $_POST["usuario"];
$pwd = $_POST["pass"];

$conexion = mysql_connect("localhost", "root", "root");
mysql_select_db("baseinve",$conexion);

$sql  = "SELECT idInvest FROM investigadores WHERE nomInvest = '$user' AND pasInvest = '$pwd'";
$comprobar = mysql_query($sql);

if(mysql_num_rows($comprobar) > 0){
	$id_usuario = mysql_result($comprobar, 0);
	setcookie("colab_userid","$user",time()+3600);
	header("Location: investigaciones.php");

}
else{
	
	echo "usuario/contraseña invalidos";
}

?>



