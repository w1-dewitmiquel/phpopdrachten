<?php
    // Starten van de sessie
    session_start();

    // Tonen van de gegevens
    echo("<p>Gebruikte username is:" . $_SESSION["username"] . "</p>");


?>
