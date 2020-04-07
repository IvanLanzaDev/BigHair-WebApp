<?php

    $link = mysqli_connect( "localhost", "u640958987_bighair", "bighair@2020" );
        if($link) {
            mysqli_select_db( $link, "u640958987_bighair" );
        }else{ echo "Erro DB"; }

?>