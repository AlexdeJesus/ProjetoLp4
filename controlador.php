<?php session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    include_once("./cadastrar.php");
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION["NM"]) || !isset($_SESSION["ED"])) {
        if (isset($_COOKIE["CNM"])) {
            $_SESSION["NM"] = $_COOKIE["CNM"];
            $_SESSION["ED"] = $_COOKIE["CED"];
        } else {
            $_SESSION["NM"] = "";
            $_SESSION["ED"] = "";
        }
    }
    if (isset($_POST["NM"])) {
        $_SESSION["NM"] = $_POST["NM"];
        $_SESSION["ED"] = $_POST["ED"];
        setcookie("CNM", $_POST["NM"], time() + 86400 * 30);
        setcookie("CED", $_POST["ED"], time() + 86400 * 30);
    }
    include_once("./cadastra.php");
} else {
    include_once("erro.php");
}
