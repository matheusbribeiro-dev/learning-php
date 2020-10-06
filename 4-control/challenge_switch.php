<div class="title">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param" required>

    <select name="conversion" id="conversion" required>
        <option value="">Selecione...</option>
        <option value="km-miles">Km -> Milhas</option>
        <option value="miles-km">Milhas -> Km</option>
        <option value="meters-km">Metros -> Km</option>
        <option value="km-meters">Km -> Meters</option>
    </select>
    <button>Converter</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }

    p.result {
        padding: 10px 0;
        color: white;
        text-align: center;
        background-color: #1867c0;
    }
</style>

<?php
    const KM_MILHA = 1.609;
    const METERS_KM = 1000;

    $setParam = isset($_POST['param']);
    $setConversion = isset($_POST['conversion']);

    if($setParam and $setConversion) {
        $param = $_POST['param'];
        $conversion = $_POST['conversion'];
        $converted = 0.0;

        switch($conversion) {
            case 'km-miles':
                $converted = $param / KM_MILHA;
            break;

            case 'miles-km':
                $converted = $param * KM_MILHA;
            break;

            case 'meters-km':
                $converted = $param / METERS_KM;
            break;

            case 'km-meters':
                $converted = $param * METERS_KM;
            break;
        }

        echo "<p class='result'>Valor convertido: $converted</p>";
    }