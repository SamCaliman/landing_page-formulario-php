<?php
    if(isset($_POST{'submit'})){
        //print_r($_POST['nome']);
        //print_r($_POST['email']);
        //print_r($_POST['telefone']);
        //print_r($_POST['mensagem']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];
        //Realiza um query para enviar ao banco de dados as informações pelas variáveis em ordem
        $result = mysqli_query($conexao, "INSERT INTO usuariocontato(nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAESA - Landing Page</title>
    <link rel="stylesheet" href="style_formul.css">
</head>
<body>
    <header class="navbar">
        <div class="container">
            <a href="index.html">
                <img class="logo" src="images/logofaesa.png" alt="logo" id="logo">
                </a>
            <h1 id="titulo">FAESA</h1>
        </div>

         <div class="container">
            <nav>
                <ul class="nav__links">
                     <li><a class="cadastro" href="index.html">Início</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Entre em contato</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label class="labelInput" for="nome">Nome completo</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label class="labelInput" for="email">E-mail</label>
                </div>
                <br>
                <div class="inputbox">
                    <!--phoneNumberFormatter() é uma função definida no Javascript para formatar o número de telefone-->
                    <input oninput="phoneNumberFormatter()" type="tel" name="telefone" id="telefone" pattern="\([0-9]{2}\) [9]{1}[0-9]{4}-[0-9]{4}" class="inputUser" required>
                    <label class="labelInput" for="telefone">Telefone</label>
                </div> 
                <br>
                <div class="inputbox">
                    <input type="text" name="mensagem" id="mensagem" class="inputUser" minlength="9"  required>
                    <label class="labelInput" for="mensagem">Mensagem</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>