
<?php

include './conexao.php';

    $num_cartao = $_POST['num_cartao'];
    $data = $_POST['data'];
    $cvv = $_POST['cvv'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
 

    if($num_cartao != ''){
    $inserir = $conn -> query("INSERT INTO cadastrocard (num_cartao, data, cvv, nome, cpf) values('$num_cartao','$data','$cvv','$nome','$cpf')");
    header("Location:pagamentos.php");
    }
    else{
        header("Location:erro.php");

    }
    ?>