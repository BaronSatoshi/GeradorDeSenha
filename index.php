<?php

$password = "";


if(isset($_POST['gerar'])){
    $caracteres = "abcdefghijklmnopqrstuvwyzABCDEFGHIJKLMNOPQRSTUVWYZ0123456789!@#$%^&*()_-=*=+~`\|{}[]/><";
    $caracteres = str_shuffle($caracteres);
    $password = substr($caracteres, 0,16);
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://use.fontawesome.com/3dfd196d26.js"></script>
    <title>Gerador de Senha Forte</title>
</head>
<body>
    <div class="container">
        <h2 class="title">Gerador de Senha Forte Randomica</h2>
        <form action="" method="POST">
            <div class="inputBox">
                <input type="text" value="<?php echo $password; ?>" placeholder="Clique para gerar uma senha" id="password" readonly>
                <button class="copyIcon" type="button" onclick="copyFunction()" ><i class="fa fa-clone"></i></button>
            </div>
            <div class="inputBox button">
                <button name="gerar" type="submit">Gerar Senha</button>
            </div>
        </form>
    </div>


    <script>
        //Função Copiar 
        function copyFunction(){
            var password = document.getElementById('password');
            password.select();
            password.setSelectionRange(0, 99999);
            document.execCommand("copy");
        }
    </script>
</body>
</html>