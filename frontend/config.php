<?php
/* Credenciais de comunicação com o banco. */
define('DB_SERVER', 'backend'); 
define('DB_USERNAME', ''); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'demo');
 

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($connection === false){
    die("ERROR: Nāo conectou :( " . mysqli_connect_error());
}

?>
