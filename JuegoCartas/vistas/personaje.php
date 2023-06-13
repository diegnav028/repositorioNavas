<?php
        
ob_start();
        
?>
   
<div class="fondo2">
    
    <div class="titulo">
        <h1>Personaje</h1>
        
    </div>


    <div class="caja-personaje">
        <div class="foto-personaje">
            
        </div>
        <div class="personaje-est">
            
   
  
        <p>Vida:<?=$personaje->getVida() ?></p>
        <p>Defensa:<?=$personaje->getDefensa()?></p>
        <p>Mana:<?=$personaje->getMana()?></p>
        <p>Mano:<?=$personaje->getMano()?></p>
             </div>
    </div>
    
    
    

</div>

    <?php
        
$vista = ob_get_clean();
require 'vistas/plantilla.php';   

?>