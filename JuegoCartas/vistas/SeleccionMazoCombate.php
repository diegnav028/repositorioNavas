<?php
        
ob_start();
        
?>
   
<div class="fondo2">
    
    <div class="titulo">
        <h1>Elige un Mazo</h1>
        
    </div>


    <div class='selector'>
        
       
            <a href="index.php?action=nuevaExpedicion&mazo=1" class="enlace-carta">
           
                <div class='background-sword'  >
             
                </div>
            
      
                
            </a>
      
        <a href="index.php?action=nuevaExpedicion&mazo=2" class="enlace-carta">
             <div class='background-gun'  ></div>
            
      
                
            </a>
        
           <a href="index.php?action=nuevaExpedicion&mazo=3" class="enlace-carta">
             <div class='background-magic'  ></div>
            
      
                
            </a>
        
           <a href="index.php?action=nuevaExpedicion&mazo=4" class="enlace-carta">
             <div class='background-cyber'  ></div>
            
      
                
            </a>
        
        
        
    </div>
    
    
    
    
    
    

</div>

    <?php
        
$vista = ob_get_clean();
require 'vistas/plantilla.php';   

?>