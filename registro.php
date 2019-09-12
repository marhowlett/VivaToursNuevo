<?php
//revisado
/**
 * Plugin Name: Botón registrar
 * Plugin URI: http://viajesviatours.com
 * Description: Aparecer o desaparecer botón registrar
 * Version: 1.0
 * Author: María del Mar Ramonell
 * Author URI: http://viajesviatours.com
 * License: MIT
 */
    // Shortcode del div para flotar a un lado
    add_shortcode('registrar', 'registrar');
    // Función del shortcode para crear un div flotante:
    function registrar() {
		
		$email=do_shortcode('[user-data field_name="Username"]' );

if(empty($email)){
     $resultado='
 <a class="registrar" href="https://previo.viajesvivatours.com/registro">Registrar</a>';
 return $resultado;
}

    }?>