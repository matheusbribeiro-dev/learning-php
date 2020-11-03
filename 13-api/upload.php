<div class="title">Upload</div>

<?php
print_r($_FILES);
?>

<form action="#" method="post" enctype="multipart/form-data"><!--Encoding para suportar uploads-->
	<input name="filetest" type="file">
	<button>Enviar</button>
</form>

<style>
	input, button{
		
	}
</style>