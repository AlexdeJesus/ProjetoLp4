<?php session_start();
$nome=$_POST["NM"];
$endereco=$_POST["ED"];

setcookie('CNM','$nome');
setcookie('CED','$endereco');

echo $_COOKIE['CNM'];
echo $_COOKIE['CED'];

if(!isset($_SESSION["NM"]) || !isset($_SESSION["ED"])) {
    if (isset($_COOKIE["CNM"])) {
        $_SESSION["NM"] = $_COOKIE["CNM"];
        $_SESSION["ED"] = $_COOKIE["CED"];

    } else {
        $_SESSION["NM"] = "";
        $_SESSION["ED"] = "";
        echo "Não foi gravado";
    }
}
if(isset($_POST["NM"])){
    $_SESSION["NM"] = $_POST["NM"];
    $_SESSION["ED"] = $_POST["ED"];
    setcookie("CNM",$_POST["NM"],time()+86400*30);
    setcookie("CED",$_POST["ED"],time()+86400*30);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Linguagem IV</title>
</head>
<body>
<div>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $arq=fopen("arquivo/dados.txt","r");
        $lin = fgetcsv($arq,100,";");
        while($lin!=null){
            if (isset($_POST["NM"]) && isset($_POST["ED"])){
                if ($lin[1]==$_POST["NM"] && $lin[2]==$_POST["ED"]){
                    echo $lin[0]." ".$lin[1]." ".$lin[2]." ".$lin[3]."<br/>";
                }
            }else{
                echo $lin[0]." ".$lin[1]." ".$lin[2]." ".$lin[3]."<br/>";
            }
            $lin = fgetcsv($arq,100,";");
        }
        fclose($arq);
    }
    ?>
</div>
</body>
</html>