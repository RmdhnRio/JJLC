<?php

/**
 * Debugging
 *
 * @param $data
 * @param bool $exit
 */


function debug( $data,$exit=true,$format="array" ) {

    echo "<pre>";
    if($format=="json"){
        echo json_encode($data);
    }else{
        var_dump($data);
    }

    echo"</pre>";
    if($exit)
    {
        exit;
    }

}