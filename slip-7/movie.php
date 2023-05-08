<?php
    $Doc=new  DOMDocument();
    $Doc->load("Q1.xml");

    $Title=$Doc->getElementsByTagName("movieTitle");
    $actorName=$Doc->getElementsByTagName("actorName");

    echo"Movie Title: <br>";
    foreach($Title as $val){
        echo"<br>".$val->textContent;
    }

    echo"Actor Name: <br>";
    foreach($actorName as $valu){
        echo"<br>".$valu->textContent;
    }
?>