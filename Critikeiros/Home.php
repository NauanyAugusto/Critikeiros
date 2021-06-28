<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8" />
    <title>HOME - Critikeiros</title>
    <link rel="stylesheet" href="estilos/Estilo.css">
    <link rel="stylesheet" href="estilos/EstiloHome.css">

</head>
<body style="background-color:black">

    <?php
    require('header.php');
    ?>

    <div>
        <h2 class="recente">Recentes</h2>
        <img src="img/monsterhunter.jpg" class="imgRecente"/>
        <h2 class="titulo">Monster Hunter</h2>    

        <div class="genero" id="acao">Ação</div>
        <div class="genero" id="aventura">Aventura</div>
        <div class="genero" id="fantasia">Fantasia</div>
        <div class="genero" id="tempo">1h 12m</div>
    
        <p class="sinopse">
            Quando a tenente Artemis e seus soldados leais são <br/>
            transportados para um novo mundo, eles se envolvem em uma <br/>
            batalha desesperada pela sobrevivência contra inimigos <br/>
            enormes com poderes incríveis. Filme baseado no videogame <br/>
            da Capcom.e envolvem em uma batalha desesperada pela <br/> 
            sobrevivência contra inimigos enormes com poderes incríveis. <br/> 
            Filme baseado no videogame da Capcom. <br/> 
        </p>
        
        <img src="img/imdb.png" id="imdbImg"/>
        <h3 class="notaImdb">5.3 / 10</h3>
        <a href="SuaCritica.php"><button class="adicionar">+ Adicionar uma crítica</button></a>
        <img src="img/Rotten_Tomatoes.png" id="rottenImg"/>
        <h3 id="notaRotten">46%</h3>
        <div id="ck">CK</div>
        <img src="img/estrelacheia.png" class="estrela" id="estrela1">
        <img src="img/estrelacheia.png" class="estrela" id="estrela2">
        <img src="img/estrelacheia.png" class="estrela" id="estrela3">
        <img src="img/estrelavazia.png" class="estrela" id="estrela4">
        <img src="img/estrelavazia.png" class="estrela" id="estrela5">

        <p class="staff">
            Diretor: Paul W.S. Anderson<br/><br/>

            Roteiro: Paul W.S. AndersonKaname Fujioka<br/><br/>

            Estrelado: <br/>
                    Milla Jovovich<br/>
                    Ron Perlman<br/>
                    Tony Jaa <br/>      
                    Diego Boneta<br/>      
                    Meagan Good<br/>
        </p>
    </div>

         

</body>
</html>