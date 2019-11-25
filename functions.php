<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_parent_theme_file_uri( 'style.css' ) );
    wp_enqueue_style( 'child-style',
        get_theme_file_uri( 'style.css' ),
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style( 'component_menu',
        get_theme_file_uri( 'css/component.css' ),
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function theme_js() {
    wp_enqueue_script( 'modernizr_custom', get_stylesheet_directory_uri() . '/js/modernizr-custom.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'classie', get_stylesheet_directory_uri() . '/js/classie.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
    
}

add_action('wp_enqueue_scripts', 'theme_js');


if ( ! class_exists( 'BoldThemesFrameworkTemplate' ) ) {
	// Override BoldThemesFrameworkTemplate class
	class BoldThemesFrameworkTemplate {
		public static $blog_author;
		public static $blog_date;
		public static $author_url;
		public static $show_comments_number;
		public static $blog_use_dash;
		public static $class_array;
		public static $blog_side_info;
		public static $media_html;
		public static $categories_html;
		public static $tags_html;
		public static $content_final_html;
		public static $post_format;
		public static $content_html;
		public static $meta_html;
		public static $dash;
		public static $cf;
		public static $pf_use_dash;
		public static $tour_use_dash;
                
		public static $tour_single_author_review;
		
		public static $tour_grid_gallery_columns;
		public static $tour_grid_gallery_gap;
        public static $tour_rwmb_fechas_de_salida;
        public static $tour_rwmb_suplementos;
        public static $tour_rwmb_viva_plus;
        public static $tour_rwmb_precios;
		public static $media_image_html;
		public static $media_video_html;
		public static $media_audio_html;

		public static $title;
		public static $author;
		public static $status;
		public static $name;
		public static $parent;
		public static $guid;
		public static $supertitle;
		public static $subtitle;
		public static $extra_class;
		public static $parallax;
		public static $parallax_class;
		public static $excerpt;
		public static $content;
		public static $tour_price;
		public static $tour_faq;
                
		public static $feat_image;
		public static $feat_image_tour_list;
		public static $feat_image_large_square;
		public static $feat_image_boldthemes_tour_medium_rectangle;

		public static $tour_category;
		public static $tour_categories;
		public static $tour_tag;
		public static $tour_tags;
		public static $tour_region;
		public static $tour_regions;
		public static $tour_destination;
		public static $tour_destinations;
		public static $tours;
		public static $tours_similiar;
		public static $found;
		public static $posts_per_page;
		public static $max_page;
		public static $limit;
		public static $custom_map_style;
		public static $tour_custom_map_style;
		public static $order_by;

		public static $tour_pin_normal;
		public static $tour_pin_selected;
		public static $tour_default_image;

		public static $tour_list_view;
		public static $tour_list_grid_view;
		public static $tour_grid_columns;
		public static $tour_search_action_type;
		public static $tour_listing_pagination;
		public static $paged;

		public static $keyword;
		public static $location;

		public static $tour_gets = array();
		public static $tour_grid_nearby_category;

		public static $tour_search_distance_unit;
		public static $tour_distance_max;

		public static $tour_search_autocomplete;
		public static $location_autocomplete_distance;

		public static $bt_bb_tour_field_my_lat;
		public static $bt_bb_tour_field_my_lng;
		public static $bt_bb_tour_field_my_lat_default;
		public static $bt_bb_tour_field_my_lng_default;
		public static $bt_bb_tour_field_distance;
		public static $bt_bb_tour_field_location_autocomplete;

		public static $tour_root_slug;                
		public static $currency_symbol;
		public static $tour_currency_before_price;

		public static $tour_comments_number;

		public static $post_user_rating;

		public static $tour_list_count;
		public static $tour_similar_tours_list_count;
		public static $tour_similar_tours_list_number;

		public static $tour_single_design;

		public static $tour_similar_tours_list_gap;
		public static $tour_similar_tours_list_columns;
		public static $tour_similar_tours_list_by_type;

		public static $tour_api_key;
		public static $tour_gmap_zoom;
		public static $tour_gmap_lat;
		public static $tour_gmap_lng;

		public static $tour_currency;

		public static $tour_search_show_categories;
		public static $tour_search_show_only_months;
		public static $tour_search_date_before_after_days;

		public static $tour_contact_form_booking;
		public static $tour_contact_form_enquiry;
		public static $tour_contact_form_booking_show;
		public static $tour_contact_form_enquiry_show;
		public static $tour_contact_form_booking_enquiry_show;

		public static $datepicker_format;
		public static $search_date_format;
		public static $search_show_months;

		public static $tour_single_user_review;
                
		// tour meta boxes
		
		public static $tour_rwmb_map;
		public static $tour_rwmb_lat;
		public static $tour_rwmb_lng;
		public static $tour_rwmb_zoom;
		public static $tour_rwmb_map_embed;
		public static $tour_rwmb_map_file;
		public static $tour_rwmb_start_location;
		public static $tour_rwmb_departure_location;
		public static $tour_rwmb_return_location;
		public static $tour_rwmb_destination;
		public static $tour_rwmb_destination_text;                
		
		public static $tour_rwmb_supertitle;
		public static $tour_rwmb_title;
		public static $tour_rwmb_subtitle;
		public static $tour_rwmb_regular_price;
		public static $tour_rwmb_original_price;
		public static $tour_rwmb_discount_title;
		public static $tour_rwmb_travellers;
		public static $tour_rwmb_time;
		public static $tour_rwmb_duration;
		
		public static $tour_rwmb_images;
		public static $tour_rwmb_featured_images;
		public static $tour_rwmb_featured_video;
		
		public static $tour_rwmb_dt;
		public static $tour_rwmb_dt_text;
		public static $tour_rwmb_dt_format;
		public static $tour_rwmb_price_include;
		public static $tour_rwmb_price_no_include;
		public static $tour_rwmb_plan;
		public static $tour_rwmb_location_description;
		
		
		public static $tour_rwmb_plan_title;
		public static $tour_rwmb_plan_headline;
		public static $tour_rwmb_plan_description;
		
		public static $tour_rwmb_additional_prices;
		public static $tour_rwmb_additional_info;
		public static $tour_rwmb_additional_custom;
		
		public static $search_limit;
		public static $search_orderby;
		public static $search_order;
		public static $search_keyword;
		public static $search_destination;
		public static $search_start_date;
		public static $search_price_from;
		public static $search_price_to;
		public static $search_categories;
		public static $search_sorting;
	}
}

?>