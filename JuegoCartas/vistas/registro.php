<?php
        
ob_start();
        
?>

    <section class="cont">
    
        <form id="registro" action="index.php?action=registro" method="post" class="formdatper">
            <label>Nick:</label><input type="text" name="nombre" id="nombre" class="campoent">
            <p class="response" id="nombre_error"></p>
            <br>
            <br>
            <label>Email:</label><input type="text" name="email" id="email" class="campoent">
              <p class="response" id="email_error"></p>
            <br>
            <br>
            <label>Contraseña:</label><input type="password" name="contras" id="contras" class="campoent">
              <p class="response" id="contras_error"></p>
            <br>
            <br>
            <label>Fecha de nacimiento</label>
            <input type="date" name="fecha" id="fecha" class="compoent">
             <p class="response" id="fecha_error"></p>
            <input type="submit" value="Registrar" class="enviar">
        </form>
                   <div id="Inicio">
               
         
    <a href="index.php?action=inicio"> <button>Inicio</button></a>

    
  
                 
                </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#registro').submit(function(e) {
        e.preventDefault();
              $(".response").empty();
         $(".response1").empty();
        $.ajax({
            type: "POST",
              url: 'http://localhost/JuegoCartas/index.php?action=comprobarRegistro',
            	dataType: 'json',
            data: $(this).closest("form").serialize(),
            success: function(response)
            {
                
//                     let com=false;
            
                           $(".response").empty();// clear any existing class='response' html
                         $(".response1").empty();
			if(response.exito==1){
                       
                            location.href = 'http://localhost/JuegoCartas/index.php';
                        }else{
                           $.each(response, function(key, value){
					// set the html of the id corresponding to the key to the value
//                                     com=true;
					$('#'+key).html(value);
				}); 
                        }
				
                        
//                  
                        
                           
           }
         
       });
     });
});
    
    </script>
    
    
    
    <?php
        
$vista = ob_get_clean();
require 'vistas/plantilla.php';   

?>
