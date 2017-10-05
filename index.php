<?php
    $name = 'Liam De Kegel';

    $string1 = 'Hello';
    $string2 = 'World';

    $x = 7;
    $y = 10;

    $watIs ='stirng';

    $age = 21;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?= $name ?></h1>

    <p><?= $string1 ." ". $string2 ?></p>

    <div class= "Wiskunde">
        <?= $y ." + ". $x ." = ". ($x + $y) ?> </br>
        <?= $y ." - ". $x ." = ". ($y - $x) ?> </br>
        <?= $y ." * ". $x ." = ". ($x * $y) ?> </br>
        <?= $y ." / ". $x ." = ". ($y / $x) ?> </br>
        <?= $y ." % ". $x ." = ". ($y % $x) ?>
    </div>

    <div class = "StringTypes">
        <p>
        De Waarde is <?= gettype($watIs) ?>
        </p>
    </div>

    <div>
        <?php
        if( $age < 16) {
            echo $age ." Is te jong voor deze film.";
        } 
        elseif( $age >= 16 && $age <= 18) {
            echo $age ." Je hebt ouderlijk toezicht nodig.";
        }
        else {
            echo "Je bent reeds ".$age.". Geniet van de film";
        }
        
        ?>
    </div>
</body>
</html>