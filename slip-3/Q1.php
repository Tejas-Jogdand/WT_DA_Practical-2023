<?php
    session_start();

    if(isset($_SESSION['count']))
        $_SESSION['count']++;
    else
        $_SESSION['count']=1;

    $un=$_POST['uname'];
    $pa=$_POST['pass'];
    $Count=$_SESSION['count'];

    if(isset($un) && isset($pa) && $Count<=3){
        if($un==$pa)
        echo"You have loged in succesfully";
        else
        echo"Invalid";
    }
    if($Count>3){
        echo"3 attempts over";
    }

    echo"$Count";
?>