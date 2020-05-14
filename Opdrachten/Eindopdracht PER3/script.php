<?php
    // Username en wachtwoord combinaties
    $userArrayList = [
        "Sjul" => "1kk3N13tW3t3n",
        "Koos" => "Bed4nktVoorDeEer",
        "Jim" => "carl_wheezer",
        "Jantje13" => "admin",
        "Jantje17" => "admin",
        "Jantje10" => "admin",
        "Jantje69" => "admin",
        "Jantje1337" => "admin",
        "PussySlayer87" => "admin",
        "PussySlayer69" => "4dmin",
        "Ron" => "1234" // Ron = index - 1234 = value
    ];

    // Eventuele foutmeldinge6n komen in deze string
    $message = "";
    // Is de persoon succesvol ingelogd?
    $loginSuccess = false;

    // Checken of gegeven username en wachtwoord bestaat in de array $userArrayList
    if( isset($_POST["username"]) == true && isset($_POST["password"]) == true) /* Als de tekstboxen met name = "username" en
     name = "password" zijn ingevuld (true), wordt de onderstaande code uitgevoerd */
    {
        // foreach gebruiken we om door de $userArrayList heen te loopen
        foreach($userArrayList as $index => $value) // Loopt door elke index en value van de bovenstaande Array
        {
            // Bepalen of opgegeven $_POST waardes in de array aanwezig zijn
            if($_POST["username"] == $index && $_POST["password"] == $value)
            {
                // Username en password zijn gevonden!
                $loginSuccess = true;
            }
        }
    }
?>
