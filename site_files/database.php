<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbase = 'swimtrack';

$con = mysqli_connect($server, $username, $password, $dbase);

if(!$con)
{
    die('Connection failed due to '.mysqli_connect_error());
}
?>