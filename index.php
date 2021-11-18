<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partida de futebol</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <style>
        body {
            text-align: center;
            font-size: 16px;
            background-image: url("futebol.jpg");
            background-attachment: fixed;
            background-repeat: no-repeat;
            padding: 0px 20px;
            color: white;
            font-family: "Noto Sans", Arial, sans-serif;
        }

        .wrapper {
            padding: 10px;
            margin: 6% 300px;
            background-color: white;
            color: black;
            border-radius: 10px;
        }

        input {
            padding: 5px;
            border: 5px solid black;
            font-size: 16px;
            border-radius: 5px;
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

        i {
            font-size: 40px;
        }

        a.link-site {
            color: grey;
        }

        @media (max-width: 425px) {
            .wrapper {
                margin: 10% auto;
            }
        }

        @media (min-width: 426px) and (max-width: 570px) {
            .wrapper {
                margin: 10% auto;
            }
        }

        @media (min-width: 571px) and (max-width: 768px) {
            .wrapper {
                margin: 10% auto;
            }
        }

        @media (min-width: 769px) and (max-width: 1024px) {
            .wrapper {
                margin: 10% auto;
            }
        }

        @media (min-width: 1025px) and (max-width: 1278px) {
            .wrapper {
                margin: 10% auto;
            }
        }
    </style>
</head>
<body>

        <div class="wrapper">
            <h1>Partida de futebol</h1>
            <form action="jogo.php" method="GET">
            <h2>Insira o 1° time</h2>
            <input type="text" name="time1" id="time1">
            <h2>Insira o 2° time</h2>
            <input type="text" name="time2" id="time2">
            <br>
            <button type="submit" onclick="verificaTime()">Jogar!</button>
            <br>
            <i class="fab fa-html5"></i>
            <i class="fab fa-css3-alt"></i>
            <i class="fab fa-js"></i>
            <i class="fab fa-php"></i>
            <p>Feito por <span><a class="link-site" href="https://gabrielsinformatica.github.io" target="_blank">Gabriel Informática</a></span></p>
            </form>
        </div>

        <script>
            function verificaTime() {
            var time1 = document.getElementById("time1").value
            var time2 = document.getElementById("time2").value

            if (time1 == "" || time2 == "") {
                document.write("Preencha os campos com os nomes dos times que irão se enfrentar!")
                window.location.href = "index.php"
            }
        }
        </script>
    
</body>
</html>