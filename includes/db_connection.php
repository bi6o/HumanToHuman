<?php
//1. create the db connection
//it's better to define constants than to define variables for the db connections as in the following
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","humantohuman");

//some call the next one sql or db or mysqli.. depends on the developer
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
//test if connection occured
if (mysqli_connect_errno())
{
    die('Database connection failed: ' . mysqli_connect_error() . " (" . mysqli_connect_errno() . ") "); 
}
?>