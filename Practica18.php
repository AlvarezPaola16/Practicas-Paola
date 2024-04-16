<?
$_SERVER="";
$User="";
$Pass="";
$BD="";
$Conecta="mysqly_connect"($_SERVER,$User,$Pass,$BD);
if($Conecta->mysqly_error){
    die("Error a la BD".$Conecta->mysqly_error());
}
?>

<?php
require("Conecta.php");
$Consulta= "SELECT*FROM  Mensajes LIMIT='1,0'";
$EConsulta=$Conecta->query($Consulta);
?>

<?php include "query.php";
if($EConsulta->num_rows>0)
?>
<table>
<td>Id_Mensaje</td>
<td>Mensaje</td>
<td>Id_Usuario</td>
</table>

<else>
    <?php echo 'while'($row=$EConsulta->fech_assoc()) ?>
        <tr><?php echo$row['Id_Mensaje'];?></tr>
        <tr><?php echo$row['Mensaje'];?></tr>
        <tr><?php echo$row['Id_Usuario'];?></tr>
        
</tbody>
<?php ?>