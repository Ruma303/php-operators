<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live coding: php-operators</title>

<body>
    <h1 style="text-align: center">Operatori in PHP</h1>
    <h2>Operatori Aritmetici</h2>
    <?php
        echo 2 + 2 . '<br>'; // 4
        echo 8 - 3 . '<br>'; // 5
        echo 4 * 4 . '<br>'; // 16
        echo 25 / 5 . '<br>'; // 5
        echo 10 % 3 . '<br>'; // 1
        echo 3 ** 3 . '<br>'; // 27
    ?>
    <hr>
    <h2>Operatori di Stringhe</h2>
    <?php
        /* echo 'Stringa 1' . ' + ' . 'Stringa 2' . '<br>'; */
        $str1 = 'Stringa 1';
        echo $str1 . '<br>';
        $str1 .= ' + Stringa 2';
        echo $str1;
        // Entrambi: Stringa 1 + Stringa 2
    ?>
    <hr>
    <h2>Operatori di Assegnazione</h2>
    <?php
        $var = 10; // 10
        echo $var += 5; // 15
        echo $var -= 3; // 12
        echo $var *= 2; // 24
        echo $var /= 4; // 6
        echo $var **= 2; // 36
        echo $var %= 4; // 0
    ?>
    <hr>
    <h2>Operatori di Incremento/Decremento</h2>
    <?php
        $x = 1;
        echo ++$x; // 2
        echo $x++; // 2
        echo $x; // 3
        echo --$x; // 2
        echo $x--; // 2
        echo $x; // 1
    ?>
    <hr>
    <h2>Operatori di Confronto</h2>
    <?php
        echo 3 < 2;
        echo 5 > 3; // 1
        echo 10 <= 10; // 1
        echo 20 >= 2; // 1
        echo 3 == '3'; // 1
        echo "Ciao" <> "3"; // 1
        echo false != false;
        echo 3 === '3';
        echo 3 !== '3'; // 1
        echo 5 <=> 6; // -1
    ?>
    <hr>
    <h2>Operatori logici</h2>
    <?php
        echo $bool = true && false; // falso
        echo $bool = true and false; // vero
        echo $bool = false || true; // vero
        echo $bool = false or true; // vero
        echo $bool = false xor true; // falso
        $x = 3; // true
        echo !$x; // falso
    ?>

    <hr>
    <h2>Operatore di fusione NULL</h2>
    <?php
        $x = NULL;
        $y = "Ciao, Mondo!";
        $x = "Ciao a tutti";
        echo $x ?? $y;
    ?>
</body>
</html>