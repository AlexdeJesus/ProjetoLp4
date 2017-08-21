<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <TITLE>Linguagem IV</TITLE>
    <script>
        function confirma(){
            alert("Dados Excluidos Com Sucesso!");
        }
        function confima02(){
            alert("Parâmetros inválidos");
        }
    </script>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"]=="GET") {
    $id=$_GET["id"];
    include_once("deletar.php");
} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (!isset($_POST["id"])){
        $MensagemErro="Parâmetros inválidos";
    }else{
        $id=$_POST["id"];
        include_once("conexao.php");
        $con=  conection();
        $ps=mysqli_prepare($con,"DELETE FROM ALUNO WHERE ID=?");
        mysqli_stmt_bind_param($ps,"i",$id);
        mysqli_stmt_execute($ps);
    }
    echo"<script> confirma();</script>";
    include "index.php";
    }else{
    echo "<script> confirma02();</script>";
    include ("index.php");
}
?>
</body>
</html