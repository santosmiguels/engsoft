<?php 
$conecta = mysqli_connect('localhost:25565','root','','unbsnacks') or print (mysql_error()); 
if (!$conecta) {
    die('Não foi possível conectar: ' . mysql_error());
}
print "Conexão OK!"; 
mysql_close($conecta); 

?>


<!-- <?php include 'db.php';?> -->