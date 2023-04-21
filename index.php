<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Igames</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

  <?php
  include "menu.php";
  ?>
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="thelast.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="god.jpg" class="d-block w-100" alt="...">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container">
    <div clas="row">
      <div class="col-12 text-center">
        <h1>Jogos em destaque</h1>
      </div>
      <div class="col-12 text-center">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</h1>
        </p>
      </div>
    </div>


    <div class="row">
      <?php
      for ($i = 0; $i < 8; $i++) {

      ?>

        <div class="col-md-3 text-center mb-4">
          <img src="god.jpg" class="img-fluid">
          <h3>Nome do jogo</h3>
          <a href="nomedojogo.php" class="btn btn-primary">VER MAIS</a>
        </div>

      <?php
      }
      ?>
    </div>
    <div class="row">
      <div class="col-12">
        <h2>Entre em contato</h2>
      </div>

      <div class="col-12">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>




      </div>
    </div>
    <div class="row">
      <form action="inserir-contato.php" method="post">
        <div class="col">

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="nome" class="form-control" name="nome" placeholder="Nome">
          </div>

          <div class="mb-3">
            <input type="tel" class="form-control" name="telefone"
            placeholder="Telefone">
          </div>

          <div class="mb-3">
            <textarea class="form-control" class="form-control" name="duvida"
            placeholder="Duvida" rows="4"></textarea>
          </div>

        </div>
      </form>
    </div>
  </div>












  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>