<?php

session_start();
$_SESSION['username'] = "Noor Hassan";
$_SESSION['password'] = "noor7151";
echo $_SESSION['username']."<br>";
echo $_SESSION['password'];
?>