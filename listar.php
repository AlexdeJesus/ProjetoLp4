<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Linguagem IV</title>
</head>
<body>
<?php
include "index.php";
?>
<div align="center" id="interface">

    <h3  align="center">Listagem de Alunos</h3>
    <table border rules="cols" align="center" width="70%">
      <tr bgcolor="#ffcc99">
          <td align="center"><b>ID</b></td>
          <td align="center"><b>Nome</b></td>
          <td align="center"><b>Endereco</b></td>
          <td align="center"><b>Editar</b></td></td>
          <td align="center"><b>Excluir</b></td>
      </tr>
        <?php
          include_once("conexao.php");
          $con = conection();
          $ps=mysqli_prepare($con,"select id, nome, endereco from aluno");
          mysqli_stmt_execute($ps);
          mysqli_stmt_bind_result($ps,$id,$nm,$ed);
          while(mysqli_stmt_fetch($ps)){

             echo "<tr bgcolor='#FFE4C4'>".
                  "<td width='50' align='center'>$id</td>
                  <td width='200' align='center'>$nm</td>
                  <td width='200' align='center'>$ed</td>".
                  "<td width='200' align='center'><a href='controladorEditar.php?id=$id'style='text-decoration:none'><font-color='228b22'>Editar</a></td>".
                  "<td width='200' align='center'><a href='controladorDelete.php?id=$id'style='text-decoration:none'><font-color='228b22'>Excluir</a></td></tr>";
          }
        ?>
    </table>
</div>
</body>
</html>



 