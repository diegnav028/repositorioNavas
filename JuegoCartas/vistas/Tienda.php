<?php
        
ob_start();
        
?>
   
<div class="fondo2">
    
    <div class="titulo">
        <h1>Tienda de psionita</h1>
        
    </div>


    <div class='selector-todas'>
       
            <?php foreach($cartas as $c): ?>
        <div class="tienda-borde">
        <div class="bordetienda-<?=$c->getFamilia() ?>">
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
            <div class="comprar">
                <div id="dinero"> <img src="imagenes/psionita.png" id="psicono"> <?=$c->getPrecio() ?>  </div>
                <div>
                    
                
                  <?php if($usuario->getGold()>=$c->getPrecio() || $usuario->getRol()=="admin" ): ?>
                <a href="index.php?action=verTienda&carta=<?= $c->getId_carta() ?>" ><button >Comprar</button></a>
      <?php else: ?>
                <a href="index.php?action=verTienda&carta=<?= $c->getId_carta() ?>" ><button disabled="true">Comprar</button></a>
     
    
 <?php endif; ?>   
</div> 
            </div>
            
            
            </div>
           <?php endforeach; ?>        
            
          <?php if($ncartas<5): ?>
        <?php for ($i = $ncartas; $i < 4; $i++):  ?>
        
        <div class="tienda-borde">
            <div class="vendido-borde">
                <div class="vendido-foto">
                    
                </div>
                
            </div>

        </div>
        
 
            <?php endfor; ?>
 <?php endif; ?>   
        
        
        
      
    <?php foreach($mejoras as $m): ?>
        <div class="tienda-borde">
            
      
        <div class="borde-mejoras ">
        
            <div class='foto-mejora' style="background-image: url(imagenes/<?=$m->getFoto() ?>)"  >
             
                </div>
   
            <div class="descripcion-mejora">
                <p>Mejora tu <?=$m->getTipo() ?> en <?= $m->getCantidad() ?>.</p>
            </div>
     
      </div>
              <div class="comprar">
                <div id="dinero"> <img src="imagenes/psionita.png" id="psicono"> <?=$m->getPrecio() ?></div>
                  <?php if($usuario->getGold()>=$m->getPrecio() || $usuario->getRol()=="admin" ): ?>
                <a href="index.php?action=verTienda&mejora=<?= $m->getId_mejora() ?>" ><button >Comprar</button></a>
      <?php else: ?>
                <a href="index.php?action=verTienda&mejora=<?= $m->getId_mejora() ?>" ><button disabled="true">Comprar</button></a>
     
    
 <?php endif; ?>   
  
            </div>
            
            
              </div>
           <?php endforeach; ?>        
        <?php if($nmejoras<5): ?>
        <?php for ($i = $nmejoras; $i < 4; $i++):  ?>
        
        <div class="tienda-borde">
            <div class="vendido-borde">
                <div class="vendido-foto">
                    
                </div>
                
            </div>

        </div>
        
 
            <?php endfor; ?>
 <?php endif; ?>   
        

    </div>
    

    
    
    
    
    
    

</div>

    <?php
        
$vista = ob_get_clean();
require 'vistas/plantilla.php';   

?>

