<div class="title">Datas #01</div>
<?php
//date_default_timezone_set('America/Sao_Paulo');

/*Marco 0 das datas em linguagens de programação: 1 de janeiro de 1970
 */

echo time() . '<br>'; /*time() -> contém a quantidade de segundos entre hoje e o marco zero */

echo date('d/m/y  H:i A') . '<br>'; /* Recebe uma striing como parâmetro com algumas letras que correspodem
as informações que vamos receber desta função. LEIA: https://www.php.net/manual/pt_BR/function.date.php*/

/*Outra forma de tratar datas */
echo strftime('%d/%m/%Y', time()) . '<br>';

/*Setando a linguagem para obter as infos de data e hora corretamente */
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");

/*Calulando tempo com time() */
$tomorrow = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $tomorrow) . '<br>';

/*Calculando time de uma maneira mais simples */
$nextWeek = strtotime('+1 week'); /*Vai pegar a data de hoje e acrescentar uma semana */

echo strftime('%A, %d de %B de %Y', $nextWeek) . '<br>';

/*Fixando uma determinada data*/
$fixedDate = mktime(15, 30, 50, 1, 25, 1975);

echo utf8_encode(strftime('%A, %d de %B de %Y - %H:%M:%S', $fixedDate));