<?php
    session_start();
    
    $eno=$_POST['eno'];
    $en=$_POST['en'];
    $add=$_POST['add'];

    $_SESSION['eno']=$eno;
    $_SESSION['en']=$en;
    $_SESSION['add']=$add;

?>

<body>
    <form action="b.php" method="POST">
        Enter ba:<input type="text" name="ba"><br>
        Enter da:<input type="text" name="da"><br>
        Enter hra:<input type="text" name="hra"><br>
        <input type="submit" value="Next">
    </form>
</body>