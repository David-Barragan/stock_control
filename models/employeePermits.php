<?php

session_start();

if( (!isset($_SESSION['authenticated'])) )
    echo '<script> alert("You dont have the necessary permits"); ocation.href="../views/login.php"</script>';


if($_SESSION['role'] !='empleado')
    echo '<script> alert("You dont have the necessary permits"); location.href="../views/login.php"</script>';          
