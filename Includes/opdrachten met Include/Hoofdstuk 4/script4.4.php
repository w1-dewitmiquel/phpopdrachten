<?php
    date_default_timezone_set("Europe/Amsterdam");

    $sentence= "";
    $tel = 0;

    while($tel < 8)
    {
        if($tel == 0)
        {
            $sentence = $sentence . "<p>" . "Vandaag: Dag " . date("w") . " is het " . date("d-m-Y") .  "</p>";
        }
        else if($tel == 1)
        {
            $sentence = $sentence . "<p>" . "Morgen: Dag " . date("w", strtotime("+$tel days")) . " is het " . date("d-m-Y", strtotime("+$tel days")) . "</p>";
        }
        else if($tel == 2)
        {
            $sentence = $sentence . "<p>" . "Overmorgen: Dag " . date("w", strtotime("+$tel days")) . " is het " . date("d-m-Y", strtotime("+$tel days")) . "</p>";
        }
        else if($tel == 3)
        {
            $sentence = $sentence . "<p>" . "Over-Overmorgen: Dag " . date("w", strtotime("+$tel days")) . " is het " . date("d-m-Y", strtotime("+$tel days")) . "</p>";
        }
        else if($tel == 4)
        {
            $sentence = $sentence . "<p>" . "Over-Over-Overmorgen: Dag " . date("w", strtotime("+$tel days")) . " is het " . date("d-m-Y", strtotime("+$tel days")) . "</p>";
        }
        else if($tel == 5)
        {
            $sentence = $sentence . "<p>" . "De dag daarna: Dag " . date("w", strtotime("+$tel days")) . " is het " . date("d-m-Y", strtotime("+$tel days")) . "</p>" ;
        }
        else if($tel == 6)
        {
            $sentence = $sentence . "<p>" . "De dag daarna: Dag " . date("w", strtotime("+$tel days")) . " is het " . date("d-m-Y", strtotime("+$tel days")) . "</p>";
        }
        else if($tel == 7)
        {
            $sentence = $sentence . "<p>" . "De dag daarna: Dag " . date("w", strtotime("+$tel days")) . " is het " . date("d-m-Y", strtotime("+$tel days")) . "</p>";
        }

        $tel++;
    }

    echo($sentence);
?>