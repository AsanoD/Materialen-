<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Rekenmachine</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="num1">
            <input type="text" name="num2">
            <br>
            <select name='sommen' id='sommen'>
                <option>Niks</option>
                <option>Plus</option>
                <option>Min</option>
                <option>Keer</option>
                <option>Delen</option>
                <option>Kwadraat</option>
                <option>Macht</option>
                <option>Wortel</option>
                <option>Tafel</option>
            </select>
            <br>
            <button type="submit" name="submit" value="submit">Berekenen</button>
            <button type="reset" name="reset" value="reset">Clear</button>
        </form>
        <p>Het antwoord is: </p>
        <?php
           if (isset($_POST['submit'])) {
            $x = $_POST['num1'];
            $y = $_POST['num2'];
            $som = $_POST['sommen'];
            switch($som)
            {
                case 'Niks';        echo 'U moet iets kiezen';      break;

                case 'Plus';        echo round($x + $y, 3);         break;

                case 'Min';         echo round($x - $y, 3);         break;

                case 'Keer';        echo round($x * $y, 3);         break;

                case 'Delen';       echo round($x / $y, 3);         break;

                case 'Kwadraat';    echo round($x * $x, 3);         break;

                case 'Macht';       echo round(pow($x, $y), 3);     break;

                case 'Wortel';      echo round(sqrt($x), 3);        break;

                case 'Tafel';       echo "1 * $x = " .(1 * $x). "<br>";
                                    echo "2 * $x = " .(2 * $x). "<br>";
                                    echo "3 * $x = " .(3 * $x). "<br>";
                                    echo "4 * $x = " .(4 * $x). "<br>";
                                    echo "5 * $x = " .(5 * $x). "<br>";
                                    echo "6 * $x = " .(6 * $x). "<br>";
                                    echo "7 * $x = " .(7 * $x). "<br>";
                                    echo "8 * $x = " .(8 * $x). "<br>";
                                    echo "9 * $x = " .(9 * $x). "<br>";
                                    echo "10 * $x = " .(10 * $x);   break;
            }
        }
        ?>
    </body>
</html>