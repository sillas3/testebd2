<header>
<h3>Atualizar Contato</h3>
</header>
<?php
    $id = mysqli_real_escape_string($conexao,$_POST["id"]);   
    $nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]);
    $emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]);
    $telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);
    $enderecoContato = mysqli_real_escape_string($conexao,$_POST["enderecoContato"]);
    $sexoContato = mysqli_real_escape_string($conexao,$_POST["sexoContato"]);
    $DataNascContato = mysqli_real_escape_string($conexao,$_POST["DataNascContato"]);
    
    $sql = "UPDATE info SET
    nomeContato = '{$nomeContato}',
    emailContato = '{$emailContato}',
    telefoneContato = '{$telefoneContato}',
    sexoContato = '{$sexoContato}',
    enderecoContato = '{$enderecoContato}',
    DataNascContato = '{$DataNascContato}'
    WHERE id = '{$id}'
    ";
        $rs = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta." . mysqli_error($conexao));

        echo "O registro foi inserido com sucesso!";

?>