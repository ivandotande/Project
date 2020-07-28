<?php

$myPDO = new PDO('mysql:host=localhost;dbname=dbname', 'username', 'password');
$result = $myPDO->query("SELECT lastname FROM employees");

?>