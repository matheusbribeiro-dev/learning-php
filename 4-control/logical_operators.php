<div class="title">Operadores lógicos</div>

<?php
    echo "<p>V ou F</p><hr>";
    var_dump(true);
    echo '<br>';
    var_dump(!true);

    echo "<p>Tabela verdade 'and' (E)</p><hr>";
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

    echo "<p>Tabela verdade 'OR' (OU)</p><hr>";
    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || true);
    var_dump(false || false);

    //outra forma de usar o (ou)
    var_dump(true or true);
    var_dump(true or false);
    var_dump(false or true);
    var_dump(false or false);

    echo "<p>Tabela verdade 'XOR' (OU exclusivo)</p><hr>";
    var_dump(true xor true);//false
    var_dump(true xor false);//true
    var_dump(false xor true);//true
    var_dump(false xor false);//false
?>

<style>
    p {
        margin-bottom: 0;
        font-weight: bold;
    }

    hr {
        margin-top: 0;
    }
</style>