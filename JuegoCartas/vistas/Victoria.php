<?php
        
ob_start();
        
?>
   
<div class="fondo-victoria">
    
    <div>
        
         <a href="index.php?action=inicio"> <button>Inicio</button></a>
    </div>

</div>

    <?php
        
$vista = ob_get_clean();
require 'vistas/plantilla.php';   

?>
