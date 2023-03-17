<?php
    session_start();
    echo "bienvenido!!!!".$_SESSION['usuario']."<br>";
    echo "<a href='logout.php'>LogOut</a>";
?>