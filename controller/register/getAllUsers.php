<?php
session_start();

// error_reporting(E_ALL);
// ini_set("display_errors" , 1);

include("../model/register/regiterClass.php");

$readTable = new registrationClass;
$allRegisteredUsers = $readTable->getUsers();
?>