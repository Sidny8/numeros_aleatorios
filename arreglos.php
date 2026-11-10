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
        if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_POST["mayor"])){
            echo"<br>";
            $may1=0;
            $may2=0;
            $may3=0;
    for ($k = 1; $k <= 50; $k++) {
        if ($num[$k] > $may1) {
            $may3 = $may2;
            $may2 = $may1;
            $may1 = $num[$k];
            }elseif ($num[$k] > $may2) {
                $may3 = $may2;
                $may2 = $num[$k];
            }elseif ($num[$k] > $may3) {
            $may3 = $num[$k]; 
        }
    }
            echo "TOP 1: ".$may1."<br>";
            echo "TOP 2: ".$may2."<br>";
            echo "TOP 3: ".$may3;
        }
    ?>
     <form method = "POST" action ="">
        <br>
        <button type = "submit" name = "mayor" style="width: 100px">Ver top 3</button>
        <br><br>
    </form>
</body>
</html>