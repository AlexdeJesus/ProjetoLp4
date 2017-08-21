<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Linguagem IV</title>
  </head>
  <body>
  <?php
  include"index.php";
  ?>
    <div align="center" id="interface">
        <form action="controlador.php" method="post">
                <table border rules="cols" align="center" bgcolor="#FFE4C4">
                    <tr>
                        <th colspan="3"><h3>Cadastrar Aluno</h3></th>
                    </tr>
                    <tr><br><br>
                        <th>Código</th>
                        <th>
                            <input type="number" name="ID" value="" required="required" />
                        </th>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <th>
                            <input type="text" name="NM" value="" required="required"/>
                        </th>       <?php // echo $_SESSION["NM"]; ?> <?php // echo $_SESSION["ED"]; ?>
                    </tr>
                    <tr>
                        <th>Endereço</th>
                        <th>
                            <input type="text" name="ED" value="" required="required"/>
                        </th>
                    </tr>
                        <th colspan="3">
                            <br>
                            <input type="submit" name="cadastrar" value="Cadastrar"><br><br>
                        </th>
                    </tr>
                </table>
            </form>
    </div>
  </body>
</html>

