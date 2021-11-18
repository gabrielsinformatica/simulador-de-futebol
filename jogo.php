<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partida de futebol</title>
    <style>
        body {
            font-family: "Noto Sans", Arial, sans-serif;
            font-size: 3em;
            text-align: center;
            margin-top: 10%;
        }

        @media (min-width: 320px) and (max-width: 425px) {
            body {
                font-size: 1em;
            }
        }

        @media (max-width: 570px) {
            body {
                font-size: 2em;
            }
        }

        button {
            margin: 10px 0px;
            padding: 10px;
            font-size: 16px;
            color: white;
            background-color: black;
            border: 5px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

        <?php 
        $time1 = (string)$_GET["time1"];
        $time2 = (string)$_GET["time2"];

        $gol1 = rand(0,10);
        $gol2 = rand(0,10);

        echo "$time1 <strong>$gol1</strong> x <strong>$gol2</strong>
        $time2 <br>";

        if($gol1 > $gol2) {
            echo "$time1 ganhou!";
        } else if ($gol1 < $gol2) {
            echo "$time2 ganhou!";
        } else {
            echo "Empate!";
        }
        ?>

        <br>

        <a href="index.php"><button type="button">Voltar</button></a>
</body>
</html>