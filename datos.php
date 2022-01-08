<?php
$conexion = mysqli_connect("localhost", "root", "root", "prueba");
$continente = $_POST['continente'];

$sql= "SELECT * FROM t_mundo WHERE id_continente = '$continente'";
$resultado = mysqli_query($conexion, $sql);
$cadena = "<h2>Seleccione un pais</h2>
<select name='lista2' id='lista2'>";
while($fila = mysqli_fetch_array($resultado)){
    $cadena .= "<option value='".$fila['id_continente']."'>".$fila['pais']."</option>";
}
echo $cadena .= "</select>";

