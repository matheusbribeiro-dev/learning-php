<div class="title">Dtas #02</div>

<?php
/*Definindo o time zone */
$tz = new DateTimeZone('America/Sao_Paulo');

$dateFormat1 = 'D, d \d\e M \d\e Y';
$dateFormat2 = '%A, %d de %B de %Y';
$dateTimeFormat = '%A, %d de %B de %Y - %H:%M:%S';

$now = new DateTime(null, $tz);

print_r($now);
echo '<br>';

echo $now->format($dateFormat1) . '<br>';

setlocale(LC_TIME, 'pt-br', 'portuguese.utf-8', 'pt-br', 'pt_BR', 'pt_BR.utf-8', 'portuguese');

echo strftime($dateFormat2, $now->getTimestamp()) . '<br>';

$fixedDate = new DateTime('1975-01-25 15:30:50', $tz);
echo strftime($dateFormat2, $fixedDate->getTimestamp()) . '<br>';

$tomorrow = new DateTime('+1 day', $tz);
echo strftime($dateFormat2, $tomorrow->getTimestamp()) . '<br>';


$tomorrow->modify('+1 day');
echo strftime($dateFormat2, $tomorrow->getTimestamp()) . '<br>';

$tomorrow->setDate(2000, 7, 02);
echo strftime($dateFormat2, $tomorrow->getTimestamp()) . '<br>';

$lastDate = new DateTime('2000-05-17', $tz);
$futureDate = new DateTime('2030-11-26', $tz);

echo  ($tomorrow > $lastDate ? 'Maior' : 'Menor') . '<br>';