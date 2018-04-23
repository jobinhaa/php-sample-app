<?php
/* Credenciais de comunicação com o banco. */
define('DB_SERVER', 'backend'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'demo');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Nāo conectou :( " . mysqli_connect_error());
}

?>
