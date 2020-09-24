<div class="title">Operadores lógicos</div>

<?php
    echo "<p class='division'>V ou F</p><hr>";
    var_dump(true);
    echo '<br>';
    var_dump(!true);

    echo "<p class='division'>Tabela verdade 'and' (E)</p><hr>";
    var_dump(true && true);
    var_dump(true && false);
    var_dump(false && true);
    var_dump(false && false);

    //outra forma de usar o (E)
    echo "<br>";
    var_dump(true and true);
    var_dump(true and false);
    var_dump(false and true);
    var_dump(false and false);

    echo "<p class='division'>Tabela verdade 'OR' (OU)</p><hr>";
    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || true);
    var_dump(false || false);

    //outra forma de usar o (ou)
    var_dump(true or true);
    var_dump(true or false);
    var_dump(false or true);
    var_dump(false or false);

    echo "<p class='division'>Tabela verdade 'XOR' (OU exclusivo)</p><hr>";
    var_dump(true xor true);//false
    var_dump(true xor false);//true
    var_dump(false xor true);//true
    var_dump(false xor false);//false

    echo "<p class='division'>Exemplo</p><hr>";
    $idade = 62;
    $sexo = 'F';

    if ($idade >= 60 && $sexo === 'F') {
        echo "Pode se aposentar -> $sexo";
    } elseif ($idade >= 65 && $sexo === 'M') {
        echo "Pode se aposentar -> $sexo";
    } else {
        echo 'Vai ter que trabalhar mais um pouco...';
    }
