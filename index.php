<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo("OK");
}


?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Jeu</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">

        <style>
            html{
                text-align: center;
            }
        </style>

    </head>
    <body>
        
        
        <h1>Bonjour</h1>
            <form>
        <input placeholder="Pseudo" id="input" maxlength="15" />

        <button onclick="submit()" type="submit" id="submitBtn">Commencer</button>
        </form>
        <script>

            var button = document.getElementById("submitBtn");
            var input = document.getElementById("input");

            function submit(){
                alert(input.value);
            }

        </script>


    </body>
</html>

