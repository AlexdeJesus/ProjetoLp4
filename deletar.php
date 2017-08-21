<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <TITLE>Linguagem IV</TITLE>
</head>
<body>
<?php
include "index.php";
?>
    <div id="interface">
        <form action="controladorDelete.php" method="post">
            <table align="center" bgcolor="#ffcc99" border rules="cols">
                <tr>
                    <th colspan="3">Confirma Exclusão?<br><br></th>
                </tr>
                <tr>
                        <td>Código:</td>
                    <td>
                        <input type="number" name="id" value="<?php echo $id; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th colspan="3">
                    <br>
                    <input type="submit" value="Excluir" name="excluir"><br><br>
                    </th>
                </tr>
            </table>
        </form>
    </div>    
</body>
</html>

 