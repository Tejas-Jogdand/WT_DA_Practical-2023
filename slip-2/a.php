<?php
    $style=$_POST['style'];
    $size=$_POST['size'];
    $color=$_POST['color'];
    $bg=$_POST['bg'];
    $msg=$_POST['msg'];

    setcookie('style',$style);
    setcookie('size',$size);
    setcookie('color',$color);
    setcookie('bg',$bg);
    setcookie('msg',$msg);

    echo"Message: ".$msg;
    echo"<br>Style: ".$style;
    echo"<br>Size: ".$size;
    echo"<br>Color: ".$color;
    echo"<br>Background Color: ".$bg;
    echo"<br><a href='b.php'><input type='button' value='set'></a>";

?>