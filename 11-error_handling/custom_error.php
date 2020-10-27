<div class="title">Erros personalizados</div>

<?php
class AgeRangeException extends Exception
{
    public function __construct($message, $code = 0, $previous = null)
    { /*Parametros padrão que são recebidos numa exception 'code' e 'previous'*/
        parent::__construct($message, $code, $previous);
    }
}

function retirementTimeCalculate($age)
{
    if ($age < 18) {
        throw new AgeRangeException(
            "Muito longe");

    } elseif ($age > 70) {
        throw new AgeRangeException(
            "Já deveria estar aposentado");
    }

    return 70 - $age;
}

$ageEvaluation = [15, 30, 60, 80];

foreach ($ageEvaluation as $age) {
    try {
        $timeRetirement = retirementTimeCalculate($age);
        echo "Idade: $age, $timeRetirement anos restantes<br>";

    } catch (AgeRangeException $e) {
        echo "Não foi possível calcular para esta idade $age anos <br>";
        echo "{$e->getMessage()}<br>";
    }
}