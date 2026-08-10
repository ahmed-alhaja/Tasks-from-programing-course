<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>

<body>
    <?php
    $degree = 74;
    if ($degree >= 90) {
        echo  'ممتاز';
    } else if ($degree <= 89 && $degree >= 75) {
        echo  'جيد جدا';
    } else if ($degree < 75) {
        echo  'محتاج يتحسن' . '<br>';
    }
    ?>
    <?php
    // task 1
    $len = 5;
    $hei = 10;
    $wid = 30;
    $sum = $len + $hei;
    $result = $sum * $wid;
    echo $result . "<br>";
    // task 2
    $volume = $len * $hei * $wid;
    echo $volume . "<br>";
    // task 3
    $numOfHoures = 24;
    $numOfSec = $numOfHoures * 60 * 60;
    echo $numOfSec . "<br>";;

    ?>
    <?php
    // task 4
    $base = 15;
    $height = 30;
    $area = 0.5 * $base * $height;
    echo $area . "<br>";
    // task 5
    $ageYears = 25;
    $ageDay = $ageYears * 365;
    echo $ageDay . "<br>";
    // task 6
    $string = "EraaSoft Learn by practice";
    echo mb_strlen($string) . "<br>";
    // task 7
    echo str_replace(" ", "", $string) . "<br>";
    // task 8 
    echo str_word_count($string) . "<br>";
    // task 9 
    if (strpos($string, "by") !== false) {
        echo 'here' . "<br>";
    } else {
        echo 'not here' . "<br>";
    }
    // task 10
    $user = strstr($string, ' ', true);
    echo $user . '<br>';
    // task 11
    echo $string . "<br>";
    echo $updateString = str_replace("by", "", $string);

    //    task 12;
    $string_one = substr($string, 0, 4);
    $string_two = substr($string, 4, 4);

    $Full_string = $string_one . $string_two;

    echo $Full_string . "<br>";
    // task 13
    if ($Full_string == "EraaSoft") {
        echo "same";
    } else {
        echo "not same";
    }
    // task 14
    $string = "ErraSoft";

    echo substr($string, 0, 2) . "/";
    echo substr($string, 2, 2) . "/";
    echo substr($string, 4, 2) . "/";
    echo substr($string, 6, 2) . "<br>";
    // task 15
    $number = 10;
    if ($number % 2 == 0) {
        echo "زوجي" . "<br>";
    } else {
        echo "فردي" . "<br>";
    }
    // task 16
    $description = "nopain,nogain";
    if (mb_strlen($description) % 2 == 0) {
        echo "زوجي" . "<br>";
    } else {
        echo "فردي" . "<br>";
    }
    // task 17
    $description = "nopain,nogain";

    if (strpos($description, "gain") !== false) {
        echo "success word" . "<br>";
    } elseif (strpos($description, "peen") !== false) {
        echo "success word" . "<br>";
    } else {
        echo "wrong word" . "<br>";
    }
    // task 18
    $value = 1;

    if ($value == 1) {
        echo 0 . "<br>";
    } else {
        echo 1 . "<br>";
    }
    // task 19
    $word = "books";

    if (substr($word, -1) == "s") {
        echo "Plural" . "<br>";
    } else {
        echo "Singular" . "<br>";
    }
    // task 20
    $num1 = 10;
    $num2 = 3;
    $operation = "+";

    if ($operation == "+") {
        echo $num1 + $num2 . "<br>";
    } elseif ($operation == "-") {
        echo $num1 - $num2 . "<br>";
    } elseif ($operation == "*") {
        echo $num1 * $num2 . "<br>";
    } elseif ($operation == "/") {
        echo $num1 / $num2 . "<br>";
    } elseif ($operation == "**") {
        echo $num1 ** $num2 . "<br>";
    } elseif ($operation == "%") {
        echo $num1 % $num2 . "<br>";
    }
    ?>
</body>

</html>