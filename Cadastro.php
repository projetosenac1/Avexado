<?php

     if(isset($_POST['submit'])){
    
        print_r('Nome: '. $_POST['nome']);
        print_r('<br>');
        print_r('email: '.$_POST['email']);
        print_r('<br>');
        print_r('telefone: '.$_POST['telefone']);
        print_r('<br>');

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nasc = $_POST['data_nasc'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, data_nasc, senha) VALUES ($nome, $email, $telefone, $data_nasc,$senha)");
    }

?>

<html>
    <head>
        <title>Cadastro</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style-cadastro.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <div class="tela-cadastro">
            <div class="cadastro">
                <div class="dados-cadastro">
                    <div class="img-logo">
                        <a href="home.html"><img src="https://i.imgur.com/4ATQqbX.png" alt="" class="logo"></a>
                    </div>
                    
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
                        <label for="email">Email:</label>
                            <br>
                        <input type="email" id="email" name="email">
                            <br>
                        <label for="telefone">Telefone:</label>
                            <br>
                        <input type="text" name="telefone" id="telefone">
                            <br>
                        <label for="data_nasc">Data de Nascimento</label>
                            <br>
                        <input type="date" name="data_nasc">
                            <br>
                        <label for="senha">Senha:</label>
                            <br>
                        <input type="password" id="senha" name="senha"><br>
                            <br>
                        <label for=""></label>

                        <button type="submit" name="submit" value="entrar" class="entrar">
                            Entrar
                        </button> 
                        
                    </form> 

                </div>
        
            </div>
                <div class="slide-cadastro">
                    <div class="slides">
                        <img src="https://i.imgur.com/5TJyQwR.png" alt="Paisagem 1">
                        <img src="https://i.imgur.com/7nlhIrD.png" alt="Paisagem 2">
                        <img src="https://i.imgur.com/aQbaoha.png" alt="Paisagem 3">
                    </div>
                </div>
                <script src="slidescript.js"></script>  
        </div>
    </body>
</html>