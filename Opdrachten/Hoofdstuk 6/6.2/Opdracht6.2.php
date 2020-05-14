<?php
/**
 * User: Miquel de Wit
 * Date: Date
 * Time: Time
 * File: File
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
    <link href="../../Zcss/style.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
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
                        <a href="Hoofdstuk%202/2.1/opdracht2.1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk%202/2.2/opdracht2.2.php">Opdracht 2.2</a>
                    </li>
                </ul>
                Hoofdstuk 3
                <ul>
                    <li>
                        <a href="Hoofdstuk%203/3.1/opdracht3.1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk%203/3.2/opdracht3.2.php">Opdracht 3.2</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk%203/3.3/opdracht3.3.php">Opdracht 3.3</a>
                    </li>
                </ul>
                Hoofdstuk 4
                <ul>
                    <li>
                        <a href="Hoofdstuk 4/4.1/opdracht4.1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk%204/4.2/opdracht4.2.php">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk%204/4.3/opdracht4.3.php">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk%204/4.4/opdracht4.4.php">Opdracht 4.4</a>
                    </li>
                </ul>
                Hoofdstuk 5
                <ul>
                    <li>
                        <a href="Hoofdstuk%205/5.1/opdracht5.1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk%205/5.2/opdracht5.2.php">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk%205/5.3/opdracht5.3.php">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk%205/5.4/opdracht5.4.php">Opdracht 5.4</a>
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
        <form id="gameFrm" method="get" action="opdracht6.2.php">
            <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                      value="steen"><img src="../images/steen.jpg" class="img"></div>
            <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                      value="papier"><img src="../images/papier.jpg" class="img"></div>
            <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                      value="schaar"><img src="../images/schaar.jpg" class="img"></div>
        </form>

        <?php
            session_start();

            if(isset($_SESSION['user1']) == false || isset($_SESSION['user2']) == false)
            {
                $_SESSION['user1'] = 0;
                $_SESSION['user2'] = 0;
            }



             if (isset($_GET['keuze']) == true)
             {
                 echo "Jij koos: <img src='../images/{$_GET['keuze']}.jpg' class='img'>";
                 //keuze computer?



                //Wat kiest de computer

                //Random wordt er een getal tussen 0 en 2 gekozen
                $opties = array("steen", "papier", "schaar");
                $computerkeuzegetal = rand(0, 2);
                $computerkeuze = $opties[$computerkeuzegetal];
                echo "&nbsp;&nbsp;De computer koos: <img src='../images/{$computerkeuze}.jpg' class='img'>";

                // Aangeven wanneer de gebruiker of computer heeft gewonnen
                if($_GET['keuze'] == "steen" && $computerkeuze == "schaar")
                {
                    echo("Gebruiker wint");
                    $_SESSION['user1'] +=1; // +1 punt voor de gebruiker
                }
                else if($_GET['keuze'] == "steen" && $computerkeuze == "papier")
                {
                    echo("Computer wint");
                    $_SESSION['user2'] +=1; // +1 punt voor de computer
                }
                else if($_GET['keuze'] == "schaar" && $computerkeuze == "papier")
                {
                    echo("Gebruiker wint");
                    $_SESSION['user1'] +=1; // +1 punt voor de gebruiker
                }
                else if($_GET['keuze'] == "schaar" && $computerkeuze == "steen")
                {
                    echo("Computer wint");
                    $_SESSION['user2'] +=1; // +1 punt voor de computer
                }
                else if($_GET['keuze'] == "papier" && $computerkeuze == "steen")
                {
                    echo("Gebruiker wint");
                    $_SESSION['user1'] +=1; // +1 punt voor de gebruiker
                }
                else if($_GET['keuze'] == "papier" && $computerkeuze == "schaar")
                {
                    echo("Computer wint");
                    $_SESSION['user2'] +=1; // +1 punt voor de computer
                }
                else if($computerkeuze == $_GET['keuze'])
                {
                    // Gelijk spel
                    echo("Gelijkspel, beide krijgen geen punten");
                }
             }

            // Allebei de gebruikers in één melding tonen komt hier
            echo("Gebruiker 1 heeft:" . $_SESSION['user1'] . "punten en de computer heeft " . $_SESSION['user2'] . " punten.");
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



