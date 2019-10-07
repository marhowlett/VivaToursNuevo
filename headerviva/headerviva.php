<?php
//revisado
/**
 * Plugin Name: Botón header
 * Plugin URI: http://viajesviatours.com
 * Description: Aparecer o desaparecer botón registrar
 * Version: 1.0
 * Author: María del Mar Ramonell
 * Author URI: http://viajesviatours.com
 * License: MIT
 */
    // Shortcode del div para flotar a un lado
    add_shortcode('headerviva', 'headerviva');
    // Función del shortcode para crear un div flotante:
    function headerviva() {
		
		$email=do_shortcode('[user-data field_name="Username"]' );

if(empty($email)){
     $resultado='
 <span > <strong>¡Inicia tu sesión ahora!</strong></span> <a href="/iniciar-sesion/">Acceso agentes</a>';
 return $resultado;
}
        else {
            $resultado=do_shortcode('[login-logout-toggle login_redirect_page="/panel" logout_redirect_page="/"]');
 return $resultado;
        }

    }?>