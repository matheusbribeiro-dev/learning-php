<div class="title">Desafio palíndromo</div>

<form action="#" method="post">
    <input type="text" name="word" placeholder="Digite a palavra">

    <button>Palíndromo ?</button>
</form>

<?php
    $isSetWord = isset($_POST['word']);

    if($isSetWord) $word = $_POST['word'];

    function checkPalindrome($word) {
        $sizeWord = strlen($word);
        $wordCompare = '';
        $return = '';

        for($i = $sizeWord; $i >= 0; $i--) {
            $wordCompare .= $word[$i];
        }

        if($word === $wordCompare) {
            $return = "Sim";
        } else {
            $return = "Não";
        }

        return $return;
    }

    echo checkPalindrome($word);

    /*Forma mais simples de fazer.. use strrev(); */