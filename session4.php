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

    foreach ($numbers as $number) { // 2
        $found = false;
        foreach ($filterSortNumbers as $filterSortNumber) { // 
            if ($filterSortNumber = $number) { // number = 2 || 1 == 2 ? 1 == 2? 2==2 ? found = true || break 
                $found = true;
                break;
            }
        }
        if ($found == false) {
            $filterSortNumbers[] = $number;
        }
    }
    sort($filterSortNumbers);

    // task 3 
    for ($i=0; $i < count($numbers) ; $i++) { 
        echo $i . "<br>";
    }

    ?>
</body>

</html>