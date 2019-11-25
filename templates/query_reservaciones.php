<?php
/* Template name: Query Reservaciones*/
global $wpdb;

$agente = do_shortcode('[user-data]');
$result = $wpdb->get_results ("
    SELECT * 
    FROM wp_reservaciones
  " );

$return_array= array();
$info_habitacion2 = "";
$info_habitacion3 = "";
$info_habitacion4 = "";

foreach ( $result as $dato )
{

    if(!empty($dato->habitacion_2)){
        $info_habitacion2 = "<br /> Categoría: ".$dato->categoria_2
            ."<br /> Nombre Pax: ".$dato->nombre_pax_2 
            ."<br /> Descuento: ".$dato->descuento_2
            ."<br /> Fecha de nacimiento: ".$dato->fecha_de_nacimiento_2;
    }

    if(!empty($dato->habitacion_3)){
        $info_habitacion3 = "<br /> Categoría: ".$dato->categoria_3
        ."<br /> Nombre Pax: ".$dato->nombre_pax_3
        ."<br /> Descuento: ".$dato->descuento_3
        ."<br /> Fecha de nacimiento: ".$dato->fecha_de_nacimiento_3;
    }

    if(!empty($dato->habitacion_4)){
        $info_habitacion4 =  "<br /> Categoría: ".$dato->categoria_4
        ."<br /> Nombre Pax: ".$dato->nombre_pax_4
        ."<br /> Descuento: ".$dato->descuento_4
        ."<br /> Fecha de nacimiento: ".$dato->fecha_de_nacimiento_4;
    }

   $return_array[] = array(
    'Programa' => $dato->programa,   
    'No Habitaciones' => $dato->no_de_habitaciones,
    'Habitación 1' => $dato->habitacion_1 
        ."<br /> Categoría: ".$dato->categoria_1
        ."<br /> Nombre Pax: ".$dato->nombre_pax_1 
        ."<br /> Descuento: ".$dato->descuento_1
        ."<br /> Fecha de nacimiento: ".$dato->fecha_de_nacimiento_1,      
    'Habitación 2' => $dato->habitacion_2.$info_habitacion2,
    'Habitación 3' => $dato->habitacion_3.$info_habitacion3,
    'Habitación 4' => $dato->habitacion_4.$info_habitacion4,
    'Comentarios' => $dato->comentarios

);

$info_habitacion2 = $info_habitacion3 = $info_habitacion4 = "";
  
 
}

// Now the array is prepared, we just need to serialize and output it
echo serialize( $return_array );

?>