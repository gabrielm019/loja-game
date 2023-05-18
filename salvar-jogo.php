<?php
$titulo = $_POST["titulo"];
$video = $_POST["video"];

$categoria = $_POST["categoria"];

include "conexao.php";

$sql_inserir_jogo = "insert into jogo(titulo, video,  categoria) values('$titulo','$video', '$categoria')";

$um_jogo = mysqli_query($conexao, $sql_inserir_jogo);

mysqli_close($conexao);

header("location:listar-jogos.php?msg=sucesso");
?>