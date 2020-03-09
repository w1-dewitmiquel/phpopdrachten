<?php
/**
 * User: Miquel de Wit
 * Date: 3-3-2020
 * Time: 11:05 am
 * File: Hoofdstuk4_les1.php
 */
?>

<!doctype HTML>
<html>
    <head>

    </head>
    <body>
    <?php
        // Instructie 1 hoofdstuk 4

        // Vertellen dat ons script de tijdzones van Hong Kong moet aanhouden.
        date_default_timezone_set("Asia/Hong_Kong");

        // Toon de tijd in hh:mm:ss formaat
        $currentTime = date("D y-m-d H:i:s");

        echo("<p>Huidige tijd: " . $currentTime . "</p>");

        // Oefening 2: Switch
        $currentDay = date("D");

        switch($currentDay)
        {
            // Bij de case zit conditie
            //de dagen worden met 3 letters in het engels aangegeven in PHP
            case "Mon": // = als $currentHour = Mon (maandag) is
                //Code komt hier
                echo("Het is maandag.");
                break;
            case "Tue":
                echo("Het is dinsdag.");
                break;
            case "Wed":
                echo("Het is woensdag.");
                break;
            case "Thu":
                echo("Het is donderdag");
                break;
            case "Fri":
                echo("Het is vrijdag");
                if($name == "Miquel")
                {
                    // Je kunt ook if else in je switch doen (gebruik hier ook break)
                }
                break;
            default:
                // Code voor "else" komt hier
                echo("Deze dag bestaat niet");
        }

    ?>
    </body>
</html>

