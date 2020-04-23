<?php
/**
 * User: Miquel de Wit
 * Date: 24-3-2020
 * Time: 22:39 pm
 * File: opdracht5.1.php
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
                        <a href="../../4.1/opdracht4.1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="../../4.2/opdracht4.2">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="../../4.3/opdracht4.3">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="../../4.4/opdracht4.4.php">Opdracht 4.4</a>
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
        <form action="uitschrijving.php" method="get">
            <table>
                <tr>
                    <td>
                        Voor en achternaam
                    </td>
                    <td>
                        <input type="text" name="firstAndLastname" value="Hoi Miquel, dit doet een value">
                    </td>
                </tr>
                <tr>
                    <td>
                        Studentnummer
                    </td>
                    <td>
                        <input type="number" name="schoolNumber">
                    </td>
                </tr>
                <tr>
                    <td>
                        Datum van uitschrijving
                    </td>
                    <td>
                        <input type="date" name="deregistration">
                    </td>
                </tr>
                <tr>
                    <td>
                        Reden van uitschrijving
                    </td>
                    <td>
                        <select name="reasonDr">
                            <option value="wrongChoice">Verkeerde keuze</option>
                            <option value="notFun">Niet meer leuk</option>
                            <option value="notForMe">Niks voor mij</option>
                            <option value="badGrades">Te slechte cijfers</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Leerjaar
                    </td>
                    <td>
                        <input type="radio" value="gradeOne" name="grade">1ste leerjaar<br>
                        <input type="radio" value="gradeTwo" name="grade">2de leerjaar<br>
                        <input type="radio" value="gradeThree" name="grade">3de leerjaar
                    </td>
                </tr>
                <tr>
                   <td>
                       <input type="checkbox" value="SuccessHallo" name="succesClassEntry">Ik wil me aanmelden bij succesklas<br>
                       <input type="checkbox" value="VerwijderHallo" name="deleteData">Verwijder mijn gegevens uit het systeem
                   </td>
                </tr>
                <tr>
                    <td>
                        Schrijf hieronder de reden van je uitschrijving op
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="message"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="versturen" value="Versturen">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</main>
<footer>
    <?php
    include("../../../Includes/footer.php");
    ?>
</footer>
</body>
</html>