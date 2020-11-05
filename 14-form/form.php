<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="title">Formulário</div>

<h2>Cadastro</h2>
<?php

if (count($_POST) > 0) {
	//if(isset($_POST['name'])) OU
	if (!filter_input(INPUT_POST, "name")){
		echo "Nome é obrigatório <br>";
	}

	//validando data e garantindo que seja inserida num determinado formato
	if (filter_input(INPUT_POST, "birth")) {
		$date = DateTime::createFromFormat('d/m/Y', $_POST['birth']);

		if (!$date) {
			echo "Data deve estar no padrão dd/mm/aaaa <br>";
		}
	}

	//Validando e-mail
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		echo "Email inválido <br>";
	}

	//Validando URL
	if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
		echo "Site inválido <br>";
	}

	//Validando campo children
	$childrenSetting = [
		"options" => ["min_range" => 0, "max_range" => 20]
	];
	if (!filter_var($_POST['children'], FILTER_VALIDATE_INT, $childrenSetting)
		and $_POST['children'] != 0) {
		echo "Quantidade de filhos inválida <br>";
	}

	//Validando salário
	$salarySetting = [
		"options" => ["decimal" => ","]
	];

	if (!filter_var($_POST['salary'], FILTER_VALIDATE_FLOAT, $salarySetting)) {
		echo "Salário inválido <br>";
	}
}

?>
<form action="#" method="post">
	<!--form-row-->
	<div class="form-row">
		<!--form-group-->
		<div class="form-group col-md-9">
			<label for="name">Nome</label>
			<input type="text" name="name" id="name" value="<?= $_POST['name']?>"
			class="form-control">
		</div>
		<!-- // form-group-->

		<!--form-group-->
		<div class="form-group col-md-3">
			<label for="birth">Nascimento</label>
			<input type="text" name="birth" id="birth" value="<?= $_POST['birth']?>"
			class="form-control">
		</div>
		<!-- // form-group-->
	</div>
	<!-- // form-row-->

	<!--form-row-->
	<div class="form-row">
		<!--form-group-->
		<div class="form-group col-md-6">
			<label for="email">E-mail</label>
			<input type="text" name="email" id="email" value="<?= $_POST['email']?>"
			class="form-control">
		</div>
		<!-- // form-group-->

		<!--form-group-->
		<div class="form-group col-md-6">
			<label for="site">Site</label>
			<input type="text" name="site" id="site" value="<?= $_POST['site']?>"
			class="form-control">
		</div>
		<!-- // form-group-->
	</div>
	<!-- // form-row-->

	<!--form-row-->
	<div class="form-row">
		<!--form-group-->
		<div class="form-group col-md-6">
			<label for="children">Qtd filhos</label>
			<input type="number" name="children" id="children" value="<?= $_POST['children']?>"
			class="form-control">
		</div>
		<!-- // form-group-->

		<!--form-group-->
		<div class="form-group col-md-6">
			<label for="salary">Salário</label>
			<input type="text" name="salary" id="salary" value="<?= $_POST['salary']?>"
			class="form-control">
		</div>
		<!-- // form-group-->
	</div>
	<!-- // form-row-->

	<button class="btn btn-primary btn-lg">Enviar</button>
</form>