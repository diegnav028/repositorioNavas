<?php
        
ob_start();
        
?>
   
<div class="fondo2">
    
    <div class="titulo">
        <h1>Elige una carta</h1>
        
    </div>


    <div class='selector-todas'>
       

        <div class="tienda-borde">
        <div class="bordetienda-<?=$carta1->getFamilia() ?>">
            <div class="datos-cabeza">
                <div id="rareza">
                 
                    <p>   <?=$carta1->getRareza() ?> </p>
                </div>
                <div id="nombre-carta">
                    <p><?=$carta1->getNombre()  ?></p>
                </div>
                <div id="mana">
                    <p><?=$carta1->getMana() ?></p>
                </div>
            </div>
            <div class='foto-carta' style="background-image: url(imagenes/<?=$carta1->getFoto() ?>)"  >
             
                </div>
            <div class="familias">
                   <?=$carta1->getClave1() ?>-<?=$carta1->getClave2() ?>-<?=$carta1->getClave3() ?>
                   <br>
                    <?php if($carta1->getMultiataque()==0): ?>
                <?=$carta1->getFamilia() ?>-Singular
              
    <?php else: ?>
                     <?=$carta1->getFamilia() ?>-Multiataque
                     <?php endif; ?>  
            
             
            </div>
            <div class="descripcion">
                <p><?=$carta1->getDescripcion() ?></p>
            </div>
            <div class="ataque">
                <div id="turnos">
                    <p><?=$carta1->getTurnos() ?></p>
                </div>
                <div id="tipo">
                    <p><?=$carta1->getTipo()  ?></p>
                </div>
                <div id="ataque">
                    <p><?=$carta1->getAtaque() ?></p>
                </div>
            </div>
      </div>
            <div class="comprar">
             <div>
              
                <a href="index.php?action=cartaVictoria&carta=<?= $carta1->getId_carta() ?>&vida=<?=$vida ?>" ><button ">Elegir</button></a>
     
</div> 
            </div>
            
            
            </div>
         
            
              <div class="tienda-borde">
        <div class="bordetienda-<?=$carta2->getFamilia() ?>">
            <div class="datos-cabeza">
                <div id="rareza">
                 
                    <p>   <?=$carta2->getRareza() ?> </p>
                </div>
                <div id="nombre-carta">
                    <p><?=$carta2->getNombre()  ?></p>
                </div>
                <div id="mana">
                    <p><?=$carta2->getMana() ?></p>
                </div>
            </div>
            <div class='foto-carta' style="background-image: url(imagenes/<?=$carta2->getFoto() ?>)"  >
             
                </div>
            <div class="familias">
                   <?=$carta2->getClave1() ?>-<?=$carta2->getClave2() ?>-<?=$carta2->getClave3() ?>
                   <br>
                    <?php if($carta2->getMultiataque()==0): ?>
                <?=$carta2->getFamilia() ?>-Singular
              
    <?php else: ?>
                     <?=$carta2->getFamilia() ?>-Multiataque
                     <?php endif; ?>  
            
             
            </div>
            <div class="descripcion">
                <p><?=$carta2->getDescripcion() ?></p>
            </div>
            <div class="ataque">
                <div id="turnos">
                    <p><?=$carta2->getTurnos() ?></p>
                </div>
                <div id="tipo">
                    <p><?=$carta2->getTipo()  ?></p>
                </div>
                <div id="ataque">
                    <p><?=$carta2->getAtaque() ?></p>
                </div>
            </div>
      </div>
            <div class="comprar">
             <div>
              
                <a href="index.php?action=cartaVictoria&carta=<?= $carta2->getId_carta() ?>&vida=<?=$vida ?>" ><button ">Elegir</button></a>
     
</div> 
            </div>
            
            
            </div>
        
                
              <div class="tienda-borde">
        <div class="bordetienda-<?=$carta3->getFamilia() ?>">
            <div class="datos-cabeza">
                <div id="rareza">
                 
                    <p>   <?=$carta3->getRareza() ?> </p>
                </div>
                <div id="nombre-carta">
                    <p><?=$carta3->getNombre()  ?></p>
                </div>
                <div id="mana">
                    <p><?=$carta3->getMana() ?></p>
                </div>
            </div>
            <div class='foto-carta' style="background-image: url(imagenes/<?=$carta3->getFoto() ?>)"  >
             
                </div>
            <div class="familias">
                   <?=$carta3->getClave1() ?>-<?=$carta3->getClave2() ?>-<?=$carta3->getClave3() ?>
                   <br>
                    <?php if($carta3->getMultiataque()==0): ?>
                <?=$carta3->getFamilia() ?>-Singular
              
    <?php else: ?>
                     <?=$carta3->getFamilia() ?>-Multiataque
                     <?php endif; ?>  
            
             
            </div>
            <div class="descripcion">
                <p><?=$carta3->getDescripcion() ?></p>
            </div>
            <div class="ataque">
                <div id="turnos">
                    <p><?=$carta3->getTurnos() ?></p>
                </div>
                <div id="tipo">
                    <p><?=$carta3->getTipo()  ?></p>
                </div>
                <div id="ataque">
                    <p><?=$carta3->getAtaque() ?></p>
                </div>
            </div>
      </div>
            <div class="comprar">
             <div>
              
                <a href="index.php?action=cartaVictoria&carta=<?= $carta3->getId_carta() ?>&vida=<?=$vida ?>" ><button ">Elegir</button></a>
     
</div> 
            </div>
            
            
            </div>
        

        
        
    </div>
    

    
    
    
    
    
    

</div>

    <?php
        
$vista = ob_get_clean();
require 'vistas/plantilla.php';   

?>


