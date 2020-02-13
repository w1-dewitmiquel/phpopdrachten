<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
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
    </body>
</html>