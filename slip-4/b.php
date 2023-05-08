<?php
    session_start();

    $da=$_POST['da'];
    $ba=$_POST['ba'];
    $hra=$_POST['hra'];

    echo"Name:".$_SESSION['en'];
    echo"<br>No:".$_SESSION['eno'];
    echo"<br>Address:".$_SESSION['add'];
    echo"<br>DA:".$da;
    echo"<br>BA:".$ba;
    echo"<br>HRA:".$hra;

?>