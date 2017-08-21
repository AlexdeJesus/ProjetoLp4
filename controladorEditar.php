<?php
if ($_SERVER["REQUEST_METHOD"]=="GET") {
    include_once "conexao.php";
    $con=  conection();
    $ps=mysqli_prepare($con,"select id,nome,endereco from aluno WHERE  id= ?");
    mysqli_stmt_bind_param($ps,"i",$id);
    $id=$_GET["id"];
    mysqli_stmt_execute($ps);
    mysqli_stmt_bind_result($ps,$id,$nm,$ed);
    mysqli_stmt_fetch($ps);
    include_once("./editar.php");
} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
    include_once("edita.php");
} else {
    include_once("erro.php");
}
?>