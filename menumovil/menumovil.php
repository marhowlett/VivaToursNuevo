<?php

//revisado
/**
 * Plugin Name: Menú Movil
 * Plugin URI: http://viajesviatours.com
 * Description: Aparecer o desaparecer botón registrar
 * Version: 1.0
 * Author: María del Mar Ramonell
 * Author URI: http://viajesviatours.com
 * License: MIT
 */
    // Shortcode del div para flotar a un lado
    add_shortcode('menumovil', 'menumovil');
    // Función del shortcode para crear un div flotante:
    function menumovil() {
		
		$email=do_shortcode('[user-data field_name="Username"]' );

if(empty($email)){
     $resultado='
     
 <span > <strong>¡Inicia tu sesión ahora!</strong></span>
 
 ';
 return $resultado;
}
        else {
           /* $resultado=do_shortcode('[login-logout-toggle login_redirect_page="/panel" logout_redirect_page="/"]');
 return $resultado;*/
            $resultado= '
            <h2 class="men">Panel de Agente</h2>
            <nav>
			<ul>
				<li><a href="https://viajesvivatours.com/"><span class="icon-house"></span>Inicio</a></li>
				<li><a href="https://viajesvivatours.com/acerca-de-vivatours/"><span class="icon-suitcase"></span>Acerca de VivaTours</a></li>
				<li><a href="https://viajesvivatours.com/tips-de-viajes/"><span class="icon-suitcase"></span>Tips de Viaje</a></li>
				<li class="submenu">
					<a href="#"><span class="icon-rocket"></span>Nuestra Programación<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="https://viajesvivatours.com/panel/">Programación Regular <span class="icon-dot"></span></a></li>
						<li><a href="https://viajesvivatours.com/salidas-especiales-panel/">Salidas Especiales <span class="icon-dot"></span></a></li>
					</ul>
				</li>
				<li><a href="https://viajesvivatours.com/tours/?bt_tour_search_list_count"><span class="icon-earth"></span>Buscador de Tours</a></li>
				<li class="submenu">
					<a href="#"><span class="icon-rocket"></span>Kits de Herramientas<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="https://viajesvivatours.com/material-sin-logo">Material Descargable <span class="icon-dot"></span></a></li>
						<li><a href="https://viajesvivatours.com/webinars-2020/">Webinars <span class="icon-dot"></span></a></li>
						<li><a href="https://viajesvivatours.com/fam-trips">Fam Trips <span class="icon-dot"></span></a></li>
					</ul>
				</li>
				<li><a href="https://viajesvivatours.com/reservaciones"><span class="icon-mail"></span>Mis Reservaciones</a></li>
				<li class="submenu">
					<a href="#"><span class="icon-rocket"></span>Información General<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="https://viajesvivatours.com/beneficios-panel">Beneficios <span class="icon-dot"></span></a></li>
						<li><a href="https://viajesvivatours.com/condiciones-de-colaboracion">Condiciones de Colaboración<span class="icon-dot"></span></a></li>
						<li><a href="https://viajesvivatours.com/descuentos-especiales-y-regalos/">Descuentos y Regalos <span class="icon-dot"></span></a></li>
						<li><a href="https://viajesvivatours.com/nuestros-servicios/">Nuestros Servicios <span class="icon-dot"></span></a></li>
						<li><a href="https://viajesvivatours.com/operadores">Operadores <span class="icon-dot"></span></a></li>
					</ul>
				</li>
				<li><a href="https://viajesvivatours.com/contacto"><span class="icon-mail"></span>Contacto</a></li>
			</ul>
		</nav>';
                return $resultado;
        }

    }?>