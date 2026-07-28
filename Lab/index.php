<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My First PHP Page</h1>
    
    <?php
        $length = 3;
        $width = 2;
        $Rectangle = $length*$width;
        $Perimeter = 2*($length+$width);
        echo "Rectangle = $Rectangle <br>";
        echo "Perimeter = $Perimeter <br>";

        $price = 500;
        $vat = (15*500)/100;
        echo "vat = $vat <br>";
        $number = 10;
        if ($number % 2 == 0) {
            echo "$number is Even <br>";
        } else {
            echo "$number is Odd <br>";
        }
        $number = [10,13,9];
        echo max($number);
        echo "<br>";
        $count=0;
        for ($i =1; $i <=100 ; $i++)
            {
                if($i%2!==0){
                    $count ++;
                }
            }
        echo "Total Odd Number = $count <br>";

        $arr =[1,5,6,8,13,18,16];
        for($i = 0; $i < count($arr); $i++)
            {
                if($arr[$i]===13)
                    {
                        echo "13 Found in index $i<br>";
                    }
            }

        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
        for ($i = 3; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j . " ";
            }
            echo "<br>";
        }  
        $ch = 'A';
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $ch . " ";
                $ch++;
            }
            echo "<br>";
        }

    ?>    
</body>
</html>