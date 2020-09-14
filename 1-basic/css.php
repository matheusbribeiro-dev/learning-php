<div class="title">Integração com PHP</div>

<h1 center>
    <?php
        echo 'olá';
    ?>
</h1>

<?=
    "<div center blue> Inserindo 'div' com tag curta!</div>"
?>

<br>
<div center>
    <button double><?= "Legal" ?></button>
</div>

<style>
    button {
        padding: 5px <?= 2*10 ?>px;/*-> 20px*/
        border: none;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [blue] {
        color: #4286f4;
    }

    [double] {
        font-size: 2rem;
    }
</style>