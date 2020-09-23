<div class="title">Operadores relacionais</div>

<?php
    // var_dump(1 == 1);//== comparador
    // var_dump(1 > 1);// > maior que
    // var_dump(1 >= 1);// >= maior/igual
    // var_dump(4 < 23);
    // var_dump(1 <= 7);
    // var_dump(1 <> 1);// <> diferente
    // var_dump(1 != 1);// != diferente

    //casos de uso
    var_dump(1 == '1');
    var_dump(1 === '1');//igualdade estrita. compara tanto valor quanto tipo
    var_dump(1 != '1');
    var_dump(1 !== '1');//true

    echo "<p>Relacionais no if/Else</p><hr>";
    $idade = 20;

    if($idade < 18) {
        echo "Menor de idade<br>";
    } else if($idade < 65) {
        echo "Adulto<br>";
    } else {
        echo "Terceira idade";
    }
