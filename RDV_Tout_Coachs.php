<?php if(!$_COOKIE['connection'])
{
    include 'SqlConDatabase.php';
}

$connect = $_COOKIE['connection'];
?>