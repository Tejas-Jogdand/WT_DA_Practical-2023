<?php 
    $msg = $_COOKIE['msg'];
    $fs = $_COOKIE['size'];
    $fc = $_COOKIE['color'];
    $bc = $_COOKIE['bg'];
    ?>
    <body bgcolor="<?php echo $bc?>">
     <h1 style="<?php echo "font-size:$fs"."px"?>; <?php echo "color:$fc;"?>"><?php echo $msg?></h1>
    </body>