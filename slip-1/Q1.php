<!-- Write a PHP script to keep track of number of times the web page has been accessed (Use Session
Tracking). -->
<html>
<head>
<title> Number of times the web page has been viited.</title>
</head>
<body>
<?php
        session_start();
        if(isset($_SESSION['count'])){
            $_SESSION['count']++;
        }
        else{
            $_SESSION['count']=1;
        }
        print"Page is Visited ".$_SESSION['count']." times.";
?>
</body>