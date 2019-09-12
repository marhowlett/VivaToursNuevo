<?php
//revisado
/**
 * Plugin Name: Botón Pasajero y Registrar
 * Plugin URI: http://viajesviatours.com
 * Description: Aparecer o desaparecer botón registrar
 * Version: 1.0
 * Author: María del Mar Ramonell
 * Author URI: http://viajesviatours.com
 * License: MIT
 */
    // Shortcode del div para flotar a un lado
    add_shortcode('pasajero', 'pasajero');
    // Función del shortcode para crear un div flotante:
    function pasajero() {
		
		$email=do_shortcode('[user-data field_name="Username"]' );

if(empty($email)){
     $resultado='
 <p style="text-align: left;"><a class="registrar2" href="/registro">Registrar</a></p>
<p style="text-align: left;"><a class="pasajero" href="/directorio/">Soy Pasajero</a></p>';
 return $resultado;
}

    }?>