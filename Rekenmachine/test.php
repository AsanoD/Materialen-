<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Rekenmachine</title>
        <link id="pagestyle" rel="stylesheet" href="rekenmachine.css">
    </head>
    <body>
        <form method="post">
            <input type="text" name="variable" value="num1">
            <br>
            <input type="text" name="variable" value="num2">
            <br>
            <button type="submit" name="calculate" value="Plus" id="Plus" class="bor">+</button>
            <button type="submit" name="calculate" value="Min" id="Min" class="bor">-</button>
            <button type="submit" name="calculate" value="Keer" id="Keer" class="bor">*</button>
            <button type="submit" name="calculate" value="Delen" id="Delen" class="bor">/</button>
            <button type="submit" name="calculate" value="Kwadraat" id="Kwadraat" class="bor">x²</button>
            <button type="submit" name="calculate" value="Macht" id="Macht" class="bor">xy</button>
            <button type="submit" name="calculate" value="Wortel" id="Wortel" class="bor">√x</button>
            <button type="submit" name="calculate" value="Tafel" id="Tafel" class="bor">table</button>
            <br>
            <button type="reset" name="reset" value="reset" class="bclear">Clear</button>
            <p>Het antwoord is: </p>
            <br>
            <?php
                if (isset($_POST['calculate'])) {
                    $x = (!empty($_POST['num1']) ? (!empty($_POST['num1'])) : null);
                    $y = (!empty($_POST['num2']) ? (!empty($_POST['num2'])) : null);
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
                    elseif (isset($_POST['Kwadraat'])) {
                        echo round($x * $x, 3);
                    }
                    elseif (isset($_POST['Macht'])) {
                        echo round(pow($x, $y), 3);
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
                }
            ?>
        </form>
    </body>
</html>