<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task session4</title>
</head>

<body>
    <?php
    // task 1 
    $i = 0;
    while ($i <= 10) {
        if ($i < 10) {
            echo $i . "-";
        } else {
            echo $i . "<br>";
        }
        $i++;
    }
    // task 2
    $numbers = [1, 1, 2, 1, 2, 3, 6, 7, 7, 4, 5, 5]; //  number = 2
    $filterSortNumbers = []; // 1  , 1 , 2 , 1 

    $i = 0;

    while ($i < count($numbers)) {
        $found = false;

        $j = 0;

        while ($j < count($filterSortNumbers)) {
            if ($filterSortNumbers[$j] == $numbers[$i]) {
                $found = true;
                break;
            }

            $j++;
        }

        if ($found == false) {
            $filterSortNumbers[] = $numbers[$i];
        }

        $i++;
    }
    // foreach ($numbers as $number) { // 2
    //     $found = false;
    //     foreach ($filterSortNumbers as $filterSortNumber) { // 
    //         if ($filterSortNumber == $number) { // number = 2 || 1 == 2 ? 1 == 2? 2==2 ? found = true || break 
    //             $found = true;
    //             break;
    //         }
    //     }
    //     if ($found == false) {
    //         $filterSortNumbers[] = $number;
    //     }
    // }
    sort($filterSortNumbers);
    // print_r($filterSortNumbers);

    // task 3 
    $text = 'erasoftrr';
    $count = 0;
    $i = 0;
    while ($i < strlen($text)) {
        if ($text[$i] == 'r') {
            $count++;
        }
        $i++;
    }
    $count . "<br>";
    // task 4
    $i = 0;
    while ($i <= 50) {

        if (($i % 3) == 0 && ($i % 5) == 0) {
            'FizzBuzz' . '<br>';
        } else if (($i % 5) == 0) {
            'Buzz' . '<br>';
        } else if (($i % 3) == 0) {
            'Fizz' . '<br>';
        } else {
            $i . "<br>";
        }
        $i++;
    }
    // task 5
    $i = 0;
    $sum = 0;
    for ($i = 0; $i <= 30; $i++) {
        $sum += $i;
    }
    echo $sum . "<br>";

    // task 6
    $fun_Numbers = [5, 15, -10, 100, 250, 0, 1];
    $largestNum = 0;
    $smallestNum = 0;
    function searchLargeNumber(array $nums, int $largestNum)
    {
        foreach ($nums as $num) {
            if ($num > $largestNum) {
                $largestNum = $num;
            }
        }
        return $largestNum;
    }

    echo searchLargeNumber($fun_Numbers, $largestNum) . "<br>";

    //  task 7 
    function searchsmallNumber(array $nums, int $largestNum)
    {
        foreach ($nums as $num) {
            if ($num < $largestNum) {
                $largestNum = $num;
            }
        }
        return $largestNum;
    }
    echo searchsmallNumber($fun_Numbers, $largestNum) . "<br>";
    // task 8
    $factorial = 1;
    for ($i = 1; $i <= 5; $i++) {
        $factorial *= $i;
    }
    echo $factorial;

    // task 9
    $i = 1;
    while ($i <= 15) {
        if ($i % 2 != 0) {
            echo $i . "<br>";
        }

        $i++;
    }
    // task 10
    $i = 1;
    while ($i <= 15) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }

        $i++;
    }
    // task 11
    $person = array(
        "name" => "John",
        "age" => 30,
        "city" => "New York"
    );
    foreach ($person as $key => $value) {
        echo $key . ' ' . $value . '<br>';
    }
    // task 12 
    $sales = [
        "Jan" => 100,
        "Feb" => 200,
        "Mar" => 150
    ];
    $sum = 0;
    foreach ($sales as $sale => $num) {
        $sum += $num;
    }
    echo $sum . "<br>";
    // task 13
    for ($i = 1; $i <= 10; $i++) {
        echo 8 . ' * ' . $i . ' = ' . (8 * $i) . '<br>';
    }
    // task 14
    $students = array(
        array("name" => "John", "age" => 20, "grade" => "A"),
        array("name" => "Mary", "age" => 22, "grade" => "B"),
        array("name" => "Tom", "age" => 18, "grade" => "A")
    );
    foreach ($students as $student) {
        foreach ($student as $key => $value) {
            echo $key . ' ' . $value . '<br>';
        }
    }
    // task 15
    $i = 1;
    do {
        if ($i % 3 == 0) {
            echo "This is a num: $i <br>";
        }

        $i++;
    } while ($i <= 100);
    ?>
</body>

</html>