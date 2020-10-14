<div class="title">Desafio Sorteio</div>

<?php
    $names = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];

    $nameDraw = $names[array_rand($names)];
    echo "<h1>$nameDraw</h1>";