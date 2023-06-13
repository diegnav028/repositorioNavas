<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combate</title>

    <style>
   @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
            
            * { box-sizing: border-box;
                margin: 0;
                font-family: Lato;
            }
.todo{
    height: 100vh;
    width: 100% ;
    display: inline-block;
    flex-wrap: wrap;
  
}
.arriba{
    height: 10%;
    border: solid 1px black;
    background-image: url(imagenes/images.jpg);
    display: flex;
    flex-wrap: wrap;
    background-repeat: repeat;
  
}
.campo{
    height: 80%;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    border: solid 1px black;
    background-image: url(imagenes/fondonave2.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: bottom;
}
.abajo{
    height: 10%;
    border: solid 1px black;
    background-image: url(imagenes/images.jpg);

    margin: 0;
    box-sizing: border-box;
 
}
#boton-turno {
    width: 250px;
  height: 100px;
  border-radius: 35%;
  color: blue;
  font-weight: bolder;
                text-align: center;
                background-color: lightcyan;
                border: 2px solid blue;
                text-decoration: none;
                border-image-outset: none;
                cursor: pointer;
                font-size: large;
}
#boton-turno:hover {
    color: white;
                background-color: blue;
                border: 2px solid blue;
                cursor: pointer;
}
#boton-turno:disabled{

                background-color: gray;
            
          
}
#boton-turno:disabled:hover{
                  color: blue;
            }
.estadistica{
    width: 42% ;
        display: flex;
    justify-content: center;
    
}
.boton-turno{
    width: 25% ;
}
.salir{
    width: 33% ;
    display: flex;
    flex-wrap: wrap;
}
.cementerio{
    background-image: url(imagenes/cementerio.jpg);
    width: 120px;
    height: 150px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: bottom;
    position: absolute;
    bottom: 0;
    left: 0;
}
.cementerio:hover{
    cursor: pointer;
}

#escudo-turno{
    width: 100px;
    background-image: url(imagenes/escudo.png);
    height: 120px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: bottom;
    position: absolute;
    bottom: 0;
    left: 28vw;
}

.mano{
    width: 200px;
    background-image: url(imagenes/mano.png);
    height:200px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: bottom;
    position: absolute;
    bottom: 0;
    left: 45vw;
}
.mano:hover{
    cursor: pointer;
}
#vida-abajo{
    width: 100px;
    background-image: url(imagenes/corazon.png);
    height: 120px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: bottom;
    position: absolute;
    bottom: 0;
    left: 67vw;
}
.baraja{
    background-image: url(imagenes/baraja2.png);
    width: 150px;
    height: 180px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: bottom;
    position: absolute;
    bottom: 0;
    right: 0;
}
.baraja:hover{
    cursor: pointer;
}
.logo{
                width: 40%;
                height: 80%;
                      background-image:url(imagenes/logo.png);
           background-repeat: no-repeat;
           background-size: contain;
           background-position: center;
}
.salir-inicio{
    width: 60%;
}
.salir-inicio button{
    width: 80%;
  height: 50%;

  color: blue;
  font-weight: bolder;
                text-align: center;
                background-color: lightcyan;
                border: 2px solid blue;
                text-decoration: none;
                border-image-outset: none;
                cursor: pointer;
                font-size: large;
}
.salir-inicio button:hover {
    color: white;
                background-color: blue;
                border: 2px solid blue;
                cursor: pointer;
}
.salir-inicio button:disabled{

                background-color: gray;
            
          
}
.salir-inicio button:disabled:hover{
                  color: blue;
            }

 .izquierda{
                width: 40%;
    height: 100%;
    display: flex;
    justify-content: right;
    align-items: flex-end;
            }

.medio{
    width: 20%;
    height: 100%;
    display: flex;

    align-items: flex-start;
}
.derecha{
    width: 40%;
    height: 100%;
 display: flex;
    align-items: flex-end;
}

#enemigo1{
    width: 200px;
    height: 200px;
    
   display: flex;
   flex-wrap: wrap;
   justify-content: center;
    position: absolute;
    right: 28vw;
    bottom: 22vh;
}
#vida1{
    width: 50%;
  text-align: center;
    height: 15%;

 
}
#vida-enemigo1{
    color: red;
    font-weight: bold;
    font-size: 20px;
}
#monigote1{
    margin-top: 5%;
    height: 80%;
    width: 100%;

    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
}
#monigote1:hover{
      cursor: pointer;
}
#enemigo2{
    width: 200px;
    height: 200px;
       
    display: flex;
   flex-wrap: wrap;
   justify-content: center;
    position: absolute;
    right: 10vw;
    bottom: 15vh;
}
#vida2{
    width: 50%;
  text-align: center;
    height: 15%;

 
}
#vida-enemigo2{
    color: red;
    font-weight: bold;
    font-size: 20px;
}
#monigote2{
    margin-top: 5%;
    height: 80%;
    width: 100%;

    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
}
#monigote2:hover{
      cursor: pointer;
}
#enemigo3{
    width: 200px;
    height: 200px;
    display: flex;
   flex-wrap: wrap;
   justify-content: center;
    position: absolute;
    right: 18vw;
    bottom: 35vh;
}
#vida3{
    width: 50%;
  text-align: center;
    height: 15%;

 
}
#vida-enemigo3{
    color: red;
    font-weight: bold;
    font-size: 20px;
}
#monigote3{
    margin-top: 5%;
    height: 80%;
    width: 100%;

    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
}
#monigote3:hover{
      cursor: pointer;
}








.atacante{
margin-top: 10vh;
    width: 100%;
    height: 25%;
 
    color: black;
    font-weight: bold;
background-color: rgba(180, 180, 180,0.4);
}

.personaje{
    width: 60%;
    height: 30%;
    margin-bottom: 5vh;
}
.monigote{
    background-image: url(imagenes/personaje-animacion.png);
    width: 200px;
    height: 130px;
background-position: center;
    animation: animarDino 0.8s steps(3) infinite;
}
.modal {
  display: none; /* Por defecto, estará oculto */
  position: fixed; /* Posición fija */
  z-index: 1; /* Se situará por encima de otros elementos de la página*/
  /* El contenido estará situado a 200px de la parte superior */
  left: 0;
  top: 0;
  width: 100%; /* Ancho completo */
  height: 100%; /* Algura completa */
  overflow: auto; /* Se activará el scroll si es necesario */
  background-color: rgba(0,0,0,0.5); /* Color negro con opacidad del 50% */
}

.modal-content {
   width: 100%;
  -webkit-animation-name: animarsuperior;
  -webkit-animation-duration: 0.5s;
  animation-name: animarsuperior;
  animation-duration: 0.5s;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}
@keyframes animarsuperior {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

.close {
  color: black;
  float: right;
  font-size: 30px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}





@keyframes animarDino{
    from{
        background-position-x: 0px;
        width: 100px;
    height: 131px;
    }
    50%{

        width: 100px;
    height: 131px;
    }

    
    to{
        background-position-x: -300px;
        width: 100px;
    height: 131px;
    }

}

#mostrar-vida{
    color: green;
    font-weight: bold;
    font-size: 15px;
     margin-top: 60%;
    text-align: center;
}
#mostrar-mana{
    margin-top: 40%;
    text-align: center;
}
#mostrar-escudo{
    color: black;
    font-weight: bold;
    font-size: 15px;
     margin-top: 60%;
    text-align: center;
}

.manacristal{
    width: 100px;
    background-image: url(imagenes/mana.png);
    height: 100%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: bottom;
  
    font-weight: bolder;
    font-size: 20px;
}

