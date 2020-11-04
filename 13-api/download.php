<div class="title">Download</div>

<?php
session_start();

$files = $_SESSION['files'] ?? [];

$folderUpload = __DIR__ . '/../files/';
$fileName = $_FILES['file']['name'];
$filePath = $folderUpload . $fileName;
$tmp = $_FILES['file']['tmp_name'];

if (move_uploaded_file($tmp, $filePath)) {
	echo "<br> Arquivo enviado com sucesso.";
	$files[] = $fileName;
} else {
	echo "<br>Erro no upload de arquivo";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
	<input name="file" type="file">
	<button>Enviar</button>
</form>

<ul>
	<?php foreach ($files as $file): ?>
		<li>
			<a href="../files/<?= $file ?>">
				<?= $file ?>
			</a>
		</li>
	<?php endforeach ?>
</ul>

<style>
	input, button{
		font-size: 1.2rem;
	}
</style>