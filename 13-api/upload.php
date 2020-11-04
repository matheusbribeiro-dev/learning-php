<div class="title">Upload</div>

<?php
print_r($_FILES);

if ($_FILES and $_FILES['file']) {
	$folderForSave = '/Users/Administrador/Desktop/';
	$fileName = $_FILES['file']['name'];
	$filePath = $folderForSave . $fileName;

	/*Pegando diretório temporário*/
	$tmp = $_FILES['file']['tmp_name'];

	if (move_uploaded_file($tmp, $filePath)) {
		echo "<br>Upload completo";
	} else {
		echo "Falha no upload do arquivo";
	}
}
?>

<form action="#" method="post" enctype="multipart/form-data"><!--Encoding para suportar uploads-->
	<input name="file" type="file">
	<button>Enviar</button>
</form>

<style>
	input, button{
		font-size: 1.2rem;
	}
</style>