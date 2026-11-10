<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
</head>
<body>
    <center>
    <h1>Numeros aleatorios</h1>
    <?php
        $num=[];
        for($k=1;$k<=50;$k++){
            $num[$k]=rand(0,100);
            if($k == 50){
                echo $num[$k].". ";
            }else{
                echo $num[$k].", ";
            }
        }
        echo "<br>";
    ?>
</body>
</html>