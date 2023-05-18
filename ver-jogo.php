<?php
include "cabecalho.php";
include "menu-sistema.php";

$id = $_GET["id"];
$titulo = $categoria = $video = "";
include "conexao.php";
                    $sql_buscar = "select * from jogo";
                    $todos_os_jogos = mysqli_query($conexao, $sql_buscar);
                    while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
                    
                    $titulo = $um_jogo["titulo"];
                    $categoria = $um_jogo["categoria"];
                    $video = $um_jogo["video"];
                    
                    endwhile;
                    mysqli_close($conexao);
                        
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h6>Detalhe do jogo Cód.: <?php echo  $_GET["id"]; ?> </h6>
        </div>
        <div class="col-12">
            <h3>Título: </h3>
            <p><img src=""></p>
            <p>Categoria: </p>
            <p><a href="<?php echo $video;?>">Ver o vídeo</a></p>
        </div>
    </div>
</div>
</body>