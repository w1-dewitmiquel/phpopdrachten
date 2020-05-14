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
        <?php
            // Open de database connectie en ODBC driver
           try
            {
                $pdo = new PDO("odbc:odbc3");
            }
            catch (PDOException $e)
            {
                echo "<h1>Database error:</h1>";
                echo $e->getMessage();
                die();
            }
            echo "database connectie gelukt";

            // Uitvoeren van een SQl query
            try
            {
                // Query schrijven
                $sql = 'SELECT * FROM joke';
                // Query uitvoeren
                $result = $pdo->query($sql);
            }
            catch (PDOException $e)
            {
                echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
                exit();
            }
            // Lege Array aanmaken voor de results
            $aJokes = array();
            // Door de results heen loopen via een while
            while ($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                // Result wegschrijven in de $aJokes array
                $aJokes[] = $row;
            }
            // Tonen van de inhoud van aJokes
            var_dump($aJokes);
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



