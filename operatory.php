<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $liczby = array();
    while(count($liczby)<5) {
        $a = rand(1,20);
        array_push($liczby,$a);
    }
    //echo '<pre>';
//var_dump($liczby);
     foreach($liczby as $b ) {
             if ($b % 2 == 0) {
                 echo "liczba $b jest parzysta<br>";
             } else {
                 echo "liczba $b jest nieparzysta<br>";
             }
            }
            echo "<p>suma wszystkich liczb to ".array_sum($liczby)."</p>";
            //$c = array_sum($liczby) / 5;    
            echo "Średnia z liczb to ".array_sum($liczby)/count($liczby)."<p>";

            foreach($liczby as $d) {
                $e = $d + 41;
                $f = chr($e);
                echo "$f";
                //var_dump($f);
            }
    ?>
</body>
</html>