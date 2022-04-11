<?php

namespace Controllers;

use MVC\Router;

class LoginController {
    public static function login(Router $router) {
        

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
        }

        // Router a la vista
        $router->render('auth/login', [
            'titulo'=> 'Iniciar sesión'
        ]);
    }

    public static function logout() {
        echo "Desde login";
    
    }

    public static function olvide(Router $router) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }

        // muestra la vista
        $router->render('auth/olvide', [
            'titulo'=>'Olvide mi Contraseña'
        ]);
    }

    public static function reestablecer(Router $router) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
        // Muestra la vista
        $router->render('auth/reestablecer', [
            'titulo'=>'Reestrablecer contraseña'
        ]);
    }

    public static function mensaje(Router $router) {
       $router->render('auth/mensaje', [
        'titulo'=> 'Confirma tu cuenta'
       ]);
    }

    public static function confirmar(Router $router) {
        $router->render('auth/confirmar', [
            'titulo'=> 'Confirma tu cuenta'
        ]);
    }
}
