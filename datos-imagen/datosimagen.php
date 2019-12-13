<?php
//revisado
/**
 * Plugin Name: Datos de Imagen FE-USERS
 * Plugin URI: https://viajesviatours.com
 * Description: Datos de las agencias para obtener imagen
 * Version: 1.0
 * Author: María del Mar Ramonell
 * Author URI: http://viajesviatours.com
 * License: MIT
 */
    // Shortcode del div para flotar a un lado
    add_shortcode('datosimagen', 'datosimagen');
    // Función del shortcode para crear un div flotante:
    function datosimagen() {
	
    $imagen=do_shortcode('[user-data field_name="Logotipo"]' );
  

/*if(empty($imagen)){
  echo "<h3>Por favor complete sus datos<h3>";
  echo "<a href='https://previo.viajesvivatours.com/perfil/' class='button'>Actualizar Información</a>";
}else{*/
  $resultado='
 <img class="logo2" src="https://viajesvivatours.com/wp-content/uploads/ewd-feup-user-uploads/'.$imagen.'" width="200" height="200" style="">';
 return $resultado;
/*}*/

    }?>
