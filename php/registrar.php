<?php
include 'cn.php';
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$descripcion = $_POST["descripcion"];

$insertar = "INSERT INTO registros(nombre,apellido,telefono,correo,descripcion) values('$nombre','$apellido','$telefono','$correo','$descripcion')";

$resultado = mysqli_query($conexion,$insertar);

if(!$resultado) {
    echo 'error al registrarse';
} else {
echo' Usuario registrado exitosamente';

}
mysqli_close($conexion);
?>