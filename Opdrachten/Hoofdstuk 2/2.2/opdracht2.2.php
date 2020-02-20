<?php
/**
 * User: Miquel de Wit
 * Date: 11-2-2020
 * Time: 17:04
 * File: opdracht2.2.php
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <meta charset="utf-8">
        <title>
            Opdracht 2.2
        </title>
        <link href="../../Zcss/style.css" rel="stylesheet" type="text/css">
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
                                <a href="../2.1/opdracht2.1.php">Opdracht 2.1</a>
                            </li>
                            <li>
                                <a href="opdracht2.2.php">Opdracht 2.2</a>
                            </li>
                        </ul>
                        Hoofdstuk 3
                        <ul>
                            <li>
                                <a href="../../Hoofdstuk%203/3.1/opdracht3.1.php">Opdracht 3.1</a>
                            </li>
                            <li>
                                <a href="../../Hoofdstuk%203/3.2/opdracht3.2.php">Opdracht 3.2</a>
                            </li>
                            <li>
                                <a href="../../Hoofdstuk%203/3.3/opdracht3.3.php">Opdracht 3.3</a>
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
                    $text1 = "Hallo";
                    $text2 = "een makkelijke taal";
                    $text3 = "toch zo'n makkelijke taal";
                    $text4 = "wat is";
                    $text5 = "PHP";
                    $text6 = "Nooit gedacht dat";
                    $text7 = "De installatie is best ingewikkeld";
                    $text8 = "Fijn";
                    $text9 = "?";
                    $text10 = ".";
                    $text11 = ",";
                    $text12 = "<br>";
                    $text13 = "is";
                    $text14 = "Vind je niet";
                    $text15 = "toch";
                    $text16 = "dat";

                    echo("<p>" . $text1 . $text11 . " " . $text4 . " " . $text5 . " " . $text3 . $text10 . $text12 . $text7 . $text10 . " " . $text8 . " " . $text15 . $text9 . $text12 . $text6 . " " . $text5 . " " . $text3 . " " . $text13 . $text10 . "</p>");

                    echo("<p>". $text1 . $text11 . $text12 . $text8 . " " . $text15 . " " . $text16 . " " . $text5 . " " . $text2 . " " . $text13 . $text10 . $text12 . $text7 . $text10 . " " . $text14 . $text9 . "</p>");

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