.tienda-borde{
                     height: 70vh;
                 width: 20%;
                    display: inline-block;
                   flex-wrap: wrap;
      
                   margin-left: 2%;
                   margin-right: 2%;
           
                margin-top: 5vh;
            }
            .vendido-borde{
                            height: 60vh;
                 width: 100%;
                  display: inline-block;
                   flex-wrap: wrap;
                  background-color: white;
               
            }
            .borde-mejoras{
                    height: 60vh;
                 width: 100%;
                  display: inline-block;
                   flex-wrap: wrap;
                  background-color: white;
               
                border: solid 5px green;
            }
            .bordetienda-melee{
                   height: 60vh;
                 width: 100%;
                  display: inline-block;
                   flex-wrap: wrap;
                  background-color: white;
               
                border: solid 5px red;
                
            }
            .bordetienda-gun{
                       height: 60vh;
                 width: 100%;
                  display: inline-block;
                   flex-wrap: wrap;
                  background-color: white;
                         border: solid 5px black;
            }
            .bordetienda-psi{
              height: 60vh;
                 width: 100%;
                  display: inline-block;
                   flex-wrap: wrap;
                  background-color: white;
                     border: solid 5px blue;
                  
            }
            .bordetienda-cyber{
                height: 60vh;
                 width: 100%;
                  display: inline-block;
                   flex-wrap: wrap;
                  background-color: white;
                    border: solid 5px gold;
            }
            .borde-melee{
                height: 60vh;
                 width: 20%;
                  display: inline-block;
                   flex-wrap: wrap;
                  background-color: white;
                   margin-left: 2%;
                   margin-right: 2%;
                border: solid 5px red;
                margin-top: 5vh;
            }
            .borde-gun{
                 height: 60vh;
                 width: 20%;
              display: inline-block;
                   flex-wrap: wrap;
                   background-color: white;
                   margin-left: 2%;
                   margin-right: 2%;
                border: solid 5px black;
                 margin-top: 5vh;
            }
            .borde-psi{
                 height: 60vh;
                 width: 20%;
                   display: inline-block;
                   flex-wrap: wrap;
                   background-color: white;
                   margin-left: 2%;
                   margin-right: 2%;
                border: solid 5px blue;
                 margin-top: 5vh;
            }
            .borde-cyber{
            height: 60vh;
                 width: 20%;
                 display: inline-block;
                   flex-wrap: wrap;
                   background-color: white;
                   margin-left: 2%;
                   margin-right: 2%;
                border: solid 5px gold;
                 margin-top: 5vh;
            }
            
            .datos-cabeza{
                width: 100%;
                  height: 10%;
                 display: flex;
          text-align: center;
           font-size: 15px;
       color: orangered;
       font-weight: bold;
                background-color: lightskyblue;
                border-collapse: collapse;
                border-bottom:  1px solid white;
                 font-weight: bold;
            }
            .foto-carta{
                 width: 100%;
                  height: 40%;
                   background-repeat: no-repeat;
           
           background-size: cover;
           background-position: center;
 
                 
            }
            .vendido-foto{
                                    width: 100%;
                  height: 100%;
                   background-repeat: no-repeat;
           background-image: url(imagenes/agotado.jpg);
           background-size: cover;
           background-position: center;
            }
            .foto-mejora{
                             width: 100%;
                  height: 80%;
                   background-repeat: no-repeat;
           
           background-size: cover;
           background-position: center;
            }
            .familias{
                       width: 100%;
                  height: 15%;
             text-align: center;
       font-weight: bold;
               background-color: black;
               color: white;
                   border-top: 1px solid white;
                       font-size: 15px;
            }
            .descripcion{
                padding-top: 5px;
                          width: 100%;
                  height: 25%;
          text-align: center;
        border-top: 1px solid white;
    background-color: black;
               color: white;
                       font-size: 15px;
            }
            .descripcion-mejora{
                               padding-top: 5px;
                          width: 100%;
                  height: 20%;
          text-align: center;
        border-top: 1px solid white;
    background-color: black;
               color: white;
           font-size: 2.2vh;
            }
            .ataque{
                  width: 100%;
                  height: 10%;
                 display: flex;
               text-align: center;
         border-top: 1px solid white;
                   background-color: lightgreen;
                    font-weight: bold;
            }
            #rareza{
                         background-repeat: no-repeat;
             background-image:url('imagenes/rareza.png');
           background-size: contain;
           background-position: center;
           align-items: center;
           
         width:20%;
            }
            #rareza p{
        
                         font-weight: bold;
                         font-size: 4vh;
            }
            #nombre-carta{
                       width:60%;
            }
            #mana{
                       width:20%;
                                         background-repeat: no-repeat;
             background-image:url('imagenes/mana.png');
           background-size: contain;
           background-position: center;
           align-items: center;
            }
            #mana p{
                 font-weight: bold;
                        font-size: 4vh;
            }
            
            #turnos {
                                       width:20%;
                                         background-repeat: no-repeat;
             background-image:url('imagenes/turnos.png');
           background-size: contain;
           background-position: center;
           align-items: center;
            }
            #turnos p{
                 font-weight: bold;
                         font-size: 4vh;
                          color: white;
            }
            #tipo{
                    width:60%; 
                      font-size: 2.5vh;
            }
            #ataque{
                                                 width:20%;
                                         background-repeat: no-repeat;
             background-image:url('imagenes/ataque.png');
           background-size: contain;
           background-position: center;
           align-items: center;
           
       font-weight: bold;
            }
            #ataque p{
                 font-weight: bold;
                       font-size: 4vh;
            }
          
            
                        .atras{
                height: 100%;
           
            }
            .atras button {
                margin-top: 60%;
    width: 250px;
  height: 100px;
  border-radius: 35%;
  color: blue;
  font-weight: bolder;
                text-align: center;
                background-color: lightcyan;
                border: 2px solid blue;
                text-decoration: none;
                border-image-outset: none;
                cursor: pointer;
                font-size: large;
}
.atras button:hover {
    color: white;
                background-color: blue;
                border: 2px solid blue;
                cursor: pointer;
}
.atras button:disabled{

                background-color: gray;
            
          
}
.atras button:disabled:hover{
                  color: blue;
            }
            .alante{
                height: 100%;

            }
            .alante button {
                margin-top: 60%;
    width: 250px;
  height: 100px;
  border-radius: 35%;
  color: blue;
  font-weight: bolder;
                text-align: center;
                background-color: lightcyan;
                border: 2px solid blue;
                text-decoration: none;
                border-image-outset: none;
                cursor: pointer;
                font-size: large;
}
.alante button:hover {
    color: white;
                background-color: blue;
                border: 2px solid blue;
                cursor: pointer;
}
.alante button:disabled{

                background-color: gray;
            
          
}
.alante button:disabled:hover{
                  color: blue;
            }
            
            
      .usar{
    width: 100%;
    text-align: center;
}
.usar button {
             
    width: 100px;

  
  color: blue;
  font-weight: bolder;
                text-align: center;
                background-color: lightcyan;
                border: 2px solid blue;
                text-decoration: none;
                border-image-outset: none;
                cursor: pointer;
                font-size: large;
}
.usar button:hover {
    color: white;
                background-color: blue;
                border: 2px solid blue;
                cursor: pointer;
}
.usar button:disabled{

                background-color: gray;
            
          
}
.usar button:disabled:hover{
                  color: blue;
            }


      
            
            
            
            
            



 @media (max-width: 700px){
                #boton-turno{
                    width: 100%;
                }
                .cementerio{
   
    width: 100px;
    height: 100px;

}
#escudo-turno{
    width: 60px;

    height: 80px;
 
    left: 23vw;
}
.mano{
    width: 100px;

    height:100px;
 
    left: 40vw;
}
#vida-abajo{
    width: 60px;

    height: 80px;
  
    left: 65vw;
}
.baraja{

    width: 70px;
    height: 100px;
   
}

.izquierda{

    justify-content: left;

            }

            .atacante{

height: 30%;

}         


#enemigo1{
    width: 100px;
    height: 100px;
}
#enemigo2{
    width: 100px;
    height: 100px;
}
#enemigo3{
    width: 100px;
    height: 100px;
    right: 12vw;
    bottom: 30vh;
}
.monigote{
   
    width: 100px;
    height: 100px;

}
#atacante{
          width: 180px;
}
#mensaje-turno{
        width: 180px;
}
 .atras button {

    width: 100px;
  height: 70px;
 
}
.alante button {

    width: 100px;
  height: 70px;

  
}
.atras {
    padding-top: 50%;
}
.alante{
     padding-top: 50%;
}   


   .borde-melee{
    
                 width: 40%;
         
            }
            .borde-gun{
  
                 width: 40%;
        
            }
            .borde-psi{
        
                 width: 40%;
                 
            }
            .borde-cyber{
          
                 width: 40%;
              
            }
                  .descripcion{
             
                       font-size: 10px;
            }
            



            }




    </style>
 
</head>
<body>
   <div class="todo">
   
<div class="arriba">


<div class="estadistica">

<div class="manacristal">
    <p id="mostrar-mana"></p>
</div>


</div>
<div class="boton-turno">
<button id="boton-turno" onclick="pasarTurno()">Pasar turno</button>

</div>
<div class="salir">
<div class="logo">

</div>

<div class="salir-inicio">
    <button onclick="irInicio()">Inicio</button>
</div>

</div>

</div>

<div class="campo">
<div class="izquierda">

<div class="personaje">
<div class="monigote">


</div>



</div>

</div>
<div class="medio">

 
<div id="atacante" class="atacante">
<p id="mensaje-turno"></p>
</div>

</div>

<div class="derecha">
<div class="enemigo" id="enemigo1">
 <div class="vida-enemigo" id="vida1">
 <p id="vida-enemigo1"></p>
 </div>
<div id="monigote1" style="background-image: url(imagenes/<?=$enemigo1->getFoto() ?>)">

</div>

</div>
<div class="enemigo" id="enemigo2">
 <div class="vida-enemigo" id="vida2">
    <p id="vida-enemigo2"></p>
 </div>
