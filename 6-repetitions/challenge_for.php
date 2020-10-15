<div class="title">Desafio For</div>

<!--
    #
    ##
    ###
    ####
    #####
-->

<?php
    $output = '';

    for($i = 1; $i <= 5; $i++) {
        $output .= '#';
        echo "$output <br>";
    }

    echo '<hr>';
    for($print = '#'; $print !== '######'; $print .= '#') {
        echo "$print <br>";
    }