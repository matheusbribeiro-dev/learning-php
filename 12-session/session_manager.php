<div class="title">Gerenciamento de sessão</div>

<?php
/*Serve para exibir quando sem paramentros, mas quando se passa uma
string ele seta como id*/
// session_id('qln65vblg1jk0a3dt27ipe3o2b');

session_start();
//fdq5t9016do62grvpva44mkjmt
echo session_id();

/*Como vamos fazer uma operação ternária é bom reduzir o nome a utilizar */

$counter = &$_SESSION['counter'];
$counter = $counter ? $counter + 1 : 1;

echo '<br>' . $_SESSION['counter'];

if (($_SESSION['counter'] % 5) === 0) {
    session_regenerate_id();
}

if ($_SESSION['counter'] >= 15) {
    session_destroy();
}