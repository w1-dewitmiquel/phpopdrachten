<?php
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <?php
        // Voorbeeld 1: While loop
        $counter = 15;
        while($counter >= 0)
        {
            echo("<p>Nog " . $counter . " keer je handen wassen</p>");
            $counter--;
        }

        // Voorbeeld 2: for loop
        for($eggsAmount = 0; $eggsAmount <= 37; $eggsAmount++)
        {
            echo("<p>Aantal eieren : " . $eggsAmount .  "</p>");

            if($eggsAmount >= 5 && $eggsAmount <= 10)
            {
                echo("<p style='color: orange'>MANDJE VOL</p>");
            }
            else if($eggsAmount >= 11 && $eggsAmount < 20)
            {
                echo("<p style='color: red'>Je laat een spoor achter</p>");
            }
        }

        // Voorbeeld 3: Strtotime()
        $example1 = strtotime ("yesterday");
        // $example2 = strtotime ("tomorrow");
        // $example3 = strtotime ("+3 days +1 hour");
        echo($example1); // Het aantal seconden sinds 01-01-1970 wordt ge-echo'ed

        $date1 = date("d-m-Y h:i, $example1");
        echo($date1);
    ?>
    </body>
</html>
