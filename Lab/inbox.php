<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab Solution</title>
</head>
<body>

<h1>My First PHP Page</h1>

<?php

// 1. Area and Perimeter of Rectangle
$length = 3;
$width = 2;

$rectangle = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area of Rectangle = $rectangle <br>";
echo "Perimeter = $perimeter <br><br>";


// 2. VAT Calculation (15%)
$price = 500;
$vat = ($price * 15) / 100;

echo "Price = $price <br>";
echo "VAT (15%) = $vat <br><br>";


// 3. Even or Odd
$number = 10;

if ($number % 2 == 0)
{
    echo "$number is Even <br><br>";
}
else
{
    echo "$number is Odd <br><br>";
}


// 4. Largest Number
$numbers = array(10, 13, 9);

echo "Largest Number = " . max($numbers);
echo "<br><br>";


// 5. Count Odd Numbers from 1 to 100
$count = 0;

for($i = 1; $i <= 100; $i++)
{
    if($i % 2 != 0)
    {
        $count++;
    }
}

echo "Total Odd Numbers = $count <br><br>";


// 6. Search 13 in an Array
$arr = array(1,5,6,8,13,18,16);

for($i = 0; $i < count($arr); $i++)
{
    if($arr[$i] == 13)
    {
        echo "13 Found at Index $i <br>";
    }
}

echo "<br>";


// 7. Pattern 1
/*
*
* *
* * *
*/

for($i = 1; $i <= 3; $i++)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";


// 8. Pattern 2
/*
1 2 3
1 2
1
*/

for($i = 3; $i >= 1; $i--)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<br>";


// 9. Pattern 3
/*
A
B C
D E F
*/

$ch = 'A';

for($i = 1; $i <= 3; $i++)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}

?>

</body>
</html>