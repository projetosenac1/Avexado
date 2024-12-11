<?php

     if(isset($_POST['submit'])){
    
        //     print_r($_POST['nome']);
    //     print_r($_POST['email']);
    //     print_r($_POST['telefone']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $data_nasc = $_POST['data_nasc'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, senha, data_nasc) VALUES ($nome, $email, $telefone, $senha, $data_nasc)");
    }

?>

<html>
    <head>
        <title>Login</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style-login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <div class="tela-login">
            <div class="img-logo">
                <a href="home.html"><img src="https://i.imgur.com/4ATQqbX.png" alt="" class="logo-login"></a>
            </div>
            
            <div class="dados-login">
                
                <h2>
                    Bem Vindo de Volta!
                </h2>
                <p>
                    Por favor, coloque suas informações de login abaixo
                </p>

                <form action="Cadastro.php" method="POST" class="formulario">
                    <label for="name">Nome:</label>
                        <br>
                    <input type="text" name="nome" id="nome" placeholder="Nome">
                        <br>
                    <label for="fname">Email:</label>
                        <br>
                    <input type="email" id="fname" name="email">
                        <br>
                    <label for="">Telefone:</label>
                        <br>
                    <input type="text" name="telefone" id="tel">
                        <br>
                    <label for="data_nasc">Data de Nascimento</label>
                        <br>
                    <input type="date" name="data_nasc">
                        <br>
                    <label for="lname">Senha:</label>
                        <br>
                    <input type="password" id="lname" name="senha"><br>
                        <br>
                    <label for=""></label>

                    <input type="submit" name="submit" value="Login" class="entrar"> 
                    
                </form> 

            </div>

            <div class="slide-login">
                
                <div class="slide-1">

                </div>
            </div>

        </div>
        
    </body>
</html>