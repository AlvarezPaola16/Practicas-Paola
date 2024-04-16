<?
$_SERVER="";
$User="";
$Pass="";
$BD="";
$Conecta='mysqly_connect'($_SERVER,$User,$Pass,$BD);
if($Conecta->mysqly_error){
    die("Error a la BD".$Conecta->mysqly_error());
}
?>

<?php
require("Conecta.php");
$Consulta= "SELECT*FROM  productos LIMIT='1,10'";
$EConsulta=$Conecta->query($Consulta);
?>

<?php include "query.php";
?>
<table>
<td>Id</td>
<td>Nom</td>
<td>Descr</td>
<td>Cantidad</td>
</table>

<tbody>
    <?php echo 'while'($row=$EConsulta->fech_assoc()) ?>
        <tr><?php echo$row['Id'];?></tr>
        <tr><?php echo$row['Nom'];?></tr>
        <tr><?php echo$row['Descrip'];?></tr>
        <tr><?php echo$row['Cant'];?></tr>
        <tr><?php echo$row['Stock'];?></tr>
</tbody>
<?php ?>
