<html>
    <body>
        
        <?php
            $xml=simplexml_load_file("Q1.xml") or die("Error: Can not opne");
        ?>
        <center><b>Cricket details</b></center>
        <table border="1">
        <th>Team</th>
        <th>Player</th>
        <th>runs</th>
        <th>wicket</th>
        <?php
            foreach($xml->Team as $a){
                echo"<tr><td>".$a['country'];
                echo"<tr><td>".$a->player;
                echo"<tr><td>".$a->runs;
                echo"<tr><td>".$a->wicket;
            }
        ?>
        </table>
    </body>
</html>