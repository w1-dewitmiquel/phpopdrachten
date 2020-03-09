<?php
/**
 * User: Miquel de Wit
 * Date: 20-2-2020
 * Time: 08:48 am
 * File: opdracht.php
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
    <link href="../../Zcss/style.css" rel="stylesheet" type="text/css">
    <title>
        Index
    </title>
</head>
<body>
<header>
    <?php
        include("../../../Includes/header.php");
    ?>
</header>
<aside>
    <div id="list">
        <h2>
            Menu
        </h2>
        <ul>
            <li>
                Hoofdstuk 2
                <ul>
                    <li>
                        <a href="../../Hoofdstuk%202/2.1/opdracht2.1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%202/2.2/opdracht2.2.php">Opdracht 2.2</a>
                    </li>
                </ul>
                Hoofdstuk 3
                <ul>
                    <li>
                        <a href="../3.1/opdracht3.1.php"">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="opdracht3.2.php">Opdracht 3.2</a>
                    </li>
                    <li>
                        <a href="../3.3/opdracht3.3.php">Opdracht 3.3</a>
                    </li>
                </ul>
                Hoofdstuk 4
                <ul>
                    <li>
                        <a href="../../Hoofdstuk%204/4.1/opdracht4.1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%204/4.2/opdracht4.2.php">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%204/4.3/opdracht4.3.php">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%204/4.4/opdracht4.4.php">Opdracht 4.4</a>
                    </li>
                </ul>
                Hoofdstuk 5
                <ul>
                    <li>
                        <a href="../../Hoofdstuk%205/5.1/opdracht5.1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%205/5.2/opdracht5.2.php">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%205/5.3/opdracht5.3.php">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="../../Hoofdstuk%205/5.4/opdracht5.4.php">Opdracht 5.4</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
<main id="wrapper">
    <div id="uitwerking">
        <h2 id="uitwerking2">
            Uitwerking
        </h2>
        <?php
            // declareren en initialiseren van de gewenste variabelen
            // declareren = variabele aanmaken
            $trafficLightColor = "Groen"; // initialiseren = waarde geven
            $ambulanceComing = false; // Heeft nog geen waarde, maar hij is al gedeclareerd (waarde is nu "nul" zonder quotes)

            //driveOne declareren en initialiseren
            $driveOn = true;
            // Checken of auto mag doorrijden of moet stoppen
            if($trafficLightColor == "Groen" && $ambulanceComing == false)
            {
                $driveOn = true;
            }
            else if($trafficLightColor == "Groen" && $ambulanceComing == true)
            {
                $driveOn = false;
            }
            else if($trafficLightColor == "Oranje" || $ambulanceComing == true)
            {
                $driveOn = false;
            }
            else if($trafficLightColor == "Rood" || $ambulanceComing == true)
            {
                $driveOn = false;
            }
            else
            {
                $driveOn = true;
                echo("<p>Foutje. Het stoplicht heeft een ongeldige kleur</p>");
            }

            // Tonen van melding aan de automobilist
            if($driveOn == true)
            {
                echo("<h1 id='groen'>U mag doorrijden</h1>");
            }
            else
            {
                echo("<h1 id='rood'>U mag niet doorrijden</h1>");
            }
        ?>

        <hr>

        <?php
            //Deel 2: Alcohol in verschillende landen opdracht
            $countryname = "Zweden";
            $currentAge = 17;

            //Tonen algemene gegevens
            echo("<p>Je woont in " . $countryname . " en je bent " . $currentAge . " jaar oud.</p>");

            // Checken of je in een land op een bepaalde leeftijd mag drinken
            // else if toevoegen voor ieder land
            if($countryname == "België" && $currentAge >= 16 && $currentAge < 18)
            {
                echo("<p>Je mag hier zwakke alcohol drinken.</p>");
            }
            else if($countryname == "België" && $currentAge >= 18)
            {
                echo("<p>Je mag hier sterke alcohol drinken.</p>");
            }
            else if($countryname == "Bulgarije" && $currentAge >= 18)
            {
                echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
            }
            else if($countryname == "Cyprus" && $currentAge >= 17)
            {
                echo("<p>Je mag hier sterke en zwakke alcohol drinken</p>");
            }
            else if($countryname == "Nederland" && $currentAge >= 20)
            {
                echo("<p>Je mag hier sterke en zwakke alcohol drinken</p>");
            }
            else if($countryname == "Zweden" && $currentAge >= 18 && $currentAge < 20)
            {
                echo("<p>Je mag hier zwakke alcohol drinken</p>");
            }
            else if($countryname == "Zweden" && $currentAge >= 20)
            {
                echo("<p>Je mag hier sterke alcohol drinken</p>");
            }
            else
            {
                echo("<p>Hier mag je GEEN alcohol drinken</p>");
            }

            echo("<a href='../../index.php'>terug</a>");
        ?>
    </div>
</main>
<footer>
    <?php
        include("../../../Includes/footer.php");
    ?>
</footer>
</body>
</html>