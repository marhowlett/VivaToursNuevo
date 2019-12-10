<?php
/* Template name: Query Reservaciones*/
global $wpdb;
include ("../../../../wp-blog-header.php");
$agente = do_shortcode('[user-data]');
$result = $wpdb->get_results ("
    SELECT * 
    FROM wp_reservaciones
  " );

$return_array= array();
$info_habitacion2 = "";
$info_habitacion3 = "";
$info_habitacion4 = "";
$info_pax2_hab1   = "";
$info_pax3_hab1   = "";

foreach ( $result as $dato )
{

    if(!empty($dato->nompaxdoble1)){
        $info_pax2_hab1 =  "<br /><strong>Pax 2:</strong><br /> Nombre Pax: ".$dato->nompaxdoble1 
        ."<br /> Descuento: ".$dato->descuentodoble1
        ."<br /> Fecha de nacimiento: ".$dato->fechadoble1;
    }

    if(!empty($dato->nompaxtriple1)){
        $info_pax3_hab1 =  "<br /><strong>Pax 3:</strong><br /> Nombre Pax: ".$dato->nompaxtriple1 
        ."<br /> Descuento: ".$dato->descuentotriple1
        ."<br /> Fecha de nacimiento: ".$dato->fechatripe1;
    }

    if(!empty($dato->habitacion_2)){
        $info_habitacion2 = "<br /> Categoría: ".$dato->categoria_2
            ."<br /><strong>Pax 1:</strong><br /> Nombre Pax: ".$dato->nompaxsimple2 
            ."<br /> Descuento: ".$dato->descuentosimple2
            ."<br /> Fecha de nacimiento: ".$dato->fechasimple2;
        
            if(!empty($dato->nompaxdoble2)){
                $info_habitacion2 .=  "<br /><strong>Pax 2:</strong><br /> Nombre Pax: ".$dato->nompaxdoble2
                ."<br /> Descuento: ".$dato->descuentodoble2
                ."<br /> Fecha de nacimiento: ".$dato->fechadoble2;

            }

            if(!empty($dato->nompaxtriple2)){
                $info_habitacion2 .=  "<br /><strong>Pax 3:</strong><br /> Nombre Pax: ".$dato->nompaxtriple2
                ."<br /> Descuento: ".$dato->descuentotriple2
                ."<br /> Fecha de nacimiento: ".$dato->fechatripe2;
            }
            
    }

    if(!empty($dato->habitacion_3)){
        $info_habitacion3 = "<br /> Categoría: ".$dato->categoria_3
        ."<br /><strong>Pax 1:</strong><br /> Nombre Pax: ".$dato->nompaxsimple3
        ."<br /> Descuento: ".$dato->descuentosimple3
        ."<br /> Fecha de nacimiento: ".$dato->fechasimple3;

        if(!empty($dato->nompaxdoble3)){
            $info_habitacion3 .=  "<br /><strong>Pax 2:</strong><br /> Nombre Pax: ".$dato->nompaxdoble3
            ."<br /> Descuento: ".$dato->descuentodoble3
            ."<br /> Fecha de nacimiento: ".$dato->fechadoble3;
        }

        if(!empty($dato->nompaxtriple3)){
            $info_habitacion3 .=  "<br /><strong>Pax 3:</strong><br /> Nombre Pax: ".$dato->nompaxtriple3
            ."<br /> Descuento: ".$dato->descuentotriple3
            ."<br /> Fecha de nacimiento: ".$dato->fechatripe3;
        }
    }

    if(!empty($dato->habitacion_4)){
        $info_habitacion4 =  "<br /> Categoría: ".$dato->categoria_4
        ."<br /><strong>Pax 1:</strong><br /> Nombre Pax: ".$dato->nompaxsimple4
        ."<br /> Descuento: ".$dato->descuentosimple4
        ."<br /> Fecha de nacimiento: ".$dato->fechasimple3;

        if(!empty($dato->nompaxdoble4)){
            $info_habitacion4 .=  "<br /><strong>Pax 2:</strong><br /> Nombre Pax: ".$dato->nompaxdoble4
            ."<br /> Descuento: ".$dato->descuentodoble4
            ."<br /> Fecha de nacimiento: ".$dato->fechadoble4;
        }

        if(!empty($dato->nompaxtriple4)){
            $info_habitacion4 .=  "<br /><strong>Pax 3:</strong><br /> Nombre Pax: ".$dato->nompaxtriple4
            ."<br /> Descuento: ".$dato->descuentotriple4
            ."<br /> Fecha de nacimiento: ".$dato->fechatripe4;
        }
    }

   $return_array[] = array(
    'Correo' => $dato->correo_electronico,
    'Programa' => $dato->programa,   
    'No Habitaciones' => $dato->no_de_habitaciones,
    'Habitación 1' => $dato->habitacion_1 
        ."<br /> Categoría: ".$dato->categoria_1
        ."<br /><strong>Pax 1:</strong><br /> Nombre Pax: ".$dato->nompaxsimple1 
        ."<br /> Descuento: ".$dato->descuentosimple1
        ."<br /> Fecha de nacimiento: ".$dato->fechasimple3.$info_pax2_hab1.$info_pax3_hab1,      
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