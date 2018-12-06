<?php
$con = mysql_connect('localhost','root','') or die (mysql_error());
$x1 = mysql_select_db('chat', $con) or die (mysql_error());
?>

<?php
$usuario=$_POST['usuario'];
$mensagem=$_POST['mensagem'];

$sql =@mysql_query("INSERT INTO mensagens(usuario,mensagem) VALUES ('$usuario','$mensagem')") or die (mysql_error());
if($sql >0) {

}
?>