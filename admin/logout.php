<?php

//starting session
session_start();

unset($_SESSION['email']);
setcookie("myCookie",null,time()-123);
header("location:/project-tour/login.php");

?>