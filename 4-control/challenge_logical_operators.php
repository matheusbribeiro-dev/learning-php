<div class="title">Desafio Operadores Lógicos</div>

<form action="#" method="post">
    <!--Job1-->
    <div>
        <label for="job1">Trabalho 1 (Terça):</label>
        <select name="job1" id="job1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <!--//Job1-->

    <!--Job2-->
    <div>
        <label for="job2">Trabalho 2 (Quinta):</label>
        <select name="job2" id="job2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <!--//Job2-->

    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }

    p.good-result {
        padding: 5px;
        color: white;
        background-color: #4caf50;
        text-align: center;
    }

    p.bad-result {
        padding: 5px;
        color: white;
        background-color: #f44336;
        text-align: center;
    }
</style>

<?php
    /*
        Dois trabalhos -> terça e quinta !
        - Se os dois forem executados -> TV 50' e sorvete
        - Se apenas um for executado -> Tv 32' e sorvete
        - Se nenhum for executado -> Fica em casa mais saudável
    */

    $isSetJob1 = isset($_POST['job1']);
    $isSetJob2 = isset($_POST['job2']);
    
    if($isSetJob1 and $isSetJob2) {
        $job1 = $_POST['job1'];
        $job2 = $_POST['job2'];

        if($job1 && $job2) {
            echo "<p class='good-result'>Tv 50 e Sorvete</p>";
        } elseif ($job1 xor $job2) {
            echo "<p class='good-result'>Tv 32 e Sorvete</p>";
        } else {
            echo "<p class='bad-result'>Ficar em casa</p>";
        }
    }
    