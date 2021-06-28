<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8" />
    <title>SUA CRITICA - Critikeiros</title>
    <link rel="stylesheet" href="estilos/Estilo.css">
    <link rel="stylesheet" href="estilos/EstiloCritica.css">
    <script src="Estrela.js"></script>
</head>
<body style="background-color:black">

    <?php
    require('header.php');
    ?>
<form method="POST" action="ControladorCritica.php">
    <div>
        <h2 id="suaCrit">Sua crítica</h2>
        <img src="img/monsterhunter.jpg" class="imgCrit"/>
        <h2 class="titulo">Monster Hunter</h2>    

        <div class="genero" id="acao">Ação</div>
        <div class="genero" id="aventura">Aventura</div>
        <div class="genero" id="fantasia">Fantasia</div>
        <div class="genero" id="tempo">1h 12m</div>
        <h5 id="darNota">Dar nota: <button >+ Adicionar uma crítica</button> </h5>

        <label>
        <img class="estrela" id="estrela1"src="img/estrelavazia.png" onmouseover="estreEn1();" onmouseout="estreFo1();" onclick="estreCl1();">
        <img src="img/estrelavazia.png" class="estrela" id="estrela2" onmouseover="estreEn2();" onmouseout="estreFo2();" onclick="estreCl2();">
        <img src="img/estrelavazia.png" class="estrela" id="estrela3" onmouseover="estreEn3();" onmouseout="estreFo3();" onclick="estreCl3();">
        <img src="img/estrelavazia.png" class="estrela" id="estrela4" onmouseover="estreEn4();" onmouseout="estreFo4();" onclick="estreCl4();">
        <img src="img/estrelavazia.png" class="estrela" id="estrela5" onmouseover="estreEn5();" onmouseout="estreFo5();" onclick="estreCl5();">
        <input name="estrela">
        </label> 
        <textarea class="resenha"  placeholder="Escreva sua resenha... " name="resenha"></textarea>
        
    </div>

</forms>
</body>
</html>