<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use MVC\Router;
$router = new Router();

// login
$router -> get('/', [LoginController::class, 'login']);
$router -> post('/', [LoginController::class, 'login']);
$router -> get('/logout', [LoginController::class, 'logout']);

//Olvidar contraseña
$router -> get('/olvide', [LoginController::class, 'olvide']);
$router -> post('/olvide', [LoginController::class, 'olvide']);

//nueva contraeña
$router -> get('/reestablecer', [LoginController::class, 'reestablecer']);
$router -> post('/reestablecer', [LoginController::class, 'reestablecer']);

//Confirmacion de cuenta
$router -> get('/mensaje', [LoginController::class, 'mensaje']); // mensaje de confirmacion de la cuenta
$router -> get('/confirmar', [LoginController::class, 'confirmar']); // token para confirmar la cuenta


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();