<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
include "index.php";
?>
    <div id="interface">
        <form action="controladorEditar.php" method="post">
                <table border rules="cols" align="center" bgcolor="#FFE4C4">
                    <tr>
                        <th colspan="3"><h3>Editar Dados</h3></th>
                    </tr>
                    <tr><br><br>
                        <th>Código</th>
                        <th>
                            <input type="number" name="ID" value="<?php echo $id; ?>" required readonly/>
                        </th>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <th>
                            <input type="text" name="NM" value="<?php echo $nm; ?>" required/>
                        </th>
                    </tr>
                    <tr>
                        <th>Endereço</th>
                        <th>
                            <input type="text" name="ED" value="<?php echo $ed; ?>" required/>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="3">
                            <br>
                            <input type="submit" name="atualizar" value="Atualizar">
                            <br><br>
                        </th>
                    </tr>
                </table>
            </form>
     </div>
</body>
</html>



 