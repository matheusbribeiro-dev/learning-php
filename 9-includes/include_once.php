<div class="title">Include Once</div>

<?php
include 'include_once_arq.php';

echo "Variável = '{$var}'.<br>";
$var = 'Var alterada';
echo "Variável = '{$var}'.<br>";

include 'include_once_arq.php';
echo "Variável = '{$var}'.<br>";

$var = 'Var alterada';
echo "Variável = '{$var}'.<br>";

include_once 'include_once_arq.php'; /*Não será incluso pois o include_oce serve para garantir que a inclusão
de um arquivo aconteça uma só vez. Neste caso ele entendeu que a inlcusão já aconteceu e por isso não incluirá
novamente */

echo "Variável = '{$var}'.<br>";

require_once 'include_once_arq.php';
echo "Variável = '{$var}'.<br>";