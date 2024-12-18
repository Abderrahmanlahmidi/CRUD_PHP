<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123123321321@instance');
define('DB_NAME', 'todo_list');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
   echo "ERROR: Could not connect. " . mysqli_connect_error();
}



?>