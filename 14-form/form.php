<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="title">Formulário</div>

<h2>Cadastro</h2>
<?php

if (count($_POST) > 0) {
	$errors = isset($errors) ? $errors : [];

	//if(isset($_POST['name'])) OU
	if (!filter_input(INPUT_POST, "name")){
		$errors["name"] = "Nome é obrigatório";
	}

	//validando data e garantindo que seja inserida num determinado formato
	if (filter_input(INPUT_POST, "birth")) {
		$date = DateTime::createFromFormat('d/m/Y', $_POST['birth']);

		if (!$date) {
			$errors["birth"] = "Data deve estar no padrão dd/mm/aaaa";
		}
	}

	//Validando e-mail
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors["email"] ="Email inválido";
	}

	//Validando URL
	if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
		$errors["site"] = "Site inválido";
	}

	//Validando campo children
	$childrenSetting = [
		"options" => ["min_range" => 0, "max_range" => 20]
	];
	if (!filter_var($_POST['children'], FILTER_VALIDATE_INT, $childrenSetting)
		and $_POST['children'] != 0) {
		$errors["children"] = "Quantidade de filhos inválida";
	}

	//Validando salário
	$salarySetting = [
		"options" => ["decimal" => ","]
	];

	if (!filter_var($_POST['salary'], FILTER_VALIDATE_FLOAT, $salarySetting)) {
		$errors["salary"] = "Salário inválido";
	}
}

?>

<?php // foreach($errors as $error): ?>
<!-- 	<div class="alert alert-danger" role="alert"> -->
  		<?= "" //$error ?>
<!-- 	</div> -->
<?php // endforeach ?>

<form action="#" method="post">
	<!--form-row-->
	<div class="form-row">
		<!--form-group-->
		<div class="form-group col-md-9">
			<label for="name">Nome</label>
			<input type="text" name="name" id="name" value="<?= $_POST['name']?>"
			class="form-control <?= $errors["name"] ? 'is-invalid' : ''?>">
			<!--invalid-feedback-->
			<div class="invalid-feedback"><?= $errors["name"] ?></div>
			<!-- / invalid-feedback-->
		</div>
		<!-- // form-group-->

		<!--form-group-->
		<div class="form-group col-md-3">
			<label for="birth">Nascimento</label>
			<input type="text" name="birth" id="birth" value="<?= $_POST['birth']?>"
			class="form-control  <?= $errors["birth"] ? 'is-invalid' : ''?>">
			<!--invalid-feedback-->
			<div class="invalid-feedback"><?= $errors["birth"] ?></div>
			<!-- / invalid-feedback-->
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
			class="form-control  <?= $errors["email"] ? 'is-invalid' : ''?>">
			<!--invalid-feedback-->
			<div class="invalid-feedback"><?= $errors["email"] ?></div>
			<!-- / invalid-feedback-->
		</div>
		<!-- // form-group-->

		<!--form-group-->
		<div class="form-group col-md-6">
			<label for="site">Site</label>
			<input type="text" name="site" id="site" value="<?= $_POST['site']?>"
			class="form-control  <?= $errors["site"] ? 'is-invalid' : ''?>">
			<!--invalid-feedback-->
			<div class="invalid-feedback"><?= $errors["site"] ?></div>
			<!-- / invalid-feedback-->
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
			class="form-control  <?= $errors["children"] ? 'is-invalid' : ''?>">
			<!--invalid-feedback-->
			<div class="invalid-feedback"><?= $errors["children"] ?></div>
			<!-- / invalid-feedback-->
		</div>
		<!-- // form-group-->

		<!--form-group-->
		<div class="form-group col-md-6">
			<label for="salary">Salário</label>
			<input type="text" name="salary" id="salary" value="<?= $_POST['salary']?>"
			class="form-control  <?= $errors["salary"] ? 'is-invalid' : ''?>">
			<!--invalid-feedback-->
			<div class="invalid-feedback"><?= $errors["salary"] ?></div>
			<!-- / invalid-feedback-->
		</div>
		<!-- // form-group-->
	</div>
	<!-- // form-row-->

	<button class="btn btn-primary btn-lg">Enviar</button>
</form>