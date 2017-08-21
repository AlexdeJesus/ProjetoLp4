<?php
$MensagemErro="Dados Alterados com Sucesso!";
if (!isset($_POST["ID"]) || !isset($_POST["NM"]) || !isset($_POST["ED"])){
    $MensagemErro="Parâmetros inválidos";
}else{
    include_once("conexao.php");
    $con=  conection();
    $ps=mysqli_prepare($con,"update aluno set nome=?, endereco=? where id=?");
    mysqli_stmt_bind_param($ps,"ssi",$_POST["NM"], $_POST["ED"],$_POST["ID"]);
    mysqli_stmt_execute($ps);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Linguagen IV</title>
    <script>
        alert("Dados Alterados com Sucesso!");
    </script>
</head>
<body>
<?php include "index.php"; ?>
</body>
</html>


 