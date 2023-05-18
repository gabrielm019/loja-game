<?php

$id = $_GET["id"];
$titulo = $_POST["titulo"];
$video = $_POST["video"];
$categoria = $_POST["categoria"];

include "conexao.php";

$sql_editar_jogo = "update jogo set titulo= '$titulo', video = '$video', categoria = '$categoria' where id = $id "; 

$um_jogo = mysqli_query($conexao, $sql_editar_jogo);

mysqli_close($conexao);

header("location:listar-jogos.php?msg=sucesso");

?>