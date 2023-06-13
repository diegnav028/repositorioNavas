<?php
        
ob_start();
        
?>
   
<div class="fondo2">
    
    <div class="titulo">
        <h1>Cartas desbloqueadas</h1>
        
    </div>


    <div class='selector-todas'>
       
            <?php foreach($cartas as $c): ?>
       
        <div class="borde-<?=$c->getFamilia() ?>">
            <div class="datos-cabeza">
                <div id="rareza">
                 
                    <p>   <?=$c->getRareza() ?> </p>
                </div>
                <div id="nombre-carta">
                    <p><?=$c->getNombre()  ?></p>
                </div>
                <div id="mana">
                    <p><?=$c->getMana() ?></p>
                </div>
            </div>
            <div class='foto-carta' style="background-image: url(imagenes/<?=$c->getFoto() ?>)"  >
             
                </div>
            <div class="familias">
                   <?=$c->getClave1() ?>-<?=$c->getClave2() ?>-<?=$c->getClave3() ?>
                   <br>
                    <?php if($c->getMultiataque()==0): ?>
                <?=$c->getFamilia() ?>-Singular
              
    <?php else: ?>
                     <?=$c->getFamilia() ?>-Multiataque
                     <?php endif; ?>  
            
             
            </div>
            <div class="descripcion">
                <p><?=$c->getDescripcion() ?></p>
            </div>
            <div class="ataque">
                <div id="turnos">
                    <p><?=$c->getTurnos() ?></p>
                </div>
                <div id="tipo">
                    <p><?=$c->getTipo()  ?></p>
                </div>
                <div id="ataque">
                    <p><?=$c->getAtaque() ?></p>
                </div>
            </div>
      </div>
           <?php endforeach; ?>        
            
      
 
       
        
        
            <div class="caja-paginas">
                                      <?php if($pagina==0): ?>
                  <?php if($sig==true): ?>
    <a href="index.php?action=verCartas&pagina=<?= $pagina+1 ?>" id="pagSig">Página Siguiente ></a>
     <?php endif; ?>   
    <?php else: ?>
    <a href="index.php?action=verCartas&pagina=<?= $pagina-1 ?>" id="pagAnt">< Página Anterior</a>
      <?php if($sig==true): ?>
    <a href="index.php?action=verCartas&pagina=<?= $pagina+1 ?>" id="pagSig">Página Siguiente ></a>
     <?php endif; ?>   
    <?php endif; ?>   
        
        
    </div>
    </div>
    

    
    
    
    
    
    

</div>

    <?php
        
$vista = ob_get_clean();
require 'vistas/plantilla.php';   

?>

