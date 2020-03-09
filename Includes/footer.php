<?php
    /**
     * User: Miquel de Wit
     * Date: Date
     * Time: Time
     * File: File
     */
?>

<?php
    include("variabelen.php");
    date_default_timezone_set("Europe/Amsterdam");
    echo("<div class='footer'>");
    echo("&copy;" . $year . " ");
    echo($name);
    echo(" ");
    $uur = date("H");
    echo(" ");
    if($uur >= 0 && $uur < 5)
    {
        echo("Goedennacht");
    }
    else if($uur >= 5 && $uur < 12)
    {
        echo("Goedenochtend");
    }
    else if($uur >= 12 && $uur < 17)
    {
        echo("Goedenmiddag");
    }
    else if($uur >= 17 && $uur <= 24)
    {
        echo("Goedenavond");
    }
    else
    {
        echo("Deze tijd bestaat niet");
    }
    echo("</div>");


?>

