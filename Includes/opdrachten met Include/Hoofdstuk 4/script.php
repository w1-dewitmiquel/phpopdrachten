<?php
/**
 *User: Miquel de Wit
 *Date: 3-3-2020
 *Time: 17:40 pm
 *File: script.php
 */
?>
<?php
/*
 * PHP - Ron Spierings
 * Javascript - Remco Evers
 * ASP (C#) - Martijn van Meer
 * Database SQL - Ralph Gijsbrechts
 * Nederlands - Jan-Chris van den Ende
 * Engels - Jan Giesen
 * Loopbaan en Burgerschap - Bolattekin
 * Modelleren - Wim van Bijnen
 */
   //Aanmaken variabelen voor de vakken
    $courseName = "PHP";
    $teacherName;

    switch($courseName)
    {
        case "PHP":
            $teacherName = "Ron Spierings";
            break;
        case "Javascript":
            echo("Voor het vak " . $courseName . " heb je " . $teacherName . " als docent");
            break;
        case "ASP":
            $teacherName = "Martijn van Meer";
            break;
        case "SQL":
            $teacherName = "Ralph Gijsbrechts";
            break;
        case "Nederlands":
            $teacherName = "Jan-Chris van den Ende";
            break;
        case "Engels":
            $teacherName = "Jan Giesen";
            break;
        case "Burgerschap":
            $teacherName = "Bolattekin";
            break;
        case "Modelleren":
            $teacherName = "Wim van Bijnen";
            break;
    }
    echo("<p>Voor het vak <span class='dik'>" . $courseName . "</span> heb je <span class='dik'>" . $teacherName . "</span> als docent</p>");
?>
