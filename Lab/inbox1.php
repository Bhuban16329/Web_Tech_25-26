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

// =====================
// Task 1: Simple Interest
// =====================

print "<h3>Task 1: Simple Interest</h3>";

$principal = 10000;
$rate = 5;
$time = 2;

$interest = ($principal * $rate * $time) / 100;

print "Principal = $principal <br>";
print "Rate = $rate <br>";
print "Time = $time <br>";
print "Simple Interest = $interest <br><br>";


// =====================
// Task 2: Prime Number
// =====================

print "<h3>Task 2: Prime Number</h3>";

$num = 17;
$flag = 0;

if($num <= 1)
{
    $flag = 1;
}
else
{
    for($i = 2; $i < $num; $i++)
    {
        if($num % $i == 0)
        {
            $flag = 1;
            break;
        }
    }
}

if($flag == 0)
{
    print "$num is a Prime Number";
}
else
{
    print "$num is Not a Prime Number";
}

print "<br><br>";


// =====================
// Task 3: Factorial
// =====================

print "<h3>Task 3: Factorial</h3>";

$num = 5;
$fact = 1;

for($i = 1; $i <= $num; $i++)
{
    $fact = $fact * $i;
}

print "Factorial of $num = $fact";

print "<br><br>";


// =====================
// Task 4: Sum and Average
// =====================

print "<h3>Task 4: Sum and Average of Array</h3>";

$arr = array(10,20,30,40,50);

$sum = 0;
$n = 5;

for($i = 0; $i < $n; $i++)
{
    $sum = $sum + $arr[$i];
}

$average = $sum / $n;

print "Sum = $sum <br>";
print "Average = $average";

print "<br><br>";


// =====================
// Task 5: Pattern
// =====================

print "<h3>Task 5: Pattern</h3>";

for($i = 1; $i <= 4; $i++)
{
    for($j = 1; $j <= $i; $j++)
    {
        print $i . " ";
    }

    print "<br>";
}

?>
</body>
</html>