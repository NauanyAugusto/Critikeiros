<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8" />
    <title>ENTRAR - Critikeiros</title>
    <link rel="stylesheet" href="estilos/Estilo.css">
    <link rel="stylesheet" href="estilos/EstiloEntrar.css">
    <link rel="stylesheet" href="estilos/EstiloCadastro.css">

</head>
<body style="background-color:#E0E0DB">

    <?php
    require('header.php');
    ?>

    <div class="fundo2">
        <div class="caixaEntrar">
            <h2 id="entrarCad">Entrar</h2>
            <input type="text" id="usuario" placeholder="Usuário"/>
            <input type="password" id="senha" placeholder="Senha"/>
            <h4 class="esqueceuSenha"><a href="Entrar.php" class="esqueceuSenha">Esqueceu a senha?</a></h4>
            <button id="buttonEntrar">Entrar</button>
            <hr id="barraCadHor"/>

            <div class="opcoesSites">
                <h3 id="entreCom">OU ENTRE</h3>
                <div class="face">
                    <img src="img/face.png" id="faceImg"/>
                    <h4 id="comFace">com o Facebook</h4>
                </div>
                <div class="google">
                    <img src="img/google.png" id="googleImg"/>
                    <h4 id="comGoogle">com o Google</h4>
                </div>
                <div class="apple">
                    <img src="img/apple.jpg" id="appleImg"/>
                    <h4 id="comApple">com a Apple</h4>
                </div>
                <hr id="linhaverticalEntrar"> 
            </div>
            <div class="possuiConta">
                <h3 id="npossuiConta">Não Possui conta ?</h3>
               <a href="Cadastrar.php"> <button id="buttonCriar">Criar conta</button></a>
            </div>
        </div>
    </div>

</body>
</html>