<?php
$share_html = boldthemes_get_share_html( get_permalink(), 'tour', 'xsmall' );
bt_get_tour_options_data();
bt_get_tour_single_data( get_the_ID() );
?>
<article class="btTourSingleItemStandard gutter">
	<div class="port">
		<div class="btPostContentHolder">
			<div class="btArticleContent">
                                <?php 
                                $hide_headline = boldthemes_get_option( 'hide_headline' );
                                if ($hide_headline) {
                                    echo  boldthemes_get_tour_single_promo_title_html();
                                    echo  boldthemes_get_tour_single_info_html();                                    
                                }else{
                                    echo  boldthemes_get_tour_single_info_html();
                                    echo  boldthemes_get_tour_single_promo_title_html();
                                }
                                ?>                            
				<div class="btTourTabs bt_bb_tabs bt_bb_style_simple bt_bb_shape_square">
					<ul class="bt_bb_tabs_header">
                                                <?php if ( boldthemes_show_tour_information_tab() ) { ?>
						<li id="btTourInformationTab" class="on"><span><?php echo esc_html__( 'Information', 'travelicious' );?></span></li>
                                                <?php } ?>
                                               
                                                 <li id="btTourAdditionalInfoTab"><span><?php echo esc_html__( 'Hoteles, Fechas y Precios', 'travelicious' );?></span></li>
                                               
                                                <?php if ( boldthemes_show_tour_plan_tab() ) { ?>
                                                    <li id="btTourPlanTab"><span><?php echo esc_html__( 'Tour Plan', 'travelicious' );?></span></li>
                                                <?php } ?>
                                                <?php if ( boldthemes_show_tour_location_tab() ) { ?>
                                                    <li id="btTourLocationTab"><span><?php echo esc_html__( 'Location', 'travelicious' );?></span></li>
                                                <?php } ?>
                                                <?php if ( boldthemes_show_tour_gallery_tab() ) { ?>
                                                    <li id="btTourGalleryTab"><span><?php echo esc_html__( 'Gallery', 'travelicious' );?></span></li>
                                                <?php } ?>
                                                <?php if ( boldthemes_show_tour_reviews_tab() ) { ?>
                                                    <li id="btTourReviewsTab"><span><?php echo esc_html__( 'Reviews', 'travelicious' );?></span></li>
                                                <?php } ?>                                              
                                              
					</ul>
                                    
					<div class="bt_bb_tabs_tabs">
                                                <?php if ( boldthemes_show_tour_information_tab() ) { ?>
                                                    <div class="bt_bb_tab_item btTourInformationTab on">
                                                            <div class="bt_bb_tab_content">
                                                                    <?php echo boldthemes_get_tour_information_tab_html();?>								
                                                            </div>
                                                    </div>
                                                <?php } ?>
                                                
                                                    <div class="bt_bb_tab_item btTourAdditionalInfoTab">
                                                            <div class="bt_bb_tab_content">
                                                                    <?php echo boldthemes_get_tour_additional_info_tab_html();?>
                                                            </div>
                                                    </div>
                                            
                                                <?php if ( boldthemes_show_tour_plan_tab() ) { ?>
                                                    <div class="bt_bb_tab_item btTourPlanTab">
                                                            <div class="bt_bb_tab_content">
                                                                    <?php echo boldthemes_get_tour_plan_tab_html();?>
                                                            </div>
                                                    </div>
                                                <?php } ?>
                                                <?php if ( boldthemes_show_tour_location_tab() ) { ?>
                                                    <div class="bt_bb_tab_item btTourLocationTab">
                                                            <div class="bt_bb_tab_content">
                                                                    <?php echo boldthemes_get_tour_location_tab_html();?>
                                                            </div>
                                                    </div>
                                                <?php } ?>
                                                <?php if ( boldthemes_show_tour_gallery_tab() ) { ?>
                                                    <div class="bt_bb_tab_item btTourGalleryTab">
                                                            <div class="bt_bb_tab_content">
                                                                    <?php echo boldthemes_get_tour_gallery_tab_html();?>
                                                            </div>
                                                    </div>
                                                <?php } ?>
                                                <?php if ( boldthemes_show_tour_reviews_tab() ) { ?>
                                                    <div class="bt_bb_tab_item btTourReviewsTab">
                                                            <div class="bt_bb_tab_content">
                                                                    <?php echo boldthemes_get_tour_reviews_tab_html();?>
                                                            </div>
                                                    </div>
                                                <?php } ?>                                               
                                              
					</div>
				</div>
			</div>
			<div class="btArticleShareEtc">
				<div class="btTagsColumn">
					<div class="btTags">
                                                <?php echo wp_kses_post( boldthemes_get_post_tags_html() ); ?>
					</div>
				</div> 
                                <?php if ( $share_html != '' ) { ?>
                                    <div class="btShareColumn">
                                            <span class="btShareTitle"><?php echo esc_html__( 'Share on social networks', 'travelicious' );?></span>
                                            <?php echo '<div class="btShareColumn">' . wp_kses_post( $share_html ) . '</div><!-- /btShareColumn -->';?>
                                    </div>
                                <?php } ?>
			</div>                        
                        <div class="btTourBookBottom">
                            <?php if ( BoldThemesFrameworkTemplate::$tour_contact_form_booking_enquiry_show ) { ?>
                                <a href="#"><span class="btnInnerText"><?php echo esc_html__( 'Book this Tour', 'travelicious' );?></span></a>
                            <?php } ?>
                        </div>
		</div>
	</div>
</article>


