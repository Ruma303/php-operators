<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live coding: php-operators</title>
</head>
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
        echo $var += 5, '<br>'; // 15
        echo $var -= 3, '<br>'; // 12
        echo $var *= 2, '<br>'; // 24
        echo $var /= 4, '<br>'; // 6
        echo $var **= 2, '<br>'; // 36
        echo $var %= 4, '<br>'; // 0
    ?>
    <hr>
    <h2>Operatori di Incremento/Decremento</h2>
    <?php
        $x = 1;
        echo ++$x, '<br>'; // 2
        echo $x++, '<br>'; // 2
        echo $x, '<br>'; // 3
        echo --$x, '<br>'; // 2
        echo $x--, '<br>'; // 2
        echo $x, '<br>'; // 1
    ?>
    <hr>
    <h2>Operatori di Confronto</h2>
    <?php
        echo 3 < 2,'<br>'; // false
        echo 5 > 3,'<br>'; // 1
        echo 10 <= 10,'<br>'; // 1
        echo 20 >= 2,'<br>'; // 1
        echo 3 == '3','<br>'; // 1
        echo "Ciao" <> "3",'<br>'; // 1
        echo false != false,'<br>';
        echo 3 === '3','<br>';
        echo 3 !== '3','<br>'; // 1
        echo 5 <=> 6,'<br>'; // -1
    ?>
    <hr>
    <h2>Operatori logici</h2>
    <?php
        echo $bool = true && false, '<br>'; // falso
        echo $bool = true and false, '<br>'; // vero
        echo $bool = false || true, '<br>'; // vero
        echo $bool = false or true, '<br>'; // true
        echo $bool = false xor true, '<br>'; // falso
        $x = 3; // true
        echo !$x, '<br>'; // falso
    ?>

    <hr>
    <h2>Operatore di fusione NULL</h2>
    <?php
        $x = NULL;
        $y = "Questa è Y";
        //$x = "Questa è X";
        echo $x ?? $y;
    ?>

    <hr>
    <h2>Precedenza degli operatori</h2>
    <?= 5 + 10 * 2 // Senza parentesi ?>
    <?= (5 + 10) * 2 // Con parentesi?>
</body>
</html>