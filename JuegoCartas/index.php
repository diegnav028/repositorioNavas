<?php
       session_start();
       require_once './MensajeFlash.php';
       require_once './config.php';
       require_once 'modelo/Conexion.php';
       require_once 'modelo/Usuario.php';
       require_once 'modelo/UsuarioDAO.php';
       require_once 'modelo/Carta.php';
       require_once 'modelo/CartaDAO.php';
       require_once 'modelo/Personaje.php';
       require_once 'modelo/PersonajeDAO.php';
       require_once 'modelo/Tienda.php';
       require_once 'modelo/Baraja.php';
       require_once 'modelo/Enemigo.php';
       require_once 'modelo/EnemigoDAO.php';
       require_once 'modelo/Mazo.php';
       require_once 'modelo/MazoDAO.php';
       require_once 'modelo/Mejora.php';
       require_once 'modelo/MejoraDAO.php';
       require_once 'controladores/CombateControlador.php';
       require_once 'controladores/UsuariosControlador.php';
       
$map = array("login" => array("controller" => "UsuariosControlador", "method" => "login", "publica" => true),
    "logout" => array("controller" => "UsuariosControlador", "method" => "logout", "publica" => false),
    "registro" => array("controller" => "UsuariosControlador", "method" => "registro", "publica" => true),
      "comprobarRegistro" => array("controller" => "UsuariosControlador", "method" => "comprobarRegistro", "publica" => true),
    "adminUsu" => array("controller" => "UsuariosControlador", "method" => "adminUsu", "publica" => false),
      "hacerAdmin" => array("controller" => "UsuariosControlador", "method" => "hacerAdmin", "publica" => false),
        "selecMazo" => array("controller" => "UsuariosControlador", "method" => "selecMazo", "publica" => false),
        "verMazo" => array("controller" => "UsuariosControlador", "method" => "verMazo", "publica" => false),
         "guardarMazo" => array("controller" => "UsuariosControlador", "method" => "guardarMazo", "publica" => false),       
    "comfirmMazo" => array("controller" => "UsuariosControlador", "method" => "ComfirmMazo", "publica" => false),
        "verCartas" => array("controller" => "UsuariosControlador", "method" => "verCartas", "publica" => false),
                   "verPersonaje" => array("controller" => "UsuariosControlador", "method" => "verPersonaje", "publica" => false),
    "irSobreMi" => array("controller" => "UsuariosControlador", "method" => "irSobreMi", "publica" => false),
    "verTienda" => array("controller" => "UsuariosControlador", "method" => "verTienda", "publica" => false),
        "comprarCarta" => array("controller" => "UsuariosControlador", "method" => "comprarCarta", "publica" => false),
        "comprarMejora" => array("controller" => "UsuariosControlador", "method" => "ComprarMejora", "publica" => false),
    "inicio" => array("controller" => "UsuariosControlador", "method" => "inicio", "publica" => true),
     "nuevoCombate" => array("controller" => "CombateControlador", "method" => "nuevoCombate", "publica" => false),
    "finalizarCombate" => array("controller" => "CombateControlador", "method" => "finalizarCombate", "publica" => false),
    "victoria" => array("controller" => "CombateControlador", "method" => "victoria", "publica" => false),
    "derrota" => array("controller" => "CombateControlador", "method" => "derrota", "publica" => false),
    "cartaVictoria" => array("controller" => "CombateControlador", "method" => "CartaVictoria", "publica" => false),
    "nuevaExpedicion" => array("controller" => "CombateControlador", "method" => "nuevaExpedicion", "publica" => false),
    "continuarExpedicion" => array("controller" => "CombateControlador", "method" => "continuarExpedicion", "publica" => false),
    "comprobarEmail" => array("controller" => "UsuariosControlador", "method" => "comprobarEmail", "publica" => true));

//parseo de ruta

if(!isset($_GET['action'])){
    
    $ruta = 'inicio';
    
} else {

    if(!isset($map[$_GET['action']])){
    
        print "La acción que has elegido no existe.";
        
        header('Status: 404 Not Found');
        die();

    } else {

        $ruta = filter_var($_GET['action'], FILTER_SANITIZE_SPECIAL_CHARS);

    }
    
}

if (!isset($_SESSION['email']) && isset($_COOKIE['email'])) {
    //Obtenemos el usuario de la BD
    $email = filter_var($_COOKIE['email'], FILTER_SANITIZE_STRING);
    $usuarioDAO = new UsuarioDAO(Conexion:: conectar());
    $usuario = $usuarioDAO->obtenerPorEmail($email);

    if (!$usuario) {    //Si no se encuentra el usuario
        setcookie("email", "", 0);   //Borramos la cookie
        header("Location: index.php");
    } else {
        //Iniciamos sesión
        $_SESSION['email'] = $usuario->getEmail();
        $_SESSION['contras'] = $usuario->getContrasena();
      
        
   
        setcookie("email", $email, time() + 20 * 24 * 60 * 60);
    }
}
//ejecucion del controlador

$controller = $map[$ruta]['controller'];
$method = $map[$ruta]['method'];

if(method_exists($controller, $method)){

    $objContr = new $controller();
    $objContr -> $method();

} else {
    
    header('Status: 404 Not Found');
    echo "El método $method del controlador $controller no existe.";
    
}
       