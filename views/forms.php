<?php
bt_get_tour_options_data();
bt_get_tour_single_data( get_the_ID() );

$tour_contact_form_booking_shortcode = '';
if ( BoldThemesFrameworkTemplate::$tour_contact_form_booking != 0 ) {
    $args = array('p' => BoldThemesFrameworkTemplate::$tour_contact_form_booking, 'post_type' => 'wpcf7_contact_form');
    $tour_contact_form_booking = new WP_Query($args);
    $tour_contact_form_booking_id       = isset($tour_contact_form_booking->posts[0]) ? $tour_contact_form_booking->posts[0]->ID : '';
    $tour_contact_form_booking_title    = isset($tour_contact_form_booking->posts[0]) ? $tour_contact_form_booking->posts[0]->post_title : '';     
    $tour_contact_form_booking_shortcode = '[contact-form-7 id="' . esc_attr($tour_contact_form_booking_id) . '" title="' . esc_attr($tour_contact_form_booking_title) . '"]';
}

$tour_contact_form_enquiry_shortcode = '';
if ( BoldThemesFrameworkTemplate::$tour_contact_form_enquiry != 0 ) {     

    // Se determina el tipo de formulario a mostrar
    $tipo_form = rwmb_meta('tour_tipoform');
    
    if($tipo_form == "contacto"){
        $tour_contact_form_enquiry_shortcode = '[caldera_form id="CF5d813a2c6145f"]';
        $titulo = "Formulario de Contacto";
    }
    else{
        $nombre_agencia = do_shortcode('[user-data field_name="Nombre de la agencia"]');
        $telefono_agencia = do_shortcode('[user-data field_name="Teléfono"]');
        $correo_agencia = do_shortcode('[user-data]');
        $tour_contact_form_enquiry_shortcode = '[caldera_form id="CF5d812d2421d11" fld_6413272 = "'.$nombre_agencia.'" fld_7034478 = "'.$telefono_agencia.'" fld_8498145 = "'.$correo_agencia.'"]';
        $titulo = "Formulario de Reservación";
    }
    
}

if ( BoldThemesFrameworkTemplate::$tour_contact_form_booking_enquiry_show ) {
?>
    <div id="bt-forms-container-modal-overlay" class="bt-forms-container-modal-overlay"></div>
    <div id="bt-forms-container-modal" class="bt-forms-container-modal">
        <span class="bt-forms-container-modal-close"><a href="#">Cerrar</a></span>

        <div class="bt-forms-container-modal-inner">
                    <div class="bt-forms-container-modal-inner-sleeve">
                            
                        <h3><?php echo BoldThemesFrameworkTemplate::$title;?></h3>                       
                            <?php if ( ($tour_contact_form_booking_shortcode != '' && BoldThemesFrameworkTemplate::$tour_contact_form_booking_show) || ( $tour_contact_form_enquiry_shortcode != '' && BoldThemesFrameworkTemplate::$tour_contact_form_enquiry_show ) ) { ?>
                                <div class="btFormTabs">
                                    <?php if ( $tour_contact_form_booking_shortcode != '' && BoldThemesFrameworkTemplate::$tour_contact_form_booking_show ) { ?>
                                        <a href="#bt-form-booking-container" class="bt-forms-container-toggle bt-tab-on"><span><?php echo esc_html__( 'Book this Tour', 'travelicious' ); ?></span></a>
                                    <?php } ?>
                                    <?php if ( $tour_contact_form_enquiry_shortcode != '' && BoldThemesFrameworkTemplate::$tour_contact_form_enquiry_show ) { ?>
                                        <a href="#bt-form-enquiry-container"  class="bt-forms-container-toggle"><span><?php echo esc_html__( 'Enquiry about the Tour', 'travelicious' ); ?></span></a>
                                    <?php } ?>
                                </div>
                                <div class="bt_bb_text btForms">				
                                       <?php 
                                            if ( $tour_contact_form_booking_shortcode != '' && BoldThemesFrameworkTemplate::$tour_contact_form_booking_show) {
                                                echo '<div id="bt-form-booking-container"  class="bt-form-booking-container">';
                                                    echo do_shortcode( $tour_contact_form_booking_shortcode );
                                                echo '</div>';
                                            }                                                                 
                                            if ( $tour_contact_form_enquiry_shortcode != '' && BoldThemesFrameworkTemplate::$tour_contact_form_enquiry_show ) {
                                                echo '<div id="bt-form-enquiry-container" class="bt-form-enquiry-container">';
                                                    echo do_shortcode( $tour_contact_form_enquiry_shortcode );
                                                echo '</div>';
                                            }
                                        ?>
                                </div>
                            <?php }else{ ?>
                                <div class="btFormTabs">
                                    <p><?php echo esc_html__( 'Sorry! There are no enabled booking or enquiry forms.', 'travelicious' )?></p>
                                </div>
                            <?php } ?>
                    </div>
        </div>
    </div>
<?php
}

