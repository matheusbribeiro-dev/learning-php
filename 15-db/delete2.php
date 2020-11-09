<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="title">Excluir registros #02</div>

<?php
    require_once "connection.php";

    //Consulta
    $sql = "SELECT id,nome,nascimento,email FROM cadastro;";
    $connection = newConnection();

    if($_GET['delete']) {
        $deleteSql = "DELETE FROM cadastro WHERE id = ?";
        $stmt = $connection->prepare($deleteSql);/*Usando o prepare para evitar SQL injection */
        $stmt->bind_param("i", $_GET['delete']);// i -> valor inteiro

        $stmt->execute();//executando a query
    }

    $returnDb = $connection->query($sql);
    $recordsReturned = [];

    if($returnDb->num_rows > 0) {
        while($row = $returnDb->fetch_assoc()) {
            $recordsReturned[] = $row;
        }

    } elseif($connection->error) {
        echo "Erro: ". $connection->error;
    }
    $connection->close();
?>

<table class="table">
	<thead class="bg-dark">
		<th>ID</th>
		<th>Nome</th>
		<th>Nascimento</th>
		<th>E-mail</th>
		<th>Ações</th>
	</thead>
	<tbody>
		<?php foreach ($recordsReturned as $record): ?>
			<tr>
				<td><?= $record['id'] ?></td>
				<td><?= $record['nome'] ?></td>
				<td>
					<?=
						date('d/m/Y', strtotime($record['nascimento']));
					?>
				</td>
				<td><?= $record['email'] ?></td>
				<td>
                    <a href="/learning-php/exercise.php?dir=15-db&file=delete2&delete=<?=$record['id']?>" class="btn btn-danger">
                        Excluir
                    </a>
                </td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<style>
	table > * {
		font-size: 1.2rem;
	}

	table thead {
		color: white;
	}
</style>