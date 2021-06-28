<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8" />
    <title>CADASTRO - Critikeiros</title>
    <link rel="stylesheet" href="estilos/Estilo.css"> 
    <link rel="stylesheet" href="estilos/EstiloCadastro.css">  

</head>
<body style="background-color:#E0E0DB">

    <?php
    session_start();
    require('header.php');
    if($_SESSION['aviso']){
        echo $_SESSION['aviso'];
        $_SESSION['aviso'] = '';
    
    }
    ?>

    <div class="fundo2">
        <form method="POST" action="Controlador.php">
            <div class="caixaCadastro">
                
                <h2>Criar conta</h2>

                <label>
                <h3>Nome de  usuário</h3>
                <input type="text" name="usuario"/>
                </label>

                <label>
                <h3>Nome de  completo</h3>
                <input type="text" name="nome"/> 
                </label>

                <label>
                <h3>E-mail</h3>
                <input type="email" name="email"/> 
                </label>
                
                <label>
                <h3>Senha</h3>
                <input type="password" placeholder="Pelo menos 8 digitos" class="cadastro" name="senha"/>        
                </label>

                <label>
                <h3>Digite a senha novamente</h3>
                <input type="password" name="repeticao"/>
                </label>

                <button id="buttonCadastro" type="submit">Criar sua conta</button>
                <hr id="linhavertical"> 
            </div>
    </form>

        <h3 id="japossui">Já possui conta? <a href="Entrar.php" >ENTRE</a></h3>
        
    </div>
         

</body>
</html>