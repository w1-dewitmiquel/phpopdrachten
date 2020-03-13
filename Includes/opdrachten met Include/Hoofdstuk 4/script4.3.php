<?php
/**
 * User: Miquel de Wit
 * Date: 10-3-2020
 * Time: 12:10 pm
 * File: script4.3.php
 */
?>
<?php
    // Taak 2
    $task2 = "Lancering in: "; // Aanmaken variabel (zin)

    $counter = 19; // Aanmaken counter voor de for loop

    // While loop
    while($counter > 0) // Conditie
    {
        $task2 = $task2 . " " . $counter . ", "; // Je doet hier task2 = task2 + spatie + counter + komma met spatie
        // De zin blijft hetzelfde en wordt hier niet telkens bij opgeteld, de getallen wel.

        // 1ste zin = $task2 = Lancering in: 1,
        // 2de zin = $task2 = Lancering in: 1, 2,
        // 3de zin = $task2 = Lancering in: 1, 2, 3,

        /* De zin word telkens overschreven totdat de conditie FALSE wordt. In die tussentijd wordt de zin telkens
           overschreven. de zin ($task2) blijft hetzelfde, maar de er wordt steeds een nieuwe waarde toegevoegt
           doordat de counter verandert van waarde aan het einde van de loop, en die wordt weer toegevoegd
           als de loop opnieuw begint*/




        $counter--; // Je trekt hier telkens 1 af van het getal 19 (de waarde veranderd)

    }

    // Taak 3
    $task3 = "Lancering in: ";

    // Aanmaken for loop
    // Aanmaken 3 statements in for loop
    // 1: variable aanmaken / 2: conditie: /  3: wat er aan het einde van een loop moet gebeuren
    for($counterTask3 = 19; $counterTask3 > 0; $counterTask3--)
    {
        $task3 = $task3 . " " . $counterTask3 . ", ";
    }

    // Taak 4
    $task4 = "";

    $counterTask4 = 1; // Aanmaken counter voor de whule loop

    while($counterTask4 < 6)
    {
        // Aanmaken if else statement
        if($counterTask4 == 1) // Aanmaken conditie
        {
            $task4 = $task4 . "<h" . $counterTask4 . ">Dit is " . $counterTask4 . "ste iteratie</h" . $counterTask4 . ">";
        }
        else
        {
            $task4 = $task4 . "<h" . $counterTask4 . ">Dit is " . $counterTask4 . "de iteratie</h" . $counterTask4 . ">";
        }
        // Het cijfer van de <h> tag wordt bepaald door de $counterTask4

        /* Nog een belangrijk puntje: De oude zin wordt telkens erbij OPGETELD.
           De oude zin wordt overschreven door de nieuwe zin, maar de oude zin wordt er
           dus nog wel bij opgeteld door de "." teken na $task2 */

        // Aanmaken regel zodat de counter +1 optelt iedere keer de loop zich herhaald
        $counterTask4++;
    }

    // Taak 5
    $task5 = "";

    for($counterTask5 = 0; $counterTask5 < 11; $counterTask5++)
    {
        $task5 = $task5 . "<table>" . "<tr>" . "<td>" . "Dit is de " . $counterTask5 . "</td>" . "</tr>" . "</table>";

        /* Hier wordt task5 ook de heletijd herhaald en wordt de $task5 overschreven door de nieuwe en
           dat herhaald zich tot de conditie FALSE wordt */

        // De vorige $task5 zin wordt hier ook de heletijd er bij toegevoegt door de "." teken na $task5

    }

    // Taak 6
    $task6 = "";

    $counterTask6 = 18; // Aanmaken variabele met mijn leeftijd dat ik dit jaar word (In 2020)
    $yearTask6 = date("Y"); // Aanmaken variabele met het huidige jaar

    while($counterTask6 > 0)
    {
        if($counterTask6 == 18)
        {
            $task6 = $task6 . "<p>" . "In " . $yearTask6 . " word ik " . $counterTask6 . "</p>";
        }
        else
        {
            $task6 = $task6 . "<p>" . "In " . $yearTask6 . " ben ik " . $counterTask6 . "</p>";
        }

        $counterTask6--; // Aan het einde van de loop word er -1 verwijdert van de counter (leeftijd)
        $yearTask6--; // Aan het einde van de loop word er -1 verwijdert van het huidig jaar (2020)
    }

    // Taak
    $task7 = "";

    $yearTask7 = date("Y"); // Aanmaken variabele met het huidige jaar (2020)

    for($counterTask7 = 18; $counterTask7 > 0; $counterTask7--)
    {
        if($counterTask7 >= 0 && $counterTask7 <= 2)
        {
            $task7 = $task7 . "<p>" . "In " . $yearTask7 . " was ik een peuter." . "</p>";
        }
        else if($counterTask7 >= 3 && $counterTask7 <= 7)
        {
            $task7 = $task7 . "<p>" . "In " . $yearTask7 . " was ik een kleuter." . "</p>";
        }
        else if($counterTask7 >= 8 && $counterTask7 <= 11)
        {
            $task7 = $task7 . "<p>" . "In " . $yearTask7 . " ik een tiener." . "</p>";
        }
        else if($counterTask7 >= 12 && $counterTask7 <= 17)
        {
            $task7 = $task7 . "<p>" . "In " . $yearTask7 . " was ik een puber." . "</p>";
        }
        else if($counterTask7 >= 18 && $counterTask7 <= 19)
        {
            $task7 = $task7 . "<p>" . "In " . $yearTask7 . " was ik een absolent." . "</p>";
        }
        else if($counterTask7 >= 20)
        {
            $task7 = $task7 . "<p>" . "In " . $yearTask7 . " ben ik een volwassenen." . "</p>";
        }

        $yearTask7--;
    }

?>