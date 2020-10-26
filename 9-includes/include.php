<div class="title">Include</div>

<?php
echo "Executei essa linha do arquivo include<br>";
include 'arq-include.php'; /*Incluindo neste arquivo o arq-include.php */

/* include 'arq-include.php'; Não é possível incluir mais de uma vez neste caso
pois o arquivo de origem possui uma função e não se pode definir uma mesma
função mais de uma vez*/

echo sum(3, 8) . '!<br>';

echo "O conteúdo da variável é: '{$var}'.<br>";