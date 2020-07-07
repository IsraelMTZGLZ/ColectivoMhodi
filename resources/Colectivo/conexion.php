<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php
$DB_USER 		= 'root';
$DB_PASSWORD 	= 'rod123';
$DB_HOST 		= 'localhost';
$DB_NAME 		= 'colectivo';

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

if(!$conn){
    die('error connecting to database');    
}

$consulta = "SELECT * FROM alumno";
$result = mysqli_query($conn,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}

echo "<table class='table table-condensed table-striped'>";
echo "<tbody><tr>";
echo "<th><ID</th></h1>";
echo "<th>Nombre</h1></th>";
echo "<th>Apellido Paterno</th>";
echo "<th>Apellido Materno</th>";
echo "<th>Estatus</th>";
echo "</tr></tbody>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr class='table-info'>";
    echo "<td>" . $colum['id']. "</td>";
    echo "<td>" . $colum['nombre'] . "</td>";
    echo "<td>" . $colum['apellido_p'] . "</td>";
    echo "<td>" . $colum['apellido_m'] . "</td>";
    echo "<td>" . $colum['status'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $conn );
?>