<div id="monigote2" style="background-image: url(imagenes/<?=$enemigo1->getFoto() ?>)">
    
</div>
</div>
<div class="enemigo" id="enemigo3">
    <div class="vida-enemigo" id="vida3">
        <p id="vida-enemigo3"></p>
    </div>
   <div id="monigote3" style="background-image: url(imagenes/<?=$enemigo1->getFoto() ?>)">
       
   </div>
</div>


</div>


</div>



<div class="abajo">

    <div class="cementerio" id="cementerio">

    </div>

    <div id="escudo-turno">
        <p id="mostrar-escudo"></p>
    </div>




<div class="mano" id="mano">


</div>

    <div id="vida-abajo">
<p id="mostrar-vida"></p>


    </div>





<div class="baraja" id="baraja">

</div>



</div>






   </div>
    


   <div id="ventanaModal" class="modal">
    <div class="modal-content">
           <div class="atras"><button id="atrasm" onclick="atrasm()">←</button></div>
        <div class="borde-melee" id="bordem">
            <div class="datos-cabeza">
                <div id="rareza">
                 
                    <p id="rareza-textom"></p>
                </div>
                <div id="nombre-carta">
                    <p id="nombre-textom"></p>
                </div>
                <div id="mana">
                    <p id="mana-textom"></p>
                </div>
            </div>
            <div class='foto-carta' id="fotom" >
             
                </div>
            <div class="familias">
                   <p id="claves-textom"></p>
                    <p id="familia-textom"></p>      
             
            
             
            </div>
            <div class="descripcion">
                <p id="descripcion-textom"></p>
            </div>
            <div class="ataque">
                <div id="turnos">
                    <p id="turnos-textom"></p>
                </div>
                <div id="tipo">
                    <p id="tipo-textom"></p>
                </div>
                <div id="ataque">
                    <p id="ataque-textom"></p>
                </div>
            </div>
      </div>
      <div class="alante"><button id="alantem" onclick="alantem()">→</button></div>
               <div class="usar" >
        <button id="jugar" onclick="jugarCarta()">Jugar Carta</button>
      </div>
    </div>
  </div>
  <div id="ventanaModalCementerio" class="modal">
    <div class="modal-content">
       <div class="atras"><button id="atrasc" onclick="atrasc()">←</button></div>
        <div class="borde-melee" id="bordec">
            <div class="datos-cabeza">
                <div id="rareza">
                 
                    <p id="rareza-textoc"></p>
                </div>
                <div id="nombre-carta">
                    <p id="nombre-textoc"></p>
                </div>
                <div id="mana">
                    <p id="mana-textoc"></p>
                </div>
            </div>
            <div class='foto-carta' id="fotoc" >
             
                </div>
            <div class="familias">
                   <p id="claves-textoc"></p>
                    <p id="familia-textoc"></p>      
             
            
             
            </div>
            <div class="descripcion">
                <p id="descripcion-textoc"></p>
            </div>
            <div class="ataque">
                <div id="turnos">
                    <p id="turnos-textoc"></p>
                </div>
                <div id="tipo">
                    <p id="tipo-textoc"></p>
                </div>
                <div id="ataque">
                    <p id="ataque-textoc"></p>
                </div>
            </div>
      </div>
      <div class="alante"><button id="alantec" onclick="alantec()">→</button></div>
    </div>
  </div>
  <div id="ventanaModalBaraja" class="modal">
    <div class="modal-content">
        <div class="atras"><button id="atrasb" onclick="atrasb()">←</button></div>
     <div class="borde-melee" id="bordeb">
            <div class="datos-cabeza">
                <div id="rareza">
                 
                    <p id="rareza-textob"></p>
                </div>
                <div id="nombre-carta">
                    <p id="nombre-textob"></p>
                </div>
                <div id="mana">
                    <p id="mana-textob"></p>
                </div>
            </div>
            <div class='foto-carta' id="fotob" >
             
                </div>
            <div class="familias">
                   <p id="claves-textob"></p>
                    <p id="familia-textob"></p>      
             
            
             
            </div>
            <div class="descripcion">
                <p id="descripcion-textob"></p>
            </div>
            <div class="ataque">
                <div id="turnos">
                    <p id="turnos-textob"></p>
                </div>
                <div id="tipo">
                    <p id="tipo-textob"></p>
                </div>
                <div id="ataque">
                    <p id="ataque-textob"></p>
                </div>
            </div>
      </div>
          <div class="alante"><button id="alanteb" onclick="alanteb()">→</button></div>
    </div>
  </div>
    <audio controls autoplay  loop hidden id="musica">
        <source src="imagenes/brinstar.mp3" type="audio/mp3" >
    </audio>
  <script type="text/javascript">
//variables
var turno=0;
var pasandoTurno=false;
var boss=<?=$boss ?>; //Los bosses tienen 2 turnos pero van solos.
var mana=<?=$personaje->getMana()?>;
var manaturno=<?=$personaje->getMana()?>;
var vidacombate=<?=$personaje->getVida_combate() ?>;
var vida=<?=$personaje->getVida()?>;
var mano=<?=$personaje->getMano()?>;
var escudo=<?=$personaje->getDefensa()?>;
var escudoporturno=<?=$personaje->getDefensa()?>;
//vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
var efectosTurno=[0,0,0,0,0,0];
//todos,primitivo,complejo,archeo,melee,espada,lanza,hacha,gun,pistola,automatica,explosiva,psi,telepatia,telekinesis,dinakinesis,cyber,artilugio,protesis,implante
var modsCarta=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
//El objeto que almacena cuando se borran los efectos por turno
function Contador(turno,ataque,mod, cant) {
  this.turno = turno;
  this.ataque = ataque;
  this.mod = mod;
  this.cant=cant;
}
//Donde se almacenan los contadores
var contaArray=[];

//Capturar el enemigo
var ataque1r=<?=$enemigo1->getAtaque1() ?>; //Ataque es el numero por el cual si un aleatorio es menor se ejecuta ese ataque. Van del 1 al 100.
var dano1r=<?=$enemigo1->getDano1()?>;
var descripcion1r="<?=$enemigo1->getDescripcion1()?>";
var ataque2r=<?=$enemigo1->getAtaque2()?>;
var dano2r=<?=$enemigo1->getDano2()?>;
var descripcion2r="<?=$enemigo1->getDescripcion2() ?>";
var ataque3r=<?=$enemigo1->getAtaque3()?>;
var dano3r=<?=$enemigo1->getDano3() ?>;
var descripcion3r="<?=$enemigo1->getDescripcion3()?>";
var vidar=<?=$enemigo1->getVida()?>;
var dificultadr=<?=$enemigo1->getDificultad()?>;

var tipor="<?=$enemigo1->getTipo()?>";
var claver=<?=$enemigo1->getClave()?>;

//Constructor de enemigos
function Enemigo(ataque1,dano1,descripcion1,ataque2,dano2,descripcion2,ataque3,dano3,descripcion3,vida,dificultad,tipo,clave){
    this.ataque1=ataque1;
    this.dano1=dano1;
    this.descripcion1=descripcion1;
    this.ataque2=ataque2;
    this.dano2=dano2;
    this.descripcion2=descripcion2;
    this.ataque3=ataque3;
    this.dano3=dano3;
    this.descripcion3=descripcion3;
    this.vida=vida;

    this.dificultad=dificultad;
  
    this.tipo=tipo;
    this.clave=clave;
}

var enemigo1;
var enemigo2;
var enemigo3;

var selecEnemigo=false;

var idenemigo=0;//Contiene al enemigo al que se apunta
    //Constructor de cartas
function Carta(nombre,familia,clave1,clave2,clave3,multiataque,mana,descripcion,ataque,turnos,tipo,rareza,foto){
    this.nombre=nombre;
    this.familia=familia;
    this.clave1=clave1;
    this.clave2=clave2;
    this.clave3=clave3;
    this.multiataque=multiataque;
    this.mana=mana;
    this.descripcion=descripcion;
    this.ataque=ataque;
    this.turnos=turnos;
    this.tipo=tipo;
    this.rareza=rareza;
    this.foto=foto;
}
//Un array con todas las cartas. Unicamente para reordenarlas
var todasCartas=[];


    <?php foreach($cartas as $c): ?>
todasCartas.push(new Carta("<?=$c->getNombre()?>","<?=$c->getFamilia()?>","<?=$c->getClave1()?>","<?=$c->getClave2() ?>","<?=$c->getClave3()?>",<?=$c->getMultiataque() ?>,<?=$c->getMana()?>,"<?= $c->getDescripcion()?>",<?=$c->getAtaque()?>,<?=$c->getTurnos()?>,"<?=$c->getTipo()?>",<?=$c->getRareza()?>,"<?=$c->getFoto()?>"));

 <?php endforeach; ?> 
