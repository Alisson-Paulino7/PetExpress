
<?php

include './conexao.php';

    $nome_pet = $_POST['nome_pet'];
    $raca = $_POST['raca'];
    $porte = $_POST['porte'];
    $obs = $_POST['obs'];
 

    if($nome_pet != ''){
    $inserir = $conn -> query("INSERT INTO cadastropet (nome_pet, raca, porte, obs) values('$nome_pet','$raca','$porte','$obs')");
    header("Location:pet.php");
    }
    else{
        header("Location:erro.php");

    }
?>