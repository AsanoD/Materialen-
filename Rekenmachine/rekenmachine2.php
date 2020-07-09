<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Rekenmachine</title>
        <link id="pagestyle" rel="stylesheet" href="rekenmachine.css">
    </head>
    <body>
        <form method="post">
            <input type="text" name="num1">
            <br>
            <input type="text" name="num2">
            <br>
            <button type="submit" name="Plus" id="Plus" class="bor">+</button>
            <button type="submit" name="Min" id="Min" class="bor">-</button>
            <button type="submit" name="Keer" id="Keer" class="bor">*</button>
            <button type="submit" name="Delen" id="Delen" class="bor">/</button>
            <button type="submit" name="Kwadraat" id="Kwadraat" class="bor">x²</button>
            <button type="submit" name="Macht" id="Macht" class="bor">xy</button>
            <button type="submit" name="Wortel" id="Wortel" class="bor">√x</button>
            <button type="submit" name="Tafel" id="Tafel" class="bor">table</button>
            <br>
            <button type="reset" name="reset" value="reset" class="bclear">Clear</button>
            <p>Het antwoord is: </p>
            <br>
            <?php
                if(!empty($_POST['num1']) && !empty($_POST['num2'])) {
                    $x = $_POST['num1'];
                    $y = $_POST['num2'];
                    if (isset($_POST['Plus'])) {
                        echo round($x + $y, 3);
                    }
                    elseif (isset($_POST['Min'])) {
                        echo round($x - $y, 3);
                    }
                    elseif (isset($_POST['Keer'])) {
                        echo round($x * $y, 3);
                    }
                    elseif (isset($_POST['Delen'])) {
                        echo round($x / $y, 3);
                    }
                    elseif (isset($_POST['Macht'])) {
                        echo round(pow($x, $y), 3);
                    }
                    else {
                        echo "Opdracht kan niet herkend worden. Kijk na of u alle velden goed heeft ingevuld.";
                    }
                }
                elseif(!empty($_POST['num1']) && empty($_POST['num2'])) {
                    $x = $_POST['num1'];
                    if (isset($_POST['Kwadraat'])) {
                        echo round($x * $x, 3);
                    }
                    elseif (isset($_POST['Wortel'])) {
                        echo round(sqrt($x), 3);
                    }
                    elseif (isset($_POST['Tafel'])) {
                        echo "1 * $x = " .(1 * $x). "<br>";
                        echo "2 * $x = " .(2 * $x). "<br>";
                        echo "3 * $x = " .(3 * $x). "<br>";
                        echo "4 * $x = " .(4 * $x). "<br>";
                        echo "5 * $x = " .(5 * $x). "<br>";
                        echo "6 * $x = " .(6 * $x). "<br>";
                        echo "7 * $x = " .(7 * $x). "<br>";
                        echo "8 * $x = " .(8 * $x). "<br>";
                        echo "9 * $x = " .(9 * $x). "<br>";
                        echo "10 * $x = " .(10 * $x);
                    }
                    else {
                        echo "Opdracht kan niet herkend worden. Kijk na of u alle velden goed heeft ingevuld.";
                    }
                }
                elseif(empty($_POST['num1']) && !empty($_POST['num2'])) {
                    $y = $_POST['num2'];
                    if (isset($_POST['Kwadraat'])) {
                        echo round($y * $y, 3);
                    }
                    elseif (isset($_POST['Wortel'])) {
                        echo round(sqrt($y), 3);
                    }
                    elseif (isset($_POST['Tafel'])) {
                        echo "1 * $y = " .(1 * $y). "<br>";
                        echo "2 * $y = " .(2 * $y). "<br>";
                        echo "3 * $y = " .(3 * $y). "<br>";
                        echo "4 * $y = " .(4 * $y). "<br>";
                        echo "5 * $y = " .(5 * $y). "<br>";
                        echo "6 * $y = " .(6 * $y). "<br>";
                        echo "7 * $y = " .(7 * $y). "<br>";
                        echo "8 * $y = " .(8 * $y). "<br>";
                        echo "9 * $y = " .(9 * $y). "<br>";
                        echo "10 * $y = " .(10 * $y);
                    }
                    else {
                        echo "Opdracht kan niet herkend worden. Kijk na of u alle velden goed heeft ingevuld.";
                    }
                }
                elseif(empty($_POST['num1']) && empty($_POST['num2'])) {
                    echo "Vul 1 van de velden in en kies een optie.";
                }
                else {
                    echo "Opdracht kan niet herkend worden. Kijk na of u alle velden goed heeft ingevuld.";
                }
            ?>
        </form>
    </body>
</html>