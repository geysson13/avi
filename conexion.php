<?php

$connection= new mysqli("localhost", "root", "", "rol");
if ($connection-> connect_error) {
    echo "fallo al conectar a Mysql: (".$connection->connect_errno.")".$connection->connect_error;
}
?>