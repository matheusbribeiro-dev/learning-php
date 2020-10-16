<div class="title">Parâmetros padrão</div>

<?php
    function hi($name = 'Senhor(a)', $lastName = 'Cliente') {
        return "Bem vindo, $name $lastName!<br>";
    }

    echo hi();
    echo hi(NULL);
    echo hi('Matheus');
    echo hi(NULL,'jeca');