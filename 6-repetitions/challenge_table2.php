<div class="title">Desafio tabela 2</div>

<form action="#" method="post">
    <input type="number" name="columns" placeholder="Colunas">
    <input type="number" name="rows" placeholder="Linhas">

    <button>Gerar</button>
</form>

<table>
    <?php

        $isSetColum = isset($_POST['columns']);
        $isSetRow = isset($_POST['rows']);

        if($isSetColum and $isSetRow) {
            $columns = intval($_POST['columns']);
            $rows = intval($_POST['rows']);
            $count = 0;

            for($i = 1; $i <= $columns; $i++) {
                echo '<tr>';
                for($j = 1; $j <= $rows; $j++) {
                    $count++;
                    echo "<td>$count</td>";
                }
                echo '</tr>';
            }
        }

    ?>
</table>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>