console.log(todasCartas);
var idbaraja=0;
var boolbaraja=false;
var baraja=[];

var idmano=0;
var boolmano=false;
var manoarray=[];

var idcementerio=0;
var boolcementerio=true;
var cementerio=[];


var modal = document.getElementById("ventanaModal");
// Botón que abre el modal
var boton = document.getElementById("mano");
// Hace referencia al elemento <span> que tiene la X que cierra la ventana
var modalCementerio=document.getElementById("ventanaModalCementerio");
var botonCementerio=document.getElementById("cementerio");
var modalBaraja=document.getElementById("ventanaModalBaraja");
var botonBaraja=document.getElementById("baraja");


boton.addEventListener("click",function() {
    if(pasandoTurno==false && boolmano==false){


  modal.style.display = "block";
    idenemigo=0;
    selecEnemigo=false;
    idmano=0;
    generarCartam();
}
});
botonCementerio.addEventListener("click",function() {
    if(pasandoTurno==false && boolcementerio==false){
    modalCementerio.style.display = "block";
       generarCartac();
    }
});
botonBaraja.addEventListener("click",function() {
    if(pasandoTurno==false && boolbaraja==false ){
    
    modalBaraja.style.display = "block";
        generarCartab();
    }
});
function generarCartam(){
   var car=manoarray[idmano];
if(idmano==0){
    document.getElementById("atrasm").disabled=true;
}else{
    document.getElementById("atrasm").disabled=false;
}

if(idmano==(manoarray.length-1)){
    document.getElementById("alantem").disabled=true;
}else{
    document.getElementById("alantem").disabled=false;
}
if(car.mana>mana){
    document.getElementById("jugar").disabled=true;
}else{
    document.getElementById("jugar").disabled=false;
}
var dam=0;
//todos,primitivo,complejo,archeo,melee,espada,lanza,hacha,gun,pistola,automatica,explosiva,psi,telepatia,telekinesis,dinakinesis,cyber,artilugio,protesis,implante
dam=dam+modsCarta[0];

if(car.clave2=="primitivo"){
    dam=dam+modsCarta[1];

}
if(car.clave2=="complejo"){
    dam=dam+modsCarta[2];
}
if(car.clave2=="archeo"){
    dam=dam+modsCarta[3];
}
switch (car.clave1){
    case 'espada':
    dam=dam+modsCarta[5];

    break;
    case 'lanza':
    dam=dam+modsCarta[6];
break;
case 'hacha':
dam=dam+modsCarta[7];
break;
case 'pistola':
dam=dam+modsCarta[9];
break;
case 'automatica':
dam=dam+modsCarta[10];
break;
case 'explosiva':
dam=dam+modsCarta[11];
break;
case 'telepatia':
dam=dam+modsCarta[13];
break;
case 'telekinesis':
dam=dam+modsCarta[14];
break;
case 'dinakinesis':
dam=dam+modsCarta[15];
break;
case 'artilugio':
dam=dam+modsCarta[17];
break;
case 'protesis':
dam=dam+modsCarta[18];
break;
case 'implante':
dam=dam+modsCarta[19];
break;
}
if(dam.clave3=="alien"){
    dam=dam+1;
  
}

  if(car.familia=="melee"){
    document.getElementById("bordem").classList.remove(document.getElementById("bordem").className);
    document.getElementById("bordem").classList.add("borde-melee");
    dam=dam+modsCarta[4];
         
  }
 if(car.familia=="gun"){
    document.getElementById("bordem").classList.remove(document.getElementById("bordem").className);
    document.getElementById("bordem").classList.add("borde-gun");
    dam=dam+modsCarta[8];
 }
 if(car.familia=="psi"){
    document.getElementById("bordem").classList.remove(document.getElementById("bordem").className);
    document.getElementById("bordem").classList.add("borde-psi");
    dam=dam+modsCarta[12];
 }
 if(car.familia=="cyber"){
    document.getElementById("bordem").classList.remove(document.getElementById("bordem").className);
    document.getElementById("bordem").classList.add("borde-cyber");
    dam=dam+modsCarta[16];
 }
document.getElementById("rareza-textom").innerHTML=car.rareza;
document.getElementById("nombre-textom").innerHTML=car.nombre;
document.getElementById("mana-textom").innerHTML=car.mana;
var fotost="url(imagenes/"+car.foto+")";
document.getElementById("fotom").style.backgroundImage=fotost;
document.getElementById("claves-textom").innerHTML=car.clave1+"-"+car.clave2+"-"+car.clave3;
if(car.multiataque==0){
    document.getElementById("familia-textom").innerHTML=car.familia+"-Singular";
}else{
    document.getElementById("familia-textom").innerHTML=car.familia+"-Multiataque";
}
document.getElementById("descripcion-textom").innerHTML=car.descripcion;
document.getElementById("turnos-textom").innerHTML=car.turnos;
document.getElementById("tipo-textom").innerHTML=car.tipo;
if(dam==0){
    document.getElementById("ataque-textom").innerHTML=car.ataque;
}else{
      if(car.tipo=="ataque" || car.tipo=="defensa" || car.tipo=="curacion" || car.tipo=="ataque/def" || car.tipo=="defensa/atk" || car.tipo=="instantanea"  ){
        document.getElementById("ataque-textom").innerHTML=car.ataque+"+"+dam;
    }else{
        document.getElementById("ataque-textom").innerHTML=car.ataque;
    }
}

  
}

function irInicio(){
        location.href = 'http://localhost/JuegoCartas/index.php';
}

function atrasm(){
    idmano=idmano-1;
    generarCartam();
}

function alantem(){
    idmano=idmano+1;
    generarCartam();
}

function jugarCarta2(){
    var car=manoarray[idmano];
    var dam=0;
//todos,primitivo,complejo,archeo,melee,espada,lanza,hacha,gun,pistola,automatica,explosiva,psi,telepatia,telekinesis,dinakinesis,cyber,artilugio,protesis,implante
dam=dam+modsCarta[0];
if(car.clave2=="primitivo"){
    dam=dam+modsCarta[1];
}
if(car.clave2=="complejo"){
    dam=dam+modsCarta[2];
}
if(car.clave2=="archeo"){
    dam=dam+modsCarta[3];
}
switch (car.clave1){
    case 'espada':
    dam=dam+modsCarta[5];
    break;
    case 'lanza':
    dam=dam+modsCarta[6];
break;
case 'hacha':
dam=dam+modsCarta[7];
break;
case 'pistola':
dam=dam+modsCarta[9];
break;
case 'automatica':
dam=dam+modsCarta[10];
break;
case 'explosiva':
dam=dam+modsCarta[11];
break;
case 'telepatia':
dam=dam+modsCarta[13];
break;
case 'telekinesis':
dam=dam+modsCarta[14];
break;
case 'dinakinesis':
dam=dam+modsCarta[15];
break;
case 'artilugo':
dam=dam+modsCarta[17];
break;
case 'protesis':
dam=dam+modsCarta[18];
break;
case 'implante':
dam=dam+modsCarta[19];
break;
}
if(dam.clave3=="alien"){
    dam=dam+1;
}

  if(car.familia=="melee"){
 
    dam=dam+modsCarta[4];
  }
 if(car.familia=="gun"){

    dam=dam+modsCarta[8];
 }
 if(car.familia=="psi"){

    dam=dam+modsCarta[12];
 }
 if(car.familia=="cyber"){

    dam=dam+modsCarta[16];
 }

 switch (car.tipo){
    case 'ataque':
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
        if(idenemigo==1){
            enemigo1.vida=enemigo1.vida-(car.ataque+dam);
            comprobarEnemigos();
            document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida; 
            if(car.turnos>0){
            efectosTurno[3]=efectosTurno[3]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,3,(car.ataque+dam)));
            } 
        }
        if(idenemigo==2){
            enemigo2.vida=enemigo2.vida-(car.ataque+dam);
            comprobarEnemigos();
            document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
            if(car.turnos>0){
            efectosTurno[4]=efectosTurno[4]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,4,(car.ataque+dam)));
            } 
        }
        if(idenemigo==3){
            enemigo3.vida=enemigo3.vida-(car.ataque+dam);
            comprobarEnemigos();
            document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;
            if(car.turnos>0){
            efectosTurno[5]=efectosTurno[5]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,5,(car.ataque+dam)));
            } 
        }

      


            if(car.clave3=="esoterico"){
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
 efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));


}
if(car.clave3=="alien"){
    efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
document.getElementById("mostrar-mana").innerHTML=manaturno+"/"+mana;
baraja.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
    boolbaraja=true;
}else{
    boolbaraja=false;
}
if(manoarray.length==0){
    boolmano=true;
}else{
    boolmano=false;
}



    break;
  

