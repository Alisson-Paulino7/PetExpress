

<?php

include 'conexao.php';

$cidade = $_POST['cidade'];
$petshop = $_POST['petshop'];
$pet = $_POST['pet'];
$num_cartao = $_POST['pagamento'];


    if($cidade != ''){
    $inserir = $conn -> query("INSERT INTO historico (cidade, petshop, pet, pagamento) values ('$cidade','$petshop','$pet','$num_cartao')");
    header("Location:pagconfirmado.php");
    }
    else{
        header("Location:erro.php");

    }
    ?>
