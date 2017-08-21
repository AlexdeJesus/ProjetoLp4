<?php
    $MensagemErro="Dados Cadastrados com Sucesso!";
	if (!isset($_POST["ID"]) || !isset($_POST["NM"]) || !isset($_POST["ED"])){
		$MensagemErro="Parâmetros inválidos";
	}else {
        include_once("conexao.php");
        $con = conection();
        $ps = mysqli_prepare($con, "INSERT INTO ALUNO VALUES(?,?,?)");
        mysqli_stmt_bind_param($ps, "iss", $id, $nm, $ed);
        $id = $_POST["ID"];
        $nm = $_POST["NM"];
        $ed = $_POST["ED"];
        mysqli_stmt_execute($ps);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Linguagem IV</title>
      <script>
          alert("Dados Cadastrados com Sucesso!");
      </script>
  </head>
  <body>
    <?php include "index.php"; ?>

  </body>
</html>