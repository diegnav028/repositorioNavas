<?php
        
ob_start();
        
?>
<div class="fondo">
    
    <div class="titulo">
        <h1>Slay the DAW</h1>
        
    </div>
    
        <?php if(isset($_SESSION['email']) ): ?>
           <?php
        $usuario=$usuarioDAO->obtenerPorEmail($_SESSION['email']);
        $sinexpedicion=true;
           if($usuario->getPiso()!=0){
               $sinexpedicion=false;
           }


        ?>
    <?php if(($usuario->getRol())=='admin' ): ?>
    <div class="menu">
       <div class="botones">
           <a href="index.php?action=nuevaExpedicion">  <button>Nueva expedicion</button> </a>
               <?php if($sinexpedicion==true ): ?>
                <a href="index.php?action=continuarExpedicion" > <button disabled>Continuar </button> </a>
      
             <?php else: ?>
            <a href="index.php?action=continuarExpedicion" > <button >Continuar </button> </a>
      
                    <?php endif; ?>
        <a href="index.php?action=verTienda"> <button>Tienda de psionita</button></a>
      <a href="index.php?action=verCartas"> <button>Cartas </button></a>
        <a href="index.php?action=selecMazo"> <button>Mi mazo</button></a>
             <a href="index.php?action=verPersonaje"><button>Personaje</button></a>
        <a href="index.php?action=adminUsu"><button>Administrar usuarios</button></a>
          <a href="index.php?action=irSobreMi"><button>Sobre Mi</button></a>
        
       
      </div>
    
    </div>
    
    
    
          <?php else: ?>
      <div class="menu">
           <div class="botones">
           <a href="index.php?action=nuevaExpedicion">  <button>Nueva expedicion</button> </a>
          <?php if($sinexpedicion==true ): ?>
                <a href="index.php?action=continuarExpedicion" > <button disabled>Continuar </button> </a>
      
             <?php else: ?>
            <a href="index.php?action=continuarExpedicion" > <button >Continuar </button> </a>
      
                    <?php endif; ?> <a href="index.php?action=verTienda"> <button>Tienda de psionita</button></a>
      <a href="index.php?action=verCartas"> <button>Cartas </button></a>
    <a href="index.php?action=selecMazo"> <button>Mi mazo</button></a>
      <a href="index.php?action=verPersonaje"><button>Personaje</button></a>
        <a href="index.php?action=irSobreMi"><button>Sobre Mi</button></a>
    
    </div>
    </div>
          <?php endif; ?>
    
             <?php else: ?>
        <div class="menu">
       <h4 class="response" id="exito"></h4>
    
             <div class="login" action="index.php?action=login" method="post"> 
                 
                 <h3 style="width: 100%;text-align: center;">Inicia sesion para empezar a jugar</h3> 
                 
              <form id="login-registro" action="index.php?action=login" method="post">
                         <?php MensajeFlash::imprimirMensajes() ?>
                  Tu email:<input type="text" name="email" placeholder="Email" style="width: 100%;">
                     <p class="response" id="email_error"></p>
                  <br>
                  Tu contraseña:<input type="password" name="contras" placeholder="Contraseña" style="width: 100%;">
                    <p class="response" id="contras_error"></p>
                  <br>
                  <br>
                
                <input type="submit" value="Iniciar Sesión" id="boton">O registrate <a href="index.php?action=registro" id="boton2">aqui</a>
                 </form>
             
             </div>
          
    
    
    </div>
  
    
    <?php endif; ?>
    
    
    
    
    
    
    
</div>


 


<?php
        
$vista = ob_get_clean();
require 'vistas/plantilla.php';   

?>
