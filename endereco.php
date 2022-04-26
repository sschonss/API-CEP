<?php

require_once 'src/api-endereco.php';

if ($_POST['cep']) { 
    
    $cep = $_POST['cep'];
    ?>
    <h2>Resultado da Pesquisa</h2>
    <p>
        <?php $endereco = get_endereco($cep); ?>
        <b>CEP: </b> <?php echo $endereco->cep; ?><br>
        <b>Logradouro: </b> <?php echo $endereco->logradouro; ?><br>
        <b>Bairro: </b> <?php echo $endereco->bairro; ?><br>
        <b>Localidade: </b> <?php echo $endereco->localidade; ?><br>
        <b>UF: </b> <?php echo $endereco->uf; ?><br>
    </p>
<?php } ?>