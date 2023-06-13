<?php
        
ob_start();
        
?>
   
        <div class="fondo">
    
    <div class="titulo">
        <h1>Administracion de usuarios</h1>
        
    </div>
            
            <div class="tableUsus">

                <table>
                    <tr>
                      
                        <th>
                            Rol
                        </th>
                      
                          <th>
                            Email
                        </th>
                          <th>
                            Fecha de nacimiento
                        </th>
                      
                        <th>
                            Administrar usuario
                        </th>
                    </tr><!-- comment -->
                    
                        
                  
                 
        <?php foreach($usuarios as $a): ?>
        <tr>
                 
                    <td> <?= $a ->getRol() ?></td>
                 
                   <td> <?= $a ->getEmail() ?></td>
                    <td> <?= $a ->getFecha_naci() ?></td>
               
                        <?php if(($a->getRol())=='usuario' ): ?>
                    <td>
                          <div class="botones">
                        <a href="index.php?action=hacerAdmin&id=<?= $a ->getId_usu() ?>&pagina=<?=$pagina ?> " >Hacer administrador</a>
               
                        </<div></a>
                    
                    </td>
               <?php else: ?>
                    <td> Es administrador</td>
                     <?php endif; ?>  
                    </tr>
        <?php endforeach; ?>
          
        </table>
                <div class="caja-paginas">

                             <?php if($pagina==0): ?>
                  <?php if($sig==true): ?>
    <a href="index.php?action=adminUsu&pagina=<?= $pagina+1 ?>" id="pagSig">Página Siguiente ></a>
     <?php endif; ?>   
    <?php else: ?>
    <a href="index.php?action=adminUsu&pagina=<?= $pagina-1 ?>" id="pagAnt">< Página Anterior</a>
      <?php if($sig==true): ?>
    <a href="index.php?action=adminUsu&pagina=<?= $pagina+1 ?>" id="pagSig">Página Siguiente ></a>
     <?php endif; ?>   
    <?php endif; ?>   
    </div>
    </div>  
                

                
                
                
                
            </div>
            
            
            
            
            
            
            
    
        
        
 <?php
        
$vista = ob_get_clean();
require 'vistas/plantilla.php';   

?>
 