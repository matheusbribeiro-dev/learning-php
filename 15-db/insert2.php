<!-- Bootstrap -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
crossorigin="anonymous">
<!-- / Bootstrap -->
<div class="title">Inserir registro #02</div>

<h2>Cadastro</h2>
<?php

if (count($_POST) > 0) {

    $data = $_POST;
    $errors = isset($errors) ? $errors : [];

    //if(isset($data['name'])) OU
    if (trim($data['name']) === ""){
        $errors["name"] = "Nome é obrigatório";
    }

    //validando data e garantindo que seja inserida num determinado formato
    if (isset($data['birth'])) {
        $date = DateTime::createFromFormat('d/m/Y', $data['birth']);

        if (!$date) {
            $errors["birth"] = "Data deve estar no padrão dd/mm/aaaa";
        }
    }

    //Validando e-mail
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors["email"] ="Email inválido";
    }

    //Validando URL
    if (!filter_var($data['site'], FILTER_VALIDATE_URL)) {
        $errors["site"] = "Site inválido";
    }

    //Validando campo children
    $childrenSetting = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];
    if (!filter_var($data['children'], FILTER_VALIDATE_INT, $childrenSetting)
        and $data['children'] != 0) {
        $errors["children"] = "Quantidade de filhos inválida";
    }

    //Validando salário
    $salarySetting = [
        "options" => ["decimal" => ","]
    ];

    if (!filter_var($data['salary'], FILTER_VALIDATE_FLOAT,
        $salarySetting)) {

        $errors["salary"] = "Salário inválido";
    }

    if(!count($errors)) {
        require_once "connection.php";

        $sql = "INSERT INTO cadastro 
        (nome, nascimento, email, site, filhos, salario)
        VALUES (?, ?, ?, ?, ?, ?)";

        $connection = newConnection();
        $stmt = $connection->prepare($sql);

        $params = [
            $data['name'],
            $date ? $date->format('Y-m-d') : null,
            $data['email'],
            $data['site'],
            $data['children'],
            $data['salary'],
        ];

        $stmt->bind_param("ssssid", ...$params);/* ssssid -> quatro parametros
        serão 'string', um será inteiro e o último será double*/

        if($stmt->execute()) {
            unset($data);
        }
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
			<input type="text" name="name" id="name" value="<?= $data['name']?>"
			class="form-control <?= $errors["name"] ? 'is-invalid' : ''?>">
			<!--invalid-feedback-->
			<div class="invalid-feedback"><?= $errors["name"] ?></div>
			<!-- / invalid-feedback-->
		</div>
		<!-- // form-group-->

		<!--form-group-->
		<div class="form-group col-md-3">
			<label for="birth">Nascimento</label>
			<input type="text" name="birth" id="birth"
                value="<?= $data['birth']?>"
			    class="form-control  <?= $errors["birth"] ? 'is-invalid' : ''?>"
            >
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
			<input type="text" name="email" id="email"
                value="<?= $data['email']?>"
			    class="form-control  <?= $errors["email"] ? 'is-invalid' : ''?>"
            >
			<!--invalid-feedback-->
			<div class="invalid-feedback"><?= $errors["email"] ?></div>
			<!-- / invalid-feedback-->
		</div>
		<!-- // form-group-->

		<!--form-group-->
		<div class="form-group col-md-6">
			<label for="site">Site</label>
			<input type="text" name="site" id="site" value="<?= $data['site']?>"
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
			<input type="number" name="children" id="children"
                value="<?= $data['children']?>"
			    class="form-control  <?= $errors["children"] ? 'is-invalid' : ''?>"
            >
			<!--invalid-feedback-->
			<div class="invalid-feedback"><?= $errors["children"] ?></div>
			<!-- / invalid-feedback-->
		</div>
		<!-- // form-group-->

		<!--form-group-->
		<div class="form-group col-md-6">
			<label for="salary">Salário</label>
			<input type="text" name="salary" id="salary"
                value="<?= $data['salary']?>"
			    class="form-control  <?= $errors["salary"] ? 'is-invalid' : ''?>"
            >
			<!--invalid-feedback-->
			<div class="invalid-feedback"><?= $errors["salary"] ?></div>
			<!-- / invalid-feedback-->
		</div>
		<!-- // form-group-->
	</div>
	<!-- // form-row-->

	<button class="btn btn-primary btn-lg">Enviar</button>
</form>