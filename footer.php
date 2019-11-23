		</div><!-- /boldthemes_content -->
<?php

if ( BoldThemesFramework::$has_sidebar ) {
	include( get_parent_theme_file_path( 'sidebar.php' ) );
}

?>
	</div><!-- /contentHolder -->
</div><!-- /contentWrap -->

<footer>
    
    <section id="contactoviva" class="bt_bb_section bt_bb_top_spacing_medium bt_bb_bottom_spacing_medium bt_bb_layout_wide bt_bb_vertical_align_top bt_bb_background_image" style="background-image:url('https://previo.viajesvivatours.com/wp-content/uploads/2019/09/contac.jpg');"><div class="bt_bb_port"><div class="bt_bb_cell"><div class="bt_bb_cell_inner"><div class="bt_bb_row" data-structure="6-6"><div class="bt_bb_column col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_padding_normal" data-width="6"><div class="bt_bb_column_content"><div class="bt_bb_column_content_inner"><div class="bt_bb_text col"><section id="contacto"><img class="log alignnone wp-image-5715 size-full" src="https://previo.viajesvivatours.com/wp-content/uploads/2019/09/logo2.png" alt="" width="323" height="115" srcset="https://previo.viajesvivatours.com/wp-content/uploads/2019/09/logo2.png 323w, https://previo.viajesvivatours.com/wp-content/uploads/2019/09/logo2-320x115.png 320w" sizes="(max-width: 323px) 100vw, 323px"><p></p>
<div class="contenedor">
<div class="flex">
<div class="bloque">
<div class="grid datos">
<p><i class="icon"><img src="https://previo.viajesvivatours.com/wp-content/uploads/2019/02/reloj.png" alt="reloj"> </i></p>
<div class="info"><span class="datos">LUNES A VIERNES: 08:30 A 19:30<br>
SÁBADOS: 09:00 A 13:30</span></div>
</div>
<div class="grid datos">
<p><i class="icon"><img src="https://previo.viajesvivatours.com/wp-content/uploads/2019/02/telefono.png" alt="reloj"> </i></p>
<div class="info"><span class="datos">(+10 lineas) 313 56 03</span></div>
</div>
<div class="grid datos">
<p><i class="icon"><img src="https://previo.viajesvivatours.com/wp-content/uploads/2019/07/mapa-svg.png" alt="reloj"> </i></p>
<div class="info"><span class="datos">Xochicalco #201 Col. Reforma, C.P. 62260<br>
Cuernavaca, Mor., México</span></div>
</div>
<div class="grid datos">
<p><i class="icon"><img src="https://previo.viajesvivatours.com/wp-content/uploads/2019/07/mail-1.png" alt="reloj"> </i></p>
<div class="info"><a href="mailto:agencias@viajesvivatours.com?Subject=VivaTours."><span class="datos">agencias@viajesvivatours.com</span></a></div>
</div>
<div class="grid datos">
<div class="info"><span class="datos">Siguenos en </span></div>
<p><i class="icon2"><a href="https://www.instagram.com/viajesvivatours/" target="_blank" rel="noopener noreferrer"><img src="https://previo.viajesvivatours.com/wp-content/uploads/2019/02/instagramsvg.png" alt="reloj"></a> <a href="https://www.facebook.com/ViajesVivatours/" target="_blank" rel="noopener noreferrer"><img class="icon2" src="https://previo.viajesvivatours.com/wp-content/uploads/2019/02/facebook-svg.png" alt="reloj"></a></i></p>
</div>
</div>
</div>
</div>
</section>
</div></div></div></div><div class="bt_bb_column col2 col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_padding_double" data-width="6"><div class="bt_bb_column_content"><div class="bt_bb_column_content_inner"><header class="bt_bb_headline rosa3 bt_bb_font_weight_normal bt_bb_dash_none bt_bb_size_large bt_bb_align_inherit" style="color:#ffffff;border-color:#ffffff;"><h2 style="font-family: 'Bebas Neue'; letter-spacing: normal;"><span class="bt_bb_headline_content"><span><b>Contáctenos</b></span></span></h2></header><header class="bt_bb_headline rosa3 bt_bb_font_weight_normal bt_bb_dash_none bt_bb_size_large bt_bb_align_inherit" style=";font-family:'Montserrat';color:#ffffff;border-color:#ffffff;"><h2 style="font-family:'Montserrat'"><span class="bt_bb_headline_content"><span><strong>Agencia de Viajes</strong></span></span></h2></header><div class="bt_bb_text"><p style="text-align: center;">Registrate y comienza a recibir todos los beneficios que Vivatours tiene para ti.</p>
<?php echo do_shortcode('[login-logout-toggle login_redirect_page="/panel" logout_redirect_page="/"]');
    ?>
</div><div class="bt_bb_separator bt_bb_top_spacing_large bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div><div class="bt_bb_text"><p style="text-align: left;"><?php echo do_shortcode('[registrar]');
    ?>  </p>
<p class="olvidar" style="text-align: center;"><a href="http://previo.viajesvivatours.com/olvidar-contrasena/">¿Olvidaste tu contraseña?</a></p>
<p class="poli2" style="text-align: right;"><a href="http://previo.viajesvivatours.com/aviso-de-privacidad/">Política de Privacidad</a></p>
<p class="poli" style="text-align: right;"><a href="mailto:uriel@viajesvivatours.com?Subject=Problemas con el inicio de sesión. "> ¿Problemas con el inicio se sesión? Clic aquí.</a></p>
</div></div></div></div></div></div></div></div></section>
</footer>

</div><!-- /pageWrap -->
<?php
if ( function_exists( 'bt_get_tour_options_data' ) ) {
      get_template_part( 'views/forms' );
}

wp_footer();
?>
</body>
</html>