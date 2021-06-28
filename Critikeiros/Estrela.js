var clique1 ="falso";
var clique2 ="falso";
var clique3 ="falso";
var clique4 ="falso";
var clique5 ="falso";


function estreEn1(){
    document.getElementById("estrela1").src="img/estrelacheia.png";      
}
function estreFo1(){
    if(clique1=="falso"){
    document.getElementById("estrela1").src="img/estrelavazia.png";
    }

}
function estreCl1(){
    if(clique1=="verdadeiro")
    document.getElementById("estrela1").src="img/estrelavazia.png";
    else{
    document.getElementById("estrela1").src="img/estrelacheia.png";
    clique1 = "verdadeiro";        
    }
}
function estreEn2(){
    document.getElementById("estrela2").src="img/estrelacheia.png";
    document.getElementById("estrela1").src="img/estrelacheia.png";   
}
function estreFo2(){
    if(clique2=="falso"){
    document.getElementById("estrela2").src="img/estrelavazia.png";
    document.getElementById("estrela1").src="img/estrelavazia.png";
    }
}
function estreCl2(){
    if(clique2=="verdadeiro"){
    document.getElementById("estrela2").src="img/estrelavazia.png";    
    }
    else{
    document.getElementById("estrela2").src="img/estrelacheia.png";
    clique2 = "verdadeiro";        
    }
}
function estreEn3(){
    document.getElementById("estrela3").src="img/estrelacheia.png";
    document.getElementById("estrela2").src="img/estrelacheia.png";
    document.getElementById("estrela1").src="img/estrelacheia.png";   
}
function estreFo3(){
    if(clique3=="falso"){
    document.getElementById("estrela3").src="img/estrelavazia.png";       
    document.getElementById("estrela2").src="img/estrelavazia.png";
    document.getElementById("estrela1").src="img/estrelavazia.png";
    }
}
function estreCl3(){
    if(clique3=="verdadeiro"){
    document.getElementById("estrela3").src="img/estrelavazia.png";      
    }
    else{
    document.getElementById("estrela3").src="img/estrelacheia.png";
    clique3 = "verdadeiro";        
    }
}
function estreEn4(){
    document.getElementById("estrela4").src="img/estrelacheia.png";
    document.getElementById("estrela3").src="img/estrelacheia.png";
    document.getElementById("estrela2").src="img/estrelacheia.png";
    document.getElementById("estrela1").src="img/estrelacheia.png";   
}
function estreFo4(){
    if(clique4=="falso"){
    document.getElementById("estrela4").src="img/estrelavazia.png";  
    document.getElementById("estrela3").src="img/estrelavazia.png";       
    document.getElementById("estrela2").src="img/estrelavazia.png";
    document.getElementById("estrela1").src="img/estrelavazia.png";
    }
}
function estreCl4(){
    if(clique4=="verdadeiro"){
    document.getElementById("estrela4").src="img/estrelavazia.png";  
    }
    else{
    document.getElementById("estrela4").src="img/estrelacheia.png";
    clique4 = "verdadeiro";        
    }
}
function estreEn5(){
    document.getElementById("estrela5").src="img/estrelacheia.png";
    document.getElementById("estrela4").src="img/estrelacheia.png";
    document.getElementById("estrela3").src="img/estrelacheia.png";
    document.getElementById("estrela2").src="img/estrelacheia.png";
    document.getElementById("estrela1").src="img/estrelacheia.png";   
}
function estreFo5(){
    if(clique5=="falso"){
    document.getElementById("estrela5").src="img/estrelavazia.png";  
    document.getElementById("estrela4").src="img/estrelavazia.png";  
    document.getElementById("estrela3").src="img/estrelavazia.png";       
    document.getElementById("estrela2").src="img/estrelavazia.png";
    document.getElementById("estrela1").src="img/estrelavazia.png";
    }
}
function estreCl5(){
    if(clique5=="verdadeiro"){
    document.getElementById("estrela5").src="img/estrelavazia.png";       
    }
    else{
    document.getElementById("estrela5").src="img/estrelacheia.png";
    clique5 = "verdadeiro";        
    }
}
