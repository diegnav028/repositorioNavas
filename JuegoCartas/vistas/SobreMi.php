<?php
        
ob_start();
        
?>
   
<div class="fondo2">
    
    <div class="titulo">
        <h1>Sobre mi.</h1>
        
    </div>

    <div class="curriculo">
      
        <div class="Carta">
        <h4>Carta de presentacion</h4>
        
        <p>Candidatura para el puesto de programador web.</p>
        <br>
 
        <p>En mi busqueda de formarme y adquirir experiencia como programador 
           considero una excelente oportunidad el puesto ofertado por su empresa.
                       
        </p>
        <p>
            Presento este proyecto de un juego de cartas como muestra de mis 
            habilidades y confio en que demuestre mis ganas de aprender y lo 
            mucho que me apasiona la programacion.Me gustaria pedir que revisen 
            el curriculum adjunto y que examinen el proyecto para obtener 
            una vision mas completa de mis habilidades.
            
        </p>
        <p>Agradezco el tiempo dedicado a considerar mi candidatura y quedo a la espera de noticias.</p>
        
        <p>Atentamente, Diego Navas Alcobendas.</p>
        
        
    </div>
          <div class="curr">   <img src="imagenes/curr.png"></div>
     
        
        
    </div>
    
    
    
    
  
    
    
    
    
    

</div>

    <?php
        
$vista = ob_get_clean();
require 'vistas/plantilla.php';   

?>

