<div class="title">Desafio Equação</div>

<?php
    //lado superior esquerdo da imagem
    $a = ((6 * (3 + 2))**2)/(3 * 2);
    
    //lado superior direito da imagem
    $b = (((1 - 5) * (2 - 7))/2)**2;
    
    //resultado
    $result = (($a - $b)**3)/(10**3);

    echo '<p>Resultado da equação: </p>';
    echo $result;