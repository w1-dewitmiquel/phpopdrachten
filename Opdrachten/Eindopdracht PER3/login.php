<?php
/**
 * User: Miquel de Wit
 * Date: 23-4-2020
 * Time: 12:06 PM
 * File: login.php
 */
?>

<?php
    include("script.php");
?>

<!doctype HTML>
<html>
<head>

</head>
<body>
<?php

    include($_SERVER["DOCUMENT_ROOT"] . "/phpopdrachten/includes/header.php");

?>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="hoofdstuk2/opdracht_2-1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="hoofdstuk5/opdracht54.php">Opdracht 5.4</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Bergheen</h2>
    <?php
        include("script.php");
    ?>

    <?php
        if($loginSuccess == false)
        {
            // Laat dit via echo zien:
             /* <p>Login om onze inlogegevens + adresgegevens te zien</p>
                <p style="color: red">
                    <?php
                        echo($message);
                    ?>
                </p>
                <form action="login.php" method="post">
                    <input type="text" name="username">
                    <input type="password" name="password">
                    <input type="submit" value="login">
                </form>
             *
             */
             $message = "Foutieve username en / of wachtwoord";
             echo("<p style='color: red'>");
             echo($message);
             echo("</p>");
        }

    ?>

    <form action="login.php" method="post">
        Gebruikersnaam:
        <input type="text" name="username"><br>
        Wachtwoord:
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>

    <?php
        // Tonen van adresgegevens bij correcte login
        if($loginSuccess == true)
        {
            echo("<p>Welkom!</p>");
            echo("<fieldset>");
            echo("<legenda>Openingstijden</legenda>");
            echo("<p>Do: 22:00</p>");
            echo("<p>Vr: All day</p>");
            echo("<p>Za: All day</p>");
            echo("<p>Zo: 12:00</p>");
            echo("</fieldset>");
        }
    ?>

</main>
<?php
    // include( $_SERVER["DOCUMENT_ROOT"] . "footer.php");
?>
</body>
</html>



