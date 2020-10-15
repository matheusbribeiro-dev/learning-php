<div class="title">$_POST</div>

<form action="#" method="post">
    <input type="text" name="name">
    <input type="text" name="lastName">

    <select name="state">
        <option value="NULL">Selecione</option>
        <option value="MG">Minas Gerais</option>
        <option value="SP">São Paulo</option>
    </select>

    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }

    form input {
        padding-left: 5px;
    }
</style>

<?php 
    echo '<pre>';
        print_r($_POST);
    echo '</pre>';

    echo count($_POST);