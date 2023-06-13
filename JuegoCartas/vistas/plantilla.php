<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title></title>
	<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>
	<style src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css"></style>
       <link rel="stylesheet" href="http://jquery.bassistance.de/validate/demo/css/screen.css" />
       <style src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css"></style>
       
  <script src="imagenes/jquery-3.7.0.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
            
            * { box-sizing: border-box;
                margin: 0;
                font-family: Lato;
            }
            
            header { 
                width: 100%;
                top: 0;
    
                font-size: 20px;
                background-image: url(imagenes/images.jpg);
                color: orange;
                position: fixed;
                font-weight: bolder;
                border: 2px solid black;
                display: flex;
                flex-wrap: wrap;
                
            }
          
            
            header h3 { text-align: center;
                width: 80%;
                margin: 5px auto;
                font-size: 3em;
            }
            
 
            
            strong { font-size: 1em;
            }
            
            #inicio { text-decoration: none;
                font-size: 15px;
                color: white;
                font-weight: bold;
                border-radius: 15px;
            }
            
            #inicio:hover { color: white;
                background-color: blue;
                border: 5px solid blue;
                cursor: pointer;
            }
            
            #enlaces { text-decoration: none;
                font-size: 1em;
                margin: 10%;
                border-radius: 15px;
                color: green;
            }
            
            #enlaces:hover { color: white;
                background-color: green;
                border: 5px solid green;
                cursor: pointer;
            }
            
            #boton { height: 10vh;
                color: blue;
                border-radius: 15px;
                font-weight: bolder;
                text-align: center;
                background-color: lightcyan;
                border: 2px solid blue;
                text-decoration: none;
                border-image-outset: none;
            }
            
            #boton:hover { color: white;
                background-color: blue;
                border: 2px solid blue;
                cursor: pointer;
            }
            
            #boton2 { height: 10vh;
                color: blue;
                border-radius: 15px;
                font-weight: bolder;
                text-align: center;
                background-color: lightcyan;
                text-decoration: none;
                border-image-outset: none;
            }
            
            #boton2:hover { color: green;
                cursor: pointer;
            }
            
            /*anuncios*/
            
            /*páginas*/
                        
            #pagAnt { text-decoration: none;
                font-size: 1.2em;
              color: white;
                 font-weight: bold;
                border-radius: 9px;
          
            }
            
            #pagAnt:hover { color: white;
                background-color: blue;
                border: 5px solid blue;
                cursor: pointer;
            }
                        
            #pagSig { text-decoration: none;
                font-size: 1.2em;
               color: white;
                border-radius: 9px;
                font-weight: bold;
            }
            
            #pagSig:hover { color: white;
                background-color: blue;
                border: 5px solid blue;
                cursor: pointer;
            }
                        
          
            
            /*registrar*/
            
            .cont { padding: 60px 0;
                width: 90%;
                max-width: 1000%;
                margin: auto;
                overflow: hidden;
            }

            .formdatper { width: 100%;
                padding: 16px;
                background-color: rgba(204, 204, 204, 0.5);
                border-radius: 15px;
                color: purple;
            }

            label { display: inline-block;
                width: 18%;
            }

            .campoent { display: inline-block;
                width: 78%;
                margin-bottom: 8px;
                margin-top: 8px;
                padding: 3px 10px;
            }

            textarea { width: 97%;
                    height: 100%;
                    display: inline-block;
                    resize: both;
            }

            textarea, .campoent { border-radius: 3px;
                    background-color: #f6f6f6;
                    border: 1px solid #f6f6f6;
            }

            .enviar { width: 100%;
                padding: 8px 16px;
                background-color: black;
                color: wheat;
                border: 1px solid black;
                border-radius: inherit; 
                cursor: pointer;
                font-weight: bold;
            }

            .enviar:hover { background-color: grey;
                color: black;
            }
            
            /*modificar anuncio*/
            
            #cambiar { text-decoration: none;
                color: green;
                font-size: 0.8em;
                -webkit-text-stroke: 0.5px black;
            }
            
            #cambiar:hover { color: blue;
                -webkit-text-stroke: 1px black;
            }
            
            #borrar { text-decoration: none;
                color: black;
                font-size: 1.2em;
            }
            
            #borrar:hover { color: red;
                -webkit-text-stroke: 1px black;
            }
            
            #texto { text-decoration: none;
                color: black;
                font-size: 2em;
            }
            .fondo-derrota{
                  display: flex;
                flex-wrap: wrap;
           
                
                height: 100vh;
                justify-content: center;
                align-items: center;
                background-image: url(imagenes/game-over.jpg);
                background-size: cover;
                background-position: center;
            }
            .fondo-victoria{
                      display: flex;
                flex-wrap: wrap;
           
                
                height: 100vh;
                justify-content: center;
                align-items: center;
                background-image: url(imagenes/victoria.jpg);
                background-size: cover;
                background-position: center;
            }
           .fondo-victoria div{
                width: 20%;
            
            }
           .fondo-victoria button{
                height: 5vh;
                  color: blue;
                  width: 100%;
                  margin: 5px;
                border-radius: 15px;
                font-weight: bolder;
                text-align: center;
                background-color: lightcyan;
                border: 2px solid blue;
                text-decoration: none;
                border-image-outset: none;
            }
          .fondo-victoria a{
                  width: 100%;
                    height: 5vh;
            }
            
           .fondo-victoria button:hover{
                color: white;
                background-color: blue;
                border: 2px solid blue;
                cursor: pointer;
            }
            
           
            
            .fondo-derrota div{
                width: 20%;
            
            }
           .fondo-derrota button{
                height: 5vh;
                  color: blue;
                  width: 100%;
                  margin: 5px;
                border-radius: 15px;
                font-weight: bolder;
                text-align: center;
                background-color: lightcyan;
                border: 2px solid blue;
                text-decoration: none;
                border-image-outset: none;
            }
            .fondo-derrota a{
                  width: 100%;
                    height: 5vh;
            }
            
            .fondo-derrota button:hover{
                color: white;
                background-color: blue;
                border: 2px solid blue;
                cursor: pointer;
            }
            .fondo {
                display: flex;
                flex-wrap: wrap;
           
                
                height: 100vh;
                
                background-image: url(imagenes/fondo3.jpg);
                background-size: cover;
                background-position: center;
            }
                .fondo2 {
                display: flex;
                flex-wrap: wrap;
                align-items: flex-start;
                
                height: 100%;
                padding: 50px;
                background-image: url(imagenes/fondo3.jpg);
                background-size: cover;
                background-position: center;
            }
            .titulo{
                width: 100%;
                text-align: center;
                color:  blue;
                height: 10vh;
                padding-top: 18vh;
            

            }
            .titulo h1 {
                    font-size: 4em;
                font-weight: bold;
            }
            .menu{
           display: flex;
                justify-content: center;
     
                width: 100%;
              color: orange;
              font-weight: bold;
          margin-bottom: 10vh;
              
             
            }
            .login{
                width: 100%;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                font-size: 1.3em;
                    
            }
            .login h3{
                 font-size: 1.7em;
            }
            .botones{
                        width: 50%;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
              
                    
            }
            .botones button{
                height: 5vh;
                  color: blue;
                  width: 100%;
                  margin: 5px;
                border-radius: 15px;
                font-weight: bolder;
                text-align: center;
                background-color: lightcyan;
                border: 2px solid blue;
                text-decoration: none;
                border-image-outset: none;
            }
            .botones a{
                  width: 100%;
                    height: 5vh;
            }
            
            .botones button:hover{
                color: white;
                background-color: blue;
                border: 2px solid blue;
                cursor: pointer;
            }
            .botones button:disabled{
                background-color: gray;
            }
            .botones button:disabled:hover{
                  color: blue;
            }
            #Usuario{
                width: 40%;
            }
            #logo{
                 width: 20%;
                      background-image:url('imagenes/logo.png');
           background-repeat: no-repeat;
           background-size: contain;
           background-position: center;
            }
            #psion{
               width: 20%;
               text-align: right;
            }
            #Inicio{
                  width: 20%;
               
            }
                 #Inicio button{
                 height: 5vh;
                  color: blue;
                  width: 100%;
                  margin: 5px;
                border-radius: 15px;
                font-weight: bolder;
                text-align: center;
                background-color: lightcyan;
                border: 2px solid blue;
                text-decoration: none;
                border-image-outset: none;
            }
           #Inicio button:hover{
                         color: white;
                background-color: blue;
                border: 2px solid blue;
                cursor: pointer;
            }
            .tableUsus{
                     width: 100%;
                     margin-top: 40px;

       
          
                
            }
       
            .tableUsus table{
                 width: 70%;
                margin-left: 10%;
                    font-size: 10px;
               color: blue;
               background-color: lightcyan;
               font-weight: bold;
               border: solid 1px blue;

            }
            .tableUsus th, td
            {
                  border: solid 1px blue;
                
            }
        
            .background-sword{
           background-image:url('imagenes/swordcover.png');
           background-repeat: no-repeat;
           background-size: cover;
           background-position: center;
             width: 100%;
                      height: 100%;
               
                border: solid 5px red;
            }
                 .background-gun{
           background-image:url('imagenes/guncover.png');
           background-repeat: no-repeat;
           background-size: cover;
           background-position: center;
           
                      height: 100%;
                width: 100%;
                border: solid 5px black;
            }
                 .background-magic{
           background-image:url('imagenes/psicover.png');
           background-repeat: no-repeat;
           background-size: cover;
           background-position: center;
           
                      height: 100%;
                width: 100%;
                border: solid 5px blue;
            }
                 .background-cyber{
           background-image:url('imagenes/artifactcover.png');
           background-repeat: no-repeat;
           background-size: cover;
           background-position: center;
           
                      height: 100%;
                width: 100%;
                border: solid 5px gold;
            }
            .selector{
                margin-top: 20vh;
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
              height: 100vh;
                width: 100%;
            }
            .enlace-carta{
                             height: 50%;
                width: 20%;
            }
            .selector-todas{
                   margin-top: 20vh;
                display: flex;
                justify-content: space-around;
                align-content: flex-start;
                flex-wrap: wrap;
             
                width: 100%;
             
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
            
            .caja-paginas{
                margin-top: 10vh;
                 width:100%;
                 text-align: center;
            }
            #psicono{
               height: 50px;
               width:50px;
            }
            .comprar{
                 width:100%;
                 display: flex;
                 flex-wrap: wrap;
                 justify-content: center;
                 align-content: center;
            
            }
            .comprar a{
            
                     text-decoration: none;
                         
            }
            .comprar button{
                 height: 5vh;
                  color: blue;
                  width: 100%;
                  margin: 5px;
                border-radius: 15px;
                font-weight: bolder;
                text-align: center;
                background-color: lightcyan;
                border: 2px solid blue;
                text-decoration: none;
                border-image-outset: none;
            }
            .comprar button:hover{
                         color: white;
                background-color: blue;
                border: 2px solid blue;
                cursor: pointer;
            }
              .comprar button:disabled{
                background-color: gray;
            }
         .comprar button:disabled:hover{
                  color: blue;
            }
            #dinero{
                 width:100%;
                 display: flex;
                 justify-content: center;
                 align-content: center;
                 font-weight: bold;
                 font-size: 5vh;
                 color:purple;
            }
            .response{   
                color: red;
                font-weight: bold;
                      }
                        .response1{   
                color: green;
                font-weight: bold;
                      }
                      
                      
                      .carta-anadir{
                          margin-top: 15vh;
                          width: 100%;

  display: flex;
  flex-wrap: wrap;
  justify-content: center;
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


      
            
            .curriculo{
                   width: 100%;
                   display: flex;
                   flex-wrap: wrap;
                   background-color: rgba(0,0,0,0.5);
                   margin-top: 15vh;
                   font-size: 20px;
                   color:  white;
            } 
            
            .Carta{
                 width: 100%;
                 border: 1px solid black;
            }     
            .curr{
                width: 100%;
            }   
            .curr img{
                        width: 100%;
            }
                
            .caja-personaje{
                height: 80vh;
                    width: 100%;
                    display: flex;
                    flex-wrap: wrap;
                    margin-top: 15vh;              
                
            }
            .foto-personaje{
                  height: 25vh;
                    width: 50%;  
                    background-image: url('imagenes/personaje-quieto2.png');
                    background-repeat: no-repeat;
                    background-size: contain;
                    background-position: right;
    
            }
            .personaje-est{
                   height: 25vh;
                    width: 50%;  
                          color:  blue;
                          font-size: 20px;
                          font-weight: bold;
                    
            }
                      
                      
                      
                      
            @media (max-width: 700px){
        
            .enlace-carta{
                             height: 45%;
                width: 45%;
            } 
         
            #Usuario{
         
             font-size: 15px;
            }
            .tienda-borde{
                 width: 46%;
                           height: 80vh;
            }
               .borde-melee{
                    width: 46%;
                              height: 70vh;
            }
            .borde-gun{
                     width: 46%;
                               height: 70vh;
            }
            .borde-psi{
            
                     width: 46%;
                               height: 70vh;
            }
            .borde-cyber{
          
                      width: 46%;
                                height: 70vh;
            }
                  .fondo2 {
          
                padding: 0;
      
            }
                   .bordetienda-melee{
               height: 70vh;
                
            }
            .bordetienda-gun{
         height: 70vh;
            }
            .bordetienda-psi{
           height: 70vh;
            }
            .bordetienda-cyber{
               height: 70vh;
            }
               .descripcion{
             
                       font-size: 10px;
            }
               .titulo{
               
                padding-top: 13vh;
            font-size: 10px;

            }
             .atras button {

    width: 70px;
  height: 70px;

 
}
.atras {
    padding-top: 50%;
}
.alante{
     padding-top: 50%;
}   
.alante button {

    width: 70px;
  height: 70px;

  
}
  
            
            
            
            }
        </style>
         <script type="text/javascript">
            
 

    </script>
    </head>
    <body>
        <header>
            
            <?php if(isset($_SESSION['email'])): ?>
                 <?php  
                 
    $usuario=$usuarioDAO->obtenerPorEmail($_SESSION['email']);
                   $psion=$usuario->getGold();
      
    
    
    ?>
            <div id="Usuario">
            <strong ><?= $_SESSION['email'] ?></strong>
            <br>
            <a href="index.php?action=logout" id="inicio">Cerrar Sesión</a>
       
            <br>
         </div>
            <div id="logo"></div>
            <div id="psion">
                <p> <?=$psion ?>  <img src="imagenes/psionita.png" id="psicono"> </p>
              
                
                
            </div>
                     <div id="Inicio">
               
         
    <a href="index.php?action=inicio"> <button>Inicio</button></a>

    
  
                 
                </div>
            <?php endif; ?>
   
        </header>
        <?php MensajeFlash::imprimirMensajes() ?>
        
        <!--parte vista-->
        
        <?php print $vista; ?>
        
        <!--parte vista-->
        
    </body>
</html>
