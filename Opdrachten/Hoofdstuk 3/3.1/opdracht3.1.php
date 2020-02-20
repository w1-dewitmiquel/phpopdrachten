<?php
/**
 * User: Miquel de Wit
 * Date: 20-2-2020
 * Time: 19:39 pm
 * File: opdracht3.1.php
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
    <?php
    include("../../../Includes/header.php");
    ?>
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
                            <a href="opdracht3.1.php">Opdracht 3.1</a>
                        </li>
                        <li>
                            <a href="../3.2/opdracht3.2.php">Opdracht 3.2</a>
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
                //Aanmaken variabelen verhaal 1
                $event = "Elfstedentocht";
                $eventFries = "Alvestêdetocht";
                $number = 200;
                $tour = "Schaatstocht";
                $ice = "natuurijs";
                $association = "Koninklijke Vereniging De Friesche Elf Steden";
                $capitalCity = "Leeuwarden";
                $location = "Friesland";
                $eventOne = "Elfstedentocht";
                $numberOne = 15;
                $numberTwo = 1909;
                $numberThree = 1;

                //Aanmaken verhaal 1
                $story = "De " . $event . " (Fries: " . $eventFries . ") is een " . $number . " kilometer" . "<br>" . "lange " . $tour . "over " . $ice . " die wordt georganiseerd door<br>de" . $association . "." . $capitalCity . ",<br>" . "de hoofdstad van " . $location . "," . "is start- en aankomstplaats. De<br>" . $eventOne . "is inmiddels " . $numberOne . " maal verreden en werd voor het<br>eerst in " . $numberTwo . " gereden en wordt maximaal " . $numberThree . " keer per winter<br>gehouden.";

                echo("<p>$story</p>");

                //Aanmaken variabelene verhaal 2
                $study = "Koning Willem I college";
                $college = "Applicatie- en Mediaontwikkeling";
                $field = "programmeren";
                $transport = "bus";
                $dateOfBirth = 2002;
                $currentAge = date("Y") - $dateOfBirth;
                $currentAssignment = "Opdracht 3.1.php";
                $event = "carnaval";
                $name = "Miquel de Wit";

                //Aanmaken verhaal 2
                $story2 = "Mijn naam is " . $name . " en ik zit op het " . $study . " en volg de opleiding " . $college . ".<br>Op mijn opleiding moet ik vooral veel " . $field . ".Ik ben geboren op " . $dateOfBirth . " en ben ben momenteel " . $currentAge . " jaar oud." . "<br>" . "Ik moet dit verhaal schrijven voor het vak PHP, " . $currentAssignment . ". Graag meld ik er nog bij dat ik " . $event . " ga vieren en ik ga met de " . $transport . ".<br>" . " Wie weet kom ik je tegen";

                echo("<p>$story2</p>");

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



<?php
