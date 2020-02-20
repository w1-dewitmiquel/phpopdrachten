<?php
/**
 * User: Miquel de Wit
 * Date: 20-2-2020
 * Time: 19:28 pm
 * File: template.php
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
    <link href="../Zcss/style.css" rel="stylesheet" type="text/css">
    <title>
        Index
    </title>
</head>
<body>
<body>
    <header>
        <?php
            include("../Includes/header.php");
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
                            <a href="../Opdrachten/Hoofdstuk%202/2.1/opdracht2.1.php">Opdracht 2.1</a>
                        </li>
                        <li>
                            <a href="../Opdrachten/Hoofdstuk%202/2.2/opdracht2.2.php">Opdracht 2.2</a>
                        </li>
                    </ul>
                    Hoofdstuk 3
                    <ul>
                        <li>
                            <a href="../Opdrachten/Hoofdstuk%203/3.1/opdracht3.1.php">Opdracht 3.1</a>
                        </li>
                        <li>
                            <a href="../Opdrachten/Hoofdstuk%203/3.2/opdracht3.2.php">Opdracht 3.2</a>
                        </li>
                        <li>
                            <a href="../Opdrachten/Hoofdstuk%203/3.3/opdracht3.3.php">Opdracht 3.3</a>
                        </li>
                    </ul>
                    Hoofdstuk 4
                    <ul>
                        <li>
                            <a href="../Opdrachten/Hoofdstuk%204/4.1/opdracht4.1.php">Opdracht 4.1</a>
                        </li>
                        <li>
                            <a href="../Opdrachten/Hoofdstuk%204/4.2/opdracht4.2.php">Opdracht 4.2</a>
                        </li>
                        <li>
                            <a href="../Opdrachten/Hoofdstuk%204/4.3/opdracht4.3.php">Opdracht 4.3</a>
                        </li>
                        <li>
                            <a href="../Opdrachten/Hoofdstuk%204/4.4/opdracht4.4.php">Opdracht 4.4</a>
                        </li>
                    </ul>
                    Hoofdstuk 5
                    <ul>
                        <li>
                            <a href="../Opdrachten/Hoofdstuk%205/5.1./opdracht5.1.php">Opdracht 5.1</a>
                        </li>
                        <li>
                            <a href="../Opdrachten/Hoofdstuk%205/5.2/opdracht5.2.php">Opdracht 5.2</a>
                        </li>
                        <li>
                            <a href="../Opdrachten/Hoofdstuk%205/5.3/opdracht5.3.php">Opdracht 5.3</a>
                        </li>
                        <li>
                            <a href="../Opdrachten/Hoofdstuk%205/5.4/opdracht5.4.php">Opdracht 5.4</a>
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
                echo("<a href='../../index.php'>terug</a>");
            ?>
            <?php
                // Variabelen:
                // - Strings = "Miquel";
                // - integer/number (heel getal) = 2002;
                // - Boolean = False/True;
                // - Double/Float/Decimal = 19.5;
                // - Char (een karakter) = "R";

                // String
                $firstName = "Miquel";
                $lastName = "de Wit";

                $fullName = $firstName . " " . $lastName;

                // Integer / numbers
                $yearOfBirth = 2002;
                $currentYear = date("Y");
                $age = $currentYear - $yearOfBirth;

                // Boolean
                $fromDenBosch = false;
                $isMale = true;

                if( $fromDenBosch == true ) // spaties hoeven niet perse, maar het is netjes programmeren.
                {
                    if( $isMale == false ) // spaties hoeven niet perse, maar het is netjes programmeren.
                    {
                        echo("<p>Goeie</p>");
                    }
                    else
                    {
                        echo("<p>Goeie2</p>");
                    }
                }

                // echo commando
                echo("<p>Hallo</p>");

                // echo commando als terminal manier
                echo "<p>Dit is een echo</p>";
            ?>
            <div>
                <?php
                    echo("<h1>Hallo " . $fullName . "</h1>");
                    echo("<h2>Jouw leefttijd is " . $age . "</h2>")
                ?>
            </div>
        </div>
    </main>
        <footer>
            <?php
                include("../Includes/footer.php");
            ?>
        </footer>
    </body>
</html>