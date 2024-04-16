<?php
$Matricula=$Conecta->real_escape_string($_POST['MAT']);
// Consulta para buscar la matricula del alumno
$Conecta="SELECT*FROM Alumnos  WHERE Matricula='$Matricula'";
$EConsulta='$Conecta->query'($Consulta);
if($EConsulta->row_nows>0);
while($row=$EConsulta->fetch_assoc()) {
    echo$row['NomAlumno'].'<br>';
    echo$row['ApellidoPAlum'].'<br>';
    echo$row['ApellidoMAlum'].'<br>';
    echo$row['Matricula'].'<br>';
}
$formulario="<form Action=echo$_Server[PHP_SELF] Method=post>";
$formulario="<input type='text' name='' >";
$formulario="<input type='text' name='' placeholder='' >";
?>