<?php
//conexión con la base de datos y el servidor
$link = mysqli_connect("localhost","root","") or die ("<h2>No se encuentra el servidor</h2>");

$db = "usuarios";
mysqli_select_db($link, $db) or die ("<h2>Error de conexion con la BD</h2>");

//obtenemos los valores del formulario
$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$prepa = $_POST['preparatoria'];
$materia = $_POST['UA'];
$materia_seleccionada = json_encode($materia, true);

$sql = "INSERT INTO usuarios(nombres,apellidos,edad,genero,preparatoria,materia) VALUES ('$nombre','$apellido','$edad','$genero','$prepa','$materia')";
$sqlrun = mysqli_query($link,$sql);

if($sqlrun){
	echo "Información enviada";
}
else
{
	echo "NO se envío la información.";
}

?>