case 'ataque/def':
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
    if(idenemigo==1){
            enemigo1.vida=enemigo1.vida-(car.ataque+dam);
            comprobarEnemigos();
            document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida; 
            if(car.turnos>0){
            efectosTurno[3]=efectosTurno[3]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,3,(car.ataque+dam)));
            } 
        }
        if(idenemigo==2){
            enemigo2.vida=enemigo2.vida-(car.ataque+dam);
            comprobarEnemigos();
            document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
            if(car.turnos>0){
            efectosTurno[4]=efectosTurno[4]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,4,(car.ataque+dam)));
            } 
        }
        if(idenemigo==3){
            enemigo3.vida=enemigo3.vida-(car.ataque+dam);
            comprobarEnemigos();
            document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;
            if(car.turnos>0){
            efectosTurno[5]=efectosTurno[5]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,5,(car.ataque+dam)));
            } 
        }

      
        escudo=escudo+(Math.round((car.ataque+dam)/2));
    document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudopoturno;

            if(car.clave3=="esoterico"){
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
 efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
    efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
baraja.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
    boolbaraja=true;
}else{
    boolbaraja=false;
}
if(manoarray.length==0){
    boolmano=true;
}else{
    boolmano=false;
}


break;
case 'defensa/atk':
if(idenemigo==1){
            enemigo1.vida=enemigo1.vida-(Math.round((car.ataque+dam)/2));
            comprobarEnemigos();
            document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida; 
        
        }
        if(idenemigo==2){
            enemigo2.vida=enemigo2.vida-((Math.round((car.ataque+dam)/2)));
            comprobarEnemigos();
            document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
   
        }
        if(idenemigo==3){
            enemigo3.vida=enemigo3.vida-(Math.round((car.ataque+dam)/2));
            comprobarEnemigos();
            document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;
        }

      
        escudo=escudo+(car.ataque+dam);
    document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
    if(car.turnos>0){
            efectosTurno[1]=efectosTurno[1]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,1,(car.ataque+dam)));
            } 



            if(car.clave3=="esoterico"){
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
 efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
    efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
baraja.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
    boolbaraja=true;
}else{
    boolbaraja=false;
}
if(manoarray.length==0){
    boolmano=true;
}else{
    boolmano=false;
}


break;
case 'instantanea':
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
    if(idenemigo==1){
            enemigo1.vida=enemigo1.vida-(car.ataque+dam);
            comprobarEnemigos();
            document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida; 
            if(car.turnos>0){
            efectosTurno[3]=efectosTurno[3]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,3,(car.ataque+dam)));
            } 
        }
        if(idenemigo==2){
            enemigo2.vida=enemigo2.vida-(car.ataque+dam);
            comprobarEnemigos();
            document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
            if(car.turnos>0){
            efectosTurno[4]=efectosTurno[4]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,4,(car.ataque+dam)));
            } 
        }
        if(idenemigo==3){
            enemigo3.vida=enemigo3.vida-(car.ataque+dam);
            comprobarEnemigos();
            document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;
            if(car.turnos>0){
            efectosTurno[5]=efectosTurno[5]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,5,(car.ataque+dam)));
            } 
        }

      
   
            if(car.clave3=="esoterico"){
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
 efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
    efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
cementerio.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
    boolbaraja=true;
}else{
    boolbaraja=false;
}
if(manoarray.length==0){
    boolmano=true;
}else{
    boolmano=false;
}
if(cementerio.length==0){
    boolcementerio=true;
}else{
    boolcementerio=false;
}




break;
 }   

selecEnemigo=false;
idenemigo=0;


}


function jugarCarta(){
    var car=manoarray[idmano];
    var dam=0;
//todos,primitivo,complejo,archeo,melee,espada,lanza,hacha,gun,pistola,automatica,explosiva,psi,telepatia,telekinesis,dinakinesis,cyber,artilugio,protesis,implante
dam=dam+modsCarta[0];
if(car.clave2=="primitivo"){
    dam=dam+modsCarta[1];
}
if(car.clave2=="complejo"){
    dam=dam+modsCarta[2];
}
if(car.clave2=="archeo"){
    dam=dam+modsCarta[3];
}
switch (car.clave1){
    case 'espada':
    dam=dam+modsCarta[5];
    break;
    case 'lanza':
    dam=dam+modsCarta[6];
break;
case 'hacha':
dam=dam+modsCarta[7];
break;
case 'pistola':
dam=dam+modsCarta[9];
break;
case 'automatica':
dam=dam+modsCarta[10];
break;
case 'explosiva':
dam=dam+modsCarta[11];
break;
case 'telepatia':
dam=dam+modsCarta[13];
break;
case 'telekinesis':
dam=dam+modsCarta[14];
break;
case 'dinakinesis':
dam=dam+modsCarta[15];
break;
case 'artilugio':
dam=dam+modsCarta[17];
break;
case 'protesis':
dam=dam+modsCarta[18];
break;
case 'implante':
dam=dam+modsCarta[19];
break;
}
if(dam.clave3=="alien"){
    dam=dam+1;
}

  if(car.familia=="melee"){
 
    dam=dam+modsCarta[4];
  }
 if(car.familia=="gun"){

    dam=dam+modsCarta[8];
 }
 if(car.familia=="psi"){

    dam=dam+modsCarta[12];
 }
 if(car.familia=="cyber"){

    dam=dam+modsCarta[16];
 }

 switch (car.tipo){
    case 'ataque':
    if(car.multiataque==1){

        if(boss==0){
            enemigo1.vida=enemigo1.vida-(car.ataque+dam);
            enemigo2.vida=enemigo2.vida-(car.ataque+dam);
            enemigo3.vida=enemigo3.vida-(car.ataque+dam);
            comprobarEnemigos();
            document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida;   
    document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
    document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;

        }else{
            enemigo1.vida=enemigo1.vida-(car.ataque+dam);
            comprobarEnemigos();
            document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida;
    document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
    document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;

        }

        if(car.turnos>0){
            efectosTurno[2]=efectosTurno[2]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,2,(car.ataque+dam)));
            }

            if(car.clave3=="esoterico"){
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
 efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
    efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
baraja.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
    boolbaraja=true;
}else{
    boolbaraja=false;
}
if(manoarray.length==0){
    boolmano=true;
}else{
    boolmano=false;
}


    }else{
selecEnemigo=true;
    }
    break;
    case 'defensa':
 
    escudo=escudo+(car.ataque+dam);
    document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
    if(car.turnos>0){
            efectosTurno[1]=efectosTurno[1]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,1,(car.ataque+dam)));
            }

            if(car.clave3=="esoterico"){
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
 efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
    efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
baraja.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
    boolbaraja=true;
}else{
    boolbaraja=false;
}
if(manoarray.length==0){
    boolmano=true;
}else{
    boolmano=false;
}

break;
case 'curacion':
vidacombate=vidacombate+(car.ataque+dam);
document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;
if(car.turnos>0){
            efectosTurno[0]=efectosTurno[0]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,0,(car.ataque+dam)));
            }

            if(car.clave3=="esoterico"){
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
 efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
    efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
baraja.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
    boolbaraja=true;
}else{
    boolbaraja=false;
}
if(manoarray.length==0){
    boolmano=true;
}else{
    boolmano=false;
}
break;
case 'ataque/def':
if(car.multiataque==1){

if(boss==0){
    enemigo1.vida=enemigo1.vida-(car.ataque+dam);
    enemigo2.vida=enemigo2.vida-(car.ataque+dam);
    enemigo3.vida=enemigo3.vida-(car.ataque+dam);
    comprobarEnemigos();
    document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida;   
document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;

}else{
    enemigo1.vida=enemigo1.vida-(car.ataque+dam);
    comprobarEnemigos();
    document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida;
document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;

}
escudo=escudo+(Math.round((car.ataque+dam)/2));
    document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
if(car.turnos>0){
    efectosTurno[2]=efectosTurno[2]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,2,(car.ataque+dam)));
    }

    if(car.clave3=="esoterico"){
//vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
baraja.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
boolbaraja=true;
}else{
boolbaraja=false;
}
if(manoarray.length==0){
boolmano=true;
}else{
boolmano=false;
}


}else{
selecEnemigo=true;
}
break;
case 'defensa/atk':
if(car.multiataque==1){

if(boss==0){
    enemigo1.vida=enemigo1.vida-(Math.round((car.ataque+dam)/2));
    enemigo2.vida=enemigo2.vida-(Math.round((car.ataque+dam)/2));
    enemigo3.vida=enemigo3.vida-(Math.round((car.ataque+dam)/2));
    comprobarEnemigos();
    document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida;   
document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;

}else{
    enemigo1.vida=enemigo1.vida-(Math.round((car.ataque+dam)/2));
    comprobarEnemigos();
    document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida;
document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;

}
escudo=escudo+(car.ataque+dam);
    document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
if(car.turnos>0){
    efectosTurno[1]=efectosTurno[1]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,1,(car.ataque+dam)));
    }

    if(car.clave3=="esoterico"){
//vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
baraja.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
boolbaraja=true;
}else{
boolbaraja=false;
}
if(manoarray.length==0){
boolmano=true;
}else{
boolmano=false;
}


}else{
selecEnemigo=true;
}
break;
case 'instantanea':
if(car.multiataque==1){

if(boss==0){
    enemigo1.vida=enemigo1.vida-(car.ataque+dam);
    enemigo2.vida=enemigo2.vida-(car.ataque+dam);
    enemigo3.vida=enemigo3.vida-(car.ataque+dam);
    comprobarEnemigos();
    document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida;   
document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;

}else{
    enemigo1.vida=enemigo1.vida-(car.ataque+dam);
    comprobarEnemigos();
    document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida;
document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;

}

if(car.turnos>0){
    efectosTurno[2]=efectosTurno[2]+(car.ataque+dam);
contaArray.push(new Contador(turno+car.turnos,0,2,(car.ataque+dam)));
    }

    if(car.clave3=="esoterico"){
//vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
cementerio.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
boolbaraja=true;
}else{
boolbaraja=false;
}
if(manoarray.length==0){
boolmano=true;
}else{
boolmano=false;
}
if(cementerio.length==0){
    boolcementerio=true;
}else{
    boolcementerio=false;
}

}else{
selecEnemigo=true;
}
break;
case 'bufo':

modsCarta[0]=modsCarta[0]+car.ataque;
contaArray.push(new Contador(turno+car.turno,1,0,car.ataque));
if(car.clave3=="esoterico"){
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
 efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
    efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
baraja.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
    boolbaraja=true;
}else{
    boolbaraja=false;
}
if(manoarray.length==0){
    boolmano=true;
}else{
    boolmano=false;
}
break;
case 'bufo-tecnologico':
//todos,primitivo,complejo,archeo,melee,espada,lanza,hacha,gun,pistola,automatica,explosiva,psi,telepatia,telekinesis,dinakinesis,cyber,artilugio,protesis,implante

if(car.clave2=="primitivo"){
    modsCarta[1]=modsCarta[1]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,1,car.ataque));
}
if(car.clave2=="complejo"){
    modsCarta[2]=modsCarta[2]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,2,car.ataque));
}
if(car.clave2=="archeo"){
    modsCarta[3]=modsCarta[3]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,3,car.ataque));
}




if(car.clave3=="esoterico"){
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
 efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
    efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
baraja.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
    boolbaraja=true;
}else{
    boolbaraja=false;
}
if(manoarray.length==0){
    boolmano=true;
}else{
    boolmano=false;
}
break;
case 'bufo-familia':
    //todos,primitivo,complejo,archeo,melee,espada,lanza,hacha,gun,pistola,automatica,explosiva,psi,telepatia,telekinesis,dinakinesis,cyber,artilugio,protesis,implante

if(car.clave1=="melee"){
    modsCarta[4]=modsCarta[4]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,4,car.ataque));
}
if(car.clave2=="gun"){
    modsCarta[8]=modsCarta[8]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,8,car.ataque));
}
if(car.clave2=="psi"){
    modsCarta[12]=modsCarta[12]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,12,car.ataque));
}
if(car.clave2=="cyber"){
    modsCarta[16]=modsCarta[16]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,16,car.ataque));
}



if(car.clave3=="esoterico"){
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
 efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
    efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
baraja.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
    boolbaraja=true;
}else{
    boolbaraja=false;
}
if(manoarray.length==0){
    boolmano=true;
}else{
    boolmano=false;
}
break;
case 'bufo-tipo':
switch (car.clave1){
    case 'espada':
  //todos,primitivo,complejo,archeo,melee,espada,lanza,hacha,gun,pistola,automatica,explosiva,psi,telepatia,telekinesis,dinakinesis,cyber,artilugio,protesis,implante

    modsCarta[5]=modsCarta[5]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,5,car.ataque));
    break;
    case 'lanza':
  //todos,primitivo,complejo,archeo,melee,espada,lanza,hacha,gun,pistola,automatica,explosiva,psi,telepatia,telekinesis,dinakinesis,cyber,artilugio,protesis,implante

  modsCarta[6]=modsCarta[6]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,6,car.ataque));
break;
case 'hacha':
  //todos,primitivo,complejo,archeo,melee,espada,lanza,hacha,gun,pistola,automatica,explosiva,psi,telepatia,telekinesis,dinakinesis,cyber,artilugio,protesis,implante

  modsCarta[7]=modsCarta[7]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,7,car.ataque));
break;
case 'pistola':

modsCarta[9]=modsCarta[9]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,9,car.ataque));
break;
case 'automatica':

modsCarta[10]=modsCarta[10]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,10,car.ataque));
break;
case 'explosiva':

modsCarta[11]=modsCarta[11]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,11,car.ataque));
break;
case 'telepatia':
modsCarta[13]=modsCarta[13]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,13,car.ataque));
break;
case 'telekinesis':
modsCarta[14]=modsCarta[14]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,14,car.ataque));
break;
case 'dinakinesis':
modsCarta[15]=modsCarta[15]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,15,car.ataque));
break;
case 'artilugio':
modsCarta[17]=modsCarta[17]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,17,car.ataque));
break;
case 'protesis':
modsCarta[18]=modsCarta[18]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,18,car.ataque));
break;
case 'implante':
modsCarta[19]=modsCarta[19]+car.ataque;
contaArray.push(new Contador(turno+car.turnos,1,19,car.ataque));
break;
}


if(car.clave3=="esoterico"){
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
 efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
    efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
baraja.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
    boolbaraja=true;
}else{
    boolbaraja=false;
}
if(manoarray.length==0){
    boolmano=true;
}else{
    boolmano=false;
}


break;
case 'robo':


var borrarbarja=0;
    if(baraja.length>0){
        boolmano=false;
        if(car.ataque>baraja.length){
        borrarbarja=baraja.length;
        for (let i = 0; i < baraja.length; i++) {
        manoarray.push(baraja[i]);
        
    }
  

    }else{
        borrarbarja=car.ataque;
        for (let i = 0; i < car.ataque; i++) {
        manoarray.push(baraja[i]);
        
    }
    }
   baraja.splice(0,borrarbarja);


    }







if(car.clave3=="esoterico"){
    //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
 efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1));

}
if(car.clave3=="alien"){
    efectosTurno[1]=efectosTurno[1]+1;
contaArray.push(new Contador(turno+3,0,1,1)); 
modsCarta[0]=modsCarta[0]+1;
contaArray.push(new Contador(turno+3,1,0,1));

}
mana=mana-car.mana;
document.getElementById("mostrar-mana").innerHTML=mana+"/"+manaturno;
baraja.push(car);
manoarray.splice(idmano,1);
if(baraja.length==0){
    boolbaraja=true;
}else{
    boolbaraja=false;
}
if(manoarray.length==0){
    boolmano=true;
}else{
    boolmano=false;
}


break;
}





modal.style.display = "none";


}














function generarCartac(){
    var car=cementerio[idcementerio];
if(idcementerio==0){
    document.getElementById("atrasc").disabled=true;
}else{
    document.getElementById("atrasc").disabled=false;
}

if(idcementerio==(cementerio.length-1)){
    document.getElementById("alantec").disabled=true;
}else{
    document.getElementById("alantec").disabled=false;
}


  if(car.familia=="melee"){
    document.getElementById("bordec").classList.remove(document.getElementById("bordec").className);
    document.getElementById("bordec").classList.add("borde-melee");
  }
 if(car.familia=="gun"){
    document.getElementById("bordec").classList.remove(document.getElementById("bordec").className);
    document.getElementById("bordec").classList.add("borde-gun");
 }
 if(car.familia=="psi"){
    document.getElementById("bordec").classList.remove(document.getElementById("bordec").className);
    document.getElementById("bordec").classList.add("borde-psi");
 }
 if(car.familia=="cyber"){
    document.getElementById("bordec").classList.remove(document.getElementById("bordec").className);
    document.getElementById("bordec").classList.add("borde-cyber");
 }
document.getElementById("rareza-textoc").innerHTML=car.rareza;
document.getElementById("nombre-textoc").innerHTML=car.nombre;
document.getElementById("mana-textoc").innerHTML=car.mana;
var fotost="url(imagenes/"+car.foto+")";
document.getElementById("fotoc").style.backgroundImage=fotost;
document.getElementById("claves-textoc").innerHTML=car.clave1+"-"+car.clave2+"-"+car.clave3;
if(car.multiataque==0){
    document.getElementById("familia-textoc").innerHTML=car.familia+"-Singular";
}else{
    document.getElementById("familia-textoc").innerHTML=car.familia+"-Multiataque";
}
document.getElementById("descripcion-textoc").innerHTML=car.descripcion;
document.getElementById("turnos-textoc").innerHTML=car.turnos;
document.getElementById("tipo-textoc").innerHTML=car.tipo;
document.getElementById("ataque-textoc").innerHTML=car.ataque;
  
}

function atrasc(){
    idcementerio=idcementerio-1;
    generarCartac();
}

function alantec(){
    idcementerio=idcementerio+1;
    generarCartac();
}








function generarCartab(){
    var car=baraja[idbaraja];
    
    if(idbaraja==0){
    document.getElementById("atrasb").disabled=true;
}else{
    document.getElementById("atrasb").disabled=false;
}

if(idbaraja==(baraja.length-1)){
    document.getElementById("alanteb").disabled=true;
}else{
    document.getElementById("alanteb").disabled=false;
}
    
    
    
  if(car.familia=="melee"){
    document.getElementById("bordeb").classList.remove(document.getElementById("bordeb").className);
    document.getElementById("bordeb").classList.add("borde-melee");
  }
 if(car.familia=="gun"){
    document.getElementById("bordeb").classList.remove(document.getElementById("bordeb").className);
    document.getElementById("bordeb").classList.add("borde-gun");
 }
 if(car.familia=="psi"){
    document.getElementById("bordeb").classList.remove(document.getElementById("bordeb").className);
    document.getElementById("bordeb").classList.add("borde-psi");
 }
 if(car.familia=="cyber"){
    document.getElementById("bordeb").classList.remove(document.getElementById("bordeb").className);
    document.getElementById("bordeb").classList.add("borde-cyber");
 }
document.getElementById("rareza-textob").innerHTML=car.rareza;
document.getElementById("nombre-textob").innerHTML=car.nombre;
document.getElementById("mana-textob").innerHTML=car.mana;
var fotost="url(imagenes/"+car.foto+")";
document.getElementById("fotob").style.backgroundImage=fotost;
document.getElementById("claves-textob").innerHTML=car.clave1+"-"+car.clave2+"-"+car.clave3;
if(car.multiataque==0){
    document.getElementById("familia-textob").innerHTML=car.familia+"-Singular";
}else{
    document.getElementById("familia-textob").innerHTML=car.familia+"-Multiataque";
}
document.getElementById("descripcion-textob").innerHTML=car.descripcion;
document.getElementById("turnos-textob").innerHTML=car.turnos;
document.getElementById("tipo-textob").innerHTML=car.tipo;
document.getElementById("ataque-textob").innerHTML=car.ataque;
  
}

function atrasb(){
    idbaraja=idbaraja-1;
    generarCartab();
}

function alanteb(){
    idbaraja=idbaraja+1;
    generarCartab();
}



// Si el usuario hace clic fuera de la ventana, se cierra.
window.addEventListener("click",function(event) {
   if (event.target == modal) {
    modal.style.display = "none";
idmano=0;
  }
  if(event.target== modalCementerio){
    modalCementerio.style.display="none";
idcementerio=0;
  }
  if(event.target == modalBaraja){
    modalBaraja.style.display="none";
    idbaraja=0;
  }
  if(event.target==content){
    modal.style.display = "none";
    idmano=0;
  }
  if(event.target==contentb){
   
    modalBaraja.style.display="none";
    idbaraja=0;
  }
  if(event.target==contentc){

    modalCementerio.style.display="none";
    idcementerio=0;
  }
});

document.addEventListener("DOMContentLoaded",Iniciar)

function Iniciar(){
    todasCartas.sort(() => 0.5 - Math.random());
    for (let i = 0; i < todasCartas.length; i++) {
        baraja.push(todasCartas[i]);
        
    }

var borrarbarja=0;
    if(mano>baraja.length){
        borrarbarja=baraja.length;
        for (let i = 0; i < baraja.length; i++) {
        manoarray.push(baraja[i]);
     
    }
  

    }else{
        borrarbarja=mano;
        for (let i = 0; i < mano; i++) {
        manoarray.push(baraja[i]);
      
    }
    }
   baraja.splice(0,borrarbarja);

if(baraja.length==0){
    boolbaraja=true;
}


var man=document.getElementById("mostrar-mana");
man.innerHTML=mana+"/"+manaturno;
var esc=document.getElementById("mostrar-escudo");
esc.innerHTML=escudo+"/"+escudoporturno;
var vid=document.getElementById("mostrar-vida");
vid.innerHTML=vidacombate+"/"+vida;

if(boss==0){
    enemigo1=new Enemigo(ataque1r,dano1r,descripcion1r,ataque2r,dano2r,descripcion2r,ataque3r,dano3r,descripcion3r,vidar,dificultadr,tipor,claver);
    enemigo2=new Enemigo(ataque1r,dano1r,descripcion1r,ataque2r,dano2r,descripcion2r,ataque3r,dano3r,descripcion3r,vidar,dificultadr,tipor,claver);
    enemigo3=new Enemigo(ataque1r,dano1r,descripcion1r,ataque2r,dano2r,descripcion2r,ataque3r,dano3r,descripcion3r,vidar,dificultadr,tipor,claver);
    

    
    document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida;
    document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
    document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;

    document.getElementById("monigote1").addEventListener("click",enemigoClick);
    document.getElementById("monigote2").addEventListener("click",enemigoClick);
    document.getElementById("monigote3").addEventListener("click",enemigoClick);





}else{
    enemigo1=new Enemigo(ataque1r,dano1r,descripcion1r,ataque2r,dano2r,descripcion2r,ataque3r,dano3r,descripcion3r,vidar,dificultadr,tipor,claver);
  
    
    document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida;

    document.getElementById("enemigo2").style.display="none";
    document.getElementById("enemigo3").style.display="none";
     document.getElementById("monigote1").addEventListener("click",enemigoClick);
}

}





function enemigoClick(){
    if(selecEnemigo==true){
        let en = this.getAttribute('id');

        if(en=="monigote1"){
            idenemigo=1;
            jugarCarta2();
        }
        if(en=="monigote2"){
            idenemigo=2;
jugarCarta2();
        }
        if(en=="monigote3"){
            idenemigo=3;
            jugarCarta2();
        }


    }


}







function comprobarMuerte(){

if(vidacombate<=0){
    location.href = 'http://localhost/JuegoCartas/index.php?action=derrota';
}

}

function comprobarEnemigos(){
    if(boss==0){
        if(enemigo1.vida<=0){
        
            document.getElementById("enemigo1").removeEventListener('click', enemigoClick);
            document.getElementById("enemigo1").style.display="none";
        }
        if(enemigo2.vida<=0){
    
            document.getElementById("enemigo2").removeEventListener('click', enemigoClick);
            document.getElementById("enemigo2").style.display="none";
        }
        if(enemigo3.vida<=0){
        
            document.getElementById("enemigo3").removeEventListener('click', enemigoClick);
            document.getElementById("enemigo3").style.display="none";
        }

        if(enemigo1.vida<=0 && enemigo2.vida<=0 && enemigo3.vida<=0){
            var enlace='http://localhost/JuegoCartas/index.php?action=finalizarCombate&vida='+vidacombate;
            console.log(enlace);
            location.href = enlace;

        }

    }else{
        if(enemigo1.vida<=0){

            document.getElementById("enemigo1").removeEventListener('click', enemigoClick);
            document.getElementById("enemigo1").style.display="none";
        }

        if(enemigo1.vida<=0 ){
            var enlace='http://localhost/JuegoCartas/index.php?action=finalizarCombate&vida='+vidacombate;
                  console.log(enlace);
                location.href = enlace;

        }

    }
}

function pasarTurno2(){

mana=manaturno;
var man=document.getElementById("mostrar-mana");
man.innerHTML=mana+"/"+manaturno;
    for (let i = 0; i < efectosTurno.length; i++) {
       //vida,escudo,todosEnemigos,Enemigo1,Enemigo2,Enemigo3
        if(i==0){
            vidacombate=vidacombate+efectosTurno[0];
            document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;
        }
        if(i==1){
            escudo=escudoporturno+efectosTurno[i];
            document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        }
        if(i==2){
            if(boss==0){
                enemigo1.vida=enemigo1.vida-efectosTurno[i];
                enemigo2.vida=enemigo2.vida-efectosTurno[i];
                enemigo3.vida=enemigo3.vida-efectosTurno[i];
            }else{
                enemigo1.vida=enemigo1.vida-efectosTurno[i];
            }
        }
        if(i==3){
            enemigo1.vida=enemigo1.vida-efectosTurno[i];
        }
        if(i==4){
            if(boss==0){
                   enemigo2.vida=enemigo2.vida-efectosTurno[i];
            }
         
        }
        if(i==5){
            if(boss==0){
                    enemigo3.vida=enemigo3.vida-efectosTurno[i];
            }
        
        }
    }
comprobarEnemigos();

if(boss==0){
    document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida;
    document.getElementById("vida-enemigo2").innerHTML=enemigo2.vida;
    document.getElementById("vida-enemigo3").innerHTML=enemigo3.vida;
}else{
    document.getElementById("vida-enemigo1").innerHTML=enemigo1.vida;
}
    turno=turno+1;
var borr=[];

    for (let i = 0; i < contaArray.length; i++) {
      
      if(contaArray[i].turno==turno){
        borr.push(i);

        if(contaArray[i].ataque==0){
            efectosTurno[contaArray[i].mod]=efectosTurno[contaArray[i].mod]-contaArray[i].cant;

        }else{
            modsCarta[contaArray[i].mod]=modsCarta[contaArray[i].mod]-contaArray[i].cant;

        }


      }  



    }

    for (let i = 0; i < borr.length; i++) {
        contaArray.splice(i,1);
        
    }
        
    var borrarbarja=0;
    if(baraja.length>0){
        boolmano=false;
        if(mano>baraja.length){
        borrarbarja=baraja.length;
        for (let i = 0; i < baraja.length; i++) {
        manoarray.push(baraja[i]);
        
    }
  

    }else{
        borrarbarja=mano;
        for (let i = 0; i < mano; i++) {
        manoarray.push(baraja[i]);
        
    }
    }
   baraja.splice(0,borrarbarja);

if(baraja.length==0){
    boolbaraja=true;
}
if(manoarray.length==0){
    boolmano=true;
}
    }else{
        boolbaraja=true;
        if(manoarray.length==0){
    boolmano=true;
}
    }
 



}


function pasarTurno(){
    var ra;
    var dan;
    document.getElementById("mensaje-turno").innerHTML="";
    if(boss==0){
   if(enemigo1.vida>0){
    ra=Math.floor(Math.random() * 101);

if(enemigo1.tipo=="incompetente"){
    ra=ra-enemigo1.clave;
}
if(enemigo1.tipo=="competente"){
    ra=ra+enemigo1.clave;

}

if(ra<enemigo1.ataque1){

    if(escudo>=enemigo1.dano1){
        escudo=escudo-enemigo1.dano1;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion1+" por "+enemigo1.dano1+" de daño";
 

    }else{
         dan=enemigo1.dano1;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion1+" por "+enemigo1.dano1+" de daño";

    }


}else{
    if(ra<enemigo1.ataque2){
        if(escudo>=enemigo1.dano2){
        escudo=escudo-enemigo1.dano2;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion2+" por "+enemigo1.dano2+" de daño";
  

    }else{
         dan=enemigo1.dano2;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion2+" por "+enemigo1.dano2+" de daño";

    }
    }else{


        if(escudo>=enemigo1.dano3){
        escudo=escudo-enemigo1.dano3;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion3+" por "+enemigo1.dano3+" de daño";


    }else{
         dan=enemigo1.dano3;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion3+" por "+enemigo1.dano3+" de daño";

    }






    }
}
   }




   if(enemigo2.vida>0){
     ra=Math.floor(Math.random() * 101);

if(enemigo2.tipo=="incompetente"){
    ra=ra-enemigo2.clave;
}
if(enemigo2.tipo=="competente"){
    ra=ra+enemigo2.clave;

}

if(ra<enemigo2.ataque1){

    if(escudo>=enemigo2.dano1){
        escudo=escudo-enemigo2.dano1;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 2 "+enemigo2.descripcion1+" por "+enemigo2.dano1+" de daño";
   

    }else{
         dan=enemigo2.dano1;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 2 "+enemigo2.descripcion1+" por "+enemigo2.dano1+" de daño";

    }


}else{
    if(ra<enemigo2.ataque2){
        if(escudo>=enemigo2.dano2){
        escudo=escudo-enemigo2.dano2;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 2 "+enemigo2.descripcion2+" por "+enemigo2.dano2+" de daño";


    }else{
         dan=enemigo2.dano2;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 2 "+enemigo2.descripcion2+" por "+enemigo2.dano2+" de daño";

    }
    }else{


        if(escudo>=enemigo2.dano3){
        escudo=escudo-enemigo2.dano3;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 2 "+enemigo2.descripcion3+" por "+enemigo2.dano3+" de daño";


    }else{
        dan=enemigo2.dano3;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 2 "+enemigo2.descripcion3+" por "+enemigo2.dano3+" de daño";

    }






    }
}
   }




   if(enemigo3.vida>0){
     ra=Math.floor(Math.random() * 101);

if(enemigo3.tipo=="incompetente"){
    ra=ra-enemigo3.clave;
}
if(enemigo3.tipo=="competente"){
    ra=ra+enemigo3.clave;

}

if(ra<enemigo3.ataque1){

    if(escudo>=enemigo3.dano1){
        escudo=escudo-enemigo3.dano1;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 3 "+enemigo3.descripcion1+" por "+enemigo3.dano1+" de daño";


    }else{
         dan=enemigo3.dano1;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 3 "+enemigo3.descripcion1+" por "+enemigo3.dano1+" de daño";

    }


}else{
    if(ra<enemigo3.ataque2){
        if(escudo>=enemigo3.dano2){
        escudo=escudo-enemigo3.dano2;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 3 "+enemigo3.descripcion2+" por "+enemigo3.dano2+" de daño";
 
    }else{
         dan=enemigo3.dano2;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 3 "+enemigo3.descripcion2+" por "+enemigo3.dano2+" de daño";

    }
    }else{


        if(escudo>=enemigo3.dano3){
        escudo=escudo-enemigo3.dano3;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 3 "+enemigo3.descripcion3+" por "+enemigo3.dano3+" de daño";


    }else{
         dan=enemigo3.dano3;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 3 "+enemigo3.descripcion3+" por "+enemigo3.dano3+" de daño";

    }






    }
}
   }


    }else{
        if(enemigo1.vida>0){
     ra=Math.floor(Math.random() * 101);

if(enemigo1.tipo=="incompetente"){
    ra=ra-enemigo1.clave;
}
if(enemigo1.tipo=="competente"){
    ra=ra+enemigo1.clave;

}

if(ra<enemigo1.ataque1){

    if(escudo>=enemigo1.dano1){
        escudo=escudo-enemigo1.dano1;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion1+" por "+enemigo1.dano1+" de daño";


    }else{
         dan=enemigo1.dano1;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion1+" por "+enemigo1.dano1+" de daño";
    }


}else{
    if(ra<enemigo1.ataque2){
        if(escudo>=enemigo1.dano2){
        escudo=escudo-enemigo1.dano2;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion2+" por "+enemigo1.dano2+" de daño";
   

    }else{
         dan=enemigo1.dano2;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion2+" por "+enemigo1.dano2+" de daño";

    }
    }else{


        if(escudo>=enemigo1.dano3){
        escudo=escudo-enemigo1.dano3;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion3+" por "+enemigo1.dano3+" de daño";
 

    }else{
         dan=enemigo1.dano3;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion3+" por "+enemigo1.dano3+" de daño";

    }






    }
}
   }

   if(enemigo1.vida>0){
     ra=Math.floor(Math.random() * 101);

if(enemigo1.tipo=="incompetente"){
    ra=ra-enemigo1.clave;
}
if(enemigo1.tipo=="competente"){
    ra=ra+enemigo1.clave;

}

if(ra<enemigo1.ataque1){

    if(escudo>=enemigo1.dano1){
        escudo=escudo-enemigo1.dano1;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion1+" por "+enemigo1.dano1+" de daño";


    }else{
         dan=enemigo1.dano1;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion1+" por "+enemigo1.dano1+" de daño";

    }


}else{
    if(ra<enemigo1.ataque2){
        if(escudo>=enemigo1.dano2){
        escudo=escudo-enemigo1.dano2;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion2+" por "+enemigo1.dano2+" de daño";


    }else{
         dan=enemigo1.dano2;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion2+" por "+enemigo1.dano2+" de daño";

    }
    }else{


        if(escudo>=enemigo1.dano3){
        escudo=escudo-enemigo1.dano3;
      document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;

      document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion3+" por "+enemigo1.dano3+" de daño";


    }else{
        var dan=enemigo1.dano3;
        dan=dan-escudo;
        escudo=0;
        vidacombate=vidacombate-dan;
        document.getElementById("mostrar-escudo").innerHTML=escudo+"/"+escudoporturno;
        document.getElementById("mostrar-vida").innerHTML=vidacombate+"/"+vida;

        comprobarMuerte();

document.getElementById("mensaje-turno").innerHTML=document.getElementById("mensaje-turno").innerHTML+"<br>"+"Enemigo 1 "+enemigo1.descripcion3+" por "+enemigo1.dano3+" de daño";

    }






    }
}
   }




    }

pasarTurno2();

}















    </script>
</body>
</html>