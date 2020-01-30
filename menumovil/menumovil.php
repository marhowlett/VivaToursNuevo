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
     $resultado='<nav>
			<ul>
				<li><a href="https://viajesvivatours.com/"><span class="icon-house"></span>Inicio</a></li>
				<li><a href="https://viajesvivatours.com/acerca-de-vivatours/"><span class="icon-suitcase"></span>Acerca de VivaTours</a></li>
				<li><a href="https://viajesvivatours.com/tips-de-viajes/"><span class="icon-suitcase"></span>Tips de Viaje</a></li>
                
                <li class="submenu">
					<a href="https://viajesvivatours.com/programacion-regular/">Programación Regular<span class="icon-dot"></span></a>
					<ul class="children">
						<li ><a href="https://viajesvivatours.com/mexico-2020/">México 2020</a></li>
		<li ><a href="https://viajesvivatours.com/europa-y-medio-oriente-2019-2020/">Europa Y Medio Oriente 2019-2020</a></li>
		<li ><a href="https://viajesvivatours.com/lejano-oriente-y-asia-central-2019-2020/">Lejano Oriente Y Asia Central 2019-2020</a></li>
		<li ><a href="https://viajesvivatours.com/turismo-religioso-2019-solo-grupos/">Turismo Religioso 2019 – Sólo Grupos</a></li>
					</ul>
				</li>
                
                
                <li class="submenu">
					<a href="https://viajesvivatours.com/salidas-especiales/">Salidas Especiales <span class="icon-dot"></span></a>
                        
                        <ul class="children">
						<li id="menu-item-5618" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5618"><a href="https://viajesvivatours.com/semana-santa-2020-europa/">Semana Santa Europa 2020</a></li>
		<li id="menu-item-8295" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8295"><a href="https://viajesvivatours.com/en-familia-2020/">En Familia 2020</a></li>
		<li id="menu-item-6118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6118"><a href="https://viajesvivatours.com/quinceaneras-por-europa-2020/">Quinceañeras Por Europa 2020</a></li>
		<li id="menu-item-6119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6119"><a href="https://viajesvivatours.com/europa-verano-2020/">Europa Verano 2020</a></li>
		<li id="menu-item-6745" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6745"><a href="https://viajesvivatours.com/viva-europa-para-solters-2020/">Viva Europa para Solter@s 2020</a></li>
		<li id="menu-item-6763" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6763"><a href="https://viajesvivatours.com/vive-tu-edad-dorada-2020/">Vive tu Edad Dorada 2020</a></li>
		<li id="menu-item-6783" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6783"><a href="https://viajesvivatours.com/vive-tu-fe-2020/">Vive tu Fe 2020</a></li>
		<li id="menu-item-6749" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6749"><a href="https://viajesvivatours.com/emiratos-arabes-unidos-turquia-egipto-israel-tailandia-y-combinados-2020/">Emiratos Arabes Unidos, Turquía, Egipto, Israel, Tailandia y Combinados 2020</a></li>
		<li id="menu-item-6764" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6764"><a href="https://viajesvivatours.com/india-nepal-dubai-y-combinados-2020/">India, Nepal, Dubai y Combinados 2020</a></li>
		<li id="menu-item-7333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7333"><a href="https://viajesvivatours.com/especial-mexico-2020/">México 2020</a></li>
					</ul>
				</li>
                <li id="menu-item-5912" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5912"><a href="https://viajesvivatours.com/beneficios/">Beneficios</a></li>
<li id="menu-item-3883" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3883"><a href="#contactoviva">Contáctenos</a></li>
                
                
			</ul>
		</nav>
     ';
 return $resultado;
}
        else {
           /* $resultado=do_shortcode('[login-logout-toggle login_redirect_page="/panel" logout_redirect_page="/"]');
 return $resultado;*/
            $resultado= '
            <nav class="panel">
			<ul>
				<li><a href="https://viajesvivatours.com/"><span class="icon-house"></span>Inicio</a></li>
				<li><a href="https://viajesvivatours.com/acerca-de-vivatours/"><span class="icon-suitcase"></span>Acerca de VivaTours</a></li>
				<li><a href="https://viajesvivatours.com/tips-de-viajes/"><span class="icon-suitcase"></span>Tips de Viaje</a></li>
				<li class="submenu">
					<a href="https://viajesvivatours.com/panel/">Programación Regular<span class="icon-dot"></span></a>
					<ul class="children">
						<li ><a href="https://viajesvivatours.com/mexico-2020/">México 2020</a></li>
		<li ><a href="https://viajesvivatours.com/europa-y-medio-oriente-2019-2020/">Europa Y Medio Oriente 2019-2020</a></li>
		<li ><a href="https://viajesvivatours.com/lejano-oriente-y-asia-central-2019-2020/">Lejano Oriente Y Asia Central 2019-2020</a></li>
		<li ><a href="https://viajesvivatours.com/turismo-religioso-2019-solo-grupos/">Turismo Religioso 2019 – Sólo Grupos</a></li>
					</ul>
				</li>
                
                
                <li class="submenu">
					<a href="https://viajesvivatours.com/salidas-especiales-panel/">Salidas Especiales <span class="icon-dot"></span></a>
                        
                        <ul class="children">
						<li id="menu-item-5618" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5618"><a href="https://viajesvivatours.com/semana-santa-2020-europa/">Semana Santa Europa 2020</a></li>
		<li id="menu-item-8295" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8295"><a href="https://viajesvivatours.com/en-familia-2020/">En Familia 2020</a></li>
		<li id="menu-item-6118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6118"><a href="https://viajesvivatours.com/quinceaneras-por-europa-2020/">Quinceañeras Por Europa 2020</a></li>
		<li id="menu-item-6119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6119"><a href="https://viajesvivatours.com/europa-verano-2020/">Europa Verano 2020</a></li>
		<li id="menu-item-6745" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6745"><a href="https://viajesvivatours.com/viva-europa-para-solters-2020/">Viva Europa para Solter@s 2020</a></li>
		<li id="menu-item-6763" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6763"><a href="https://viajesvivatours.com/vive-tu-edad-dorada-2020/">Vive tu Edad Dorada 2020</a></li>
		<li id="menu-item-6783" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6783"><a href="https://viajesvivatours.com/vive-tu-fe-2020/">Vive tu Fe 2020</a></li>
		<li id="menu-item-6749" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6749"><a href="https://viajesvivatours.com/emiratos-arabes-unidos-turquia-egipto-israel-tailandia-y-combinados-2020/">Emiratos Arabes Unidos, Turquía, Egipto, Israel, Tailandia y Combinados 2020</a></li>
		<li id="menu-item-6764" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6764"><a href="https://viajesvivatours.com/india-nepal-dubai-y-combinados-2020/">India, Nepal, Dubai y Combinados 2020</a></li>
		<li id="menu-item-7333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7333"><a href="https://viajesvivatours.com/especial-mexico-2020/">México 2020</a></li>
					</ul>
				</li>
                
				
				<li class="submenu">
					<a href="#"><span class="icon-rocket"></span>Información General<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="https://viajesvivatours.com/beneficios-panel">Beneficios <span class="icon-dot"></span></a></li>
						<li><a href="https://viajesvivatours.com/condiciones-de-colaboracion">Condiciones de Colaboración<span class="icon-dot"></span></a></li>
						<li><a href="https://viajesvivatours.com/descuentos-especiales-y-regalos/">Descuentos y Regalos <span class="icon-dot"></span></a></li>
						<li><a href="https://viajesvivatours.com/nuestros-servicios/">Nuestros Servicios <span class="icon-dot"></span></a></li>
							</ul>
				</li>
				<li><a href="https://viajesvivatours.com/contacto"><span class="icon-mail"></span>Contacto</a></li>
			</ul>
		</nav>';
                return $resultado;
        }

    }?>