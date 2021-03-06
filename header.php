<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> <?php boldthemes_theme_data(); ?>>
<head>
<?php

	boldthemes_set_override();
	boldthemes_header_init();
	boldthemes_header_meta();

	$body_style = '';

	$page_background = boldthemes_get_option( 'page_background' );
	if ( $page_background ) {
		if ( is_numeric( $page_background ) ) {
			$page_background = wp_get_attachment_image_src( $page_background, 'full' );
			$page_background = $page_background[0];
		}
		$body_style = ' style="background-image:url(' . $page_background . ')"';
	}

	$header_extra_class = ''; 

	if ( boldthemes_get_option( 'boxed_menu' ) ) {
		$header_extra_class .= 'gutter ';
	}
        
       wp_head();      
       ?>
</head>

<body <?php body_class(); ?> <?php echo wp_kses_post( $body_style ); ?>>
   
<?php 

echo boldthemes_preloader_html(); ?>

<div class="btPageWrap" id="top">
	
    <div class="btVerticalHeaderTop">
		<?php if ( has_nav_menu( 'primary' ) ) { ?>
		<div class="btVerticalMenuTrigger">&nbsp;<?php echo boldthemes_get_icon_html( array( "icon" => "fa_f0c9", "url" => "#" ) ); ?></div>
		<?php } ?>	
		<div class="btLogoArea">
		   
			<div class="logo">
			  
				<span>
					<?php boldthemes_logo( 'header' ); ?>
				</span>
			</div><!-- /logo -->
		</div><!-- /btLogoArea -->
	</div>
   
	<header class="mainHeader btClear <?php echo esc_attr( $header_extra_class ); ?>">
		<div class="mainHeaderInner">
			<?php echo boldthemes_top_bar_html( 'top' ); ?>
			<div class="btLogoArea menuHolder btClear">
				<div class="port">
					<?php if ( has_nav_menu( 'primary' ) ) { ?>
						<div class="btHorizontalMenuTrigger">&nbsp;<?php echo boldthemes_get_icon_html( array( "icon" => "fa_f0c9", "url" => "#" ) ); ?></div>
					<?php } ?>
					
					<div class="lap">
				<div class="headerviva">
<span class="cambio">Tipo de cambio a <?php 
    date_default_timezone_set('America/Mexico_City');
    //Dia-Mes-Año Hora:Minutos:Segundos
$fecha = date('d-m-Y');
    
    
    
    echo ($fecha);
    ?></span> <span class="cambio"> <img src="https://viajesvivatours.com/wp-content/uploads/2019/09/dollar.png" alt="" width="23" height="23" class="alignnone size-full wp-image-5726" /> 1  USD = <?php echo do_shortcode('[sc name="Costo del dollar"]');
    ?> moneda nacional</span> <span class="cambio"> <img src="https://viajesvivatours.com/wp-content/uploads/2019/09/euro.png" alt="" width="23" height="23" class="alignnone size-full wp-image-5725" />1 Euro = <?php echo do_shortcode('[sc name="Costo del euro"]');
    ?> moneda nacional</span> <?php echo do_shortcode('[headerviva]'); ?> <a class="buscar" href="https://viajesvivatours.com/tours/?bt_tour_search_list_count"><img src="https://viajesvivatours.com/wp-content/uploads/2019/10/search.png" alt="" width="23" height="23" class="alignnone size-full wp-image-5725" /></a>
</div>
                <div class="avisoheader">
                    <p>Nos encontramos actualizando todos nuestros programas, por lo que te agradeceremos
corrobores con nosotros la información de tu interés.</p>
                </div>
                
                </div>
					<div class="logo">
					
						<span>
							<?php boldthemes_logo( 'header' ); ?>
						</span>
					</div><!-- /logo -->
					<?php 
                                       
						$menu_type = boldthemes_get_option( 'menu_type' );
						if ( $menu_type == 'horizontal-below-right' || $menu_type == 'horizontal-below-center' || $menu_type == 'horizontal-below-left' || $menu_type == 'vertical-left' || $menu_type == 'vertical-right' ) {
							echo boldthemes_top_bar_html( 'logo' );
							echo '</div><!-- /port --></div><!-- /menuHolder -->';
							echo '<div class="btBelowLogoArea btClear"><div class="port">';
						}
					?>
					<div class="menuPort lap">
						<?php echo boldthemes_top_bar_html( 'menu' ); ?>
						<nav>
							<?php boldthemes_nav_menu(); ?>
						</nav>
					</div><!-- .menuPort -->
					<div class="menuPort movil cel ">
                   <div class="headerviva">
<span class="cambio">Tipo de cambio a <?php 
    date_default_timezone_set('America/Mexico_City');
    //Dia-Mes-Año Hora:Minutos:Segundos
$fecha = date('d-m-Y');
    
    
    
    echo ($fecha);
    ?></span> <span class="cambio"> <img src="https://viajesvivatours.com/wp-content/uploads/2019/09/dollar.png" alt="" width="23" height="23" class="alignnone size-full wp-image-5726" /> 1  USD = <?php echo do_shortcode('[sc name="Costo del dollar"]');
    ?> moneda nacional</span> <span class="cambio"> <img src="https://viajesvivatours.com/wp-content/uploads/2019/09/euro.png" alt="" width="23" height="23" class="alignnone size-full wp-image-5725" />1 Euro = <?php echo do_shortcode('[sc name="Costo del euro"]');
    ?> moneda nacional</span> <?php echo do_shortcode('[headerviva]'); ?>
    
   

</div>
                    <div class=" celular">
                     <?php echo do_shortcode('[login-logout-toggle login_redirect_page="/panel" logout_redirect_page="/"]'); ?>
                    <?php echo do_shortcode('[menumovil]');?>
                   
                  
            <!--  <div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
		</div>-->
 
		
                   </div>
					</div>
				</div><!-- /port -->
			</div><!-- /menuHolder / btBelowLogoArea -->
		</div><!-- / inner header for scrolling -->
    </header><!-- /.mainHeader -->
	<div class="btContentWrap btClear">
		<?php 
               
		$hide_headline = boldthemes_get_option( 'hide_headline' );
		if ( ( ( ! $hide_headline && ! is_404() ) || is_search() ) ) {
			boldthemes_header_headline( array( 'breadcrumbs' => true ) ); 
		}
                
               
		?>
		<?php if ( BoldThemesFramework::$page_for_header_id != '' && ! is_search() ) { ?>
			<?php
				$content = get_post( BoldThemesFramework::$page_for_header_id );                                
				$top_content = $content->post_content;
				if ( $top_content != '' ) {
					$top_content = do_shortcode( $top_content );
					$top_content = preg_replace( '/data-edit_url="(.*?)"/s', 'data-edit_url="' . get_edit_post_link( BoldThemesFramework::$page_for_header_id, '' ) . '"', $top_content );
					echo '<div class = "btBlogHeaderContent">' . str_replace( ']]>', ']]&gt;', $top_content ) . '</div>';
				}
				
			?>
		<?php } ?>
		<div class="btContentHolder">
			
			<div class="btContent">
			