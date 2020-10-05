<div class="title">Switch</div>

<?php
    $categories = 'Luxo';
    $price = 0.0;
    $car = '';

    /*Lógica com if*/
    if($categories === 'Luxo'){
        $car = 'Mercedes';
        $price = 250000;

    } elseif($categories === 'SUV') {
        $car = 'Renegade';
        $price = 80000;

    } elseif($categories === 'Sedan') {
        $car = 'Etios';
        $price = 55000;

    } else {
        $car = 'Mobi';
        $price = 33000;
    }

    $formattedPrice = number_format($price, 2, '.', ',');/*
    https://www.php.net/manual/pt_BR/function.number-format.php*/

    echo "<p>
        Carro: $car<br>
        Preço: R$ $formattedPrice
    </p>";

    $categories = 'SeDan';
    /*Lógica com switch */
    switch(strtolower($categories)) {
        case 'luxo':
            $car = 'Mercedes';
            $price = 250000;
        break;

        case 'suv': case 'suv básico':
            $car = 'Renegade';
            $price = 80000;
        break;

        case 'sedan':
            $car = 'Etios';
            $price = 55000;
        break;

        default:
            $car = 'Mobi';
            $price = 33000;
        break;
    }

    $formattedPrice = number_format($price, 2, '.', ',');
    echo "<p>
        Carro: $car<br>
        Preço: R$ $formattedPrice
    </p>";