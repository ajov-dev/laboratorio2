<!doctype html>
<html lang="en">

<head>
  <title>index php</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=PT+Serif:ital@1&family=Young+Serif&display=swap"
    rel="stylesheet">

</head>

<body style="max-width: 100%;">
  <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <picture><img src="./src/picture/logo.png" alt="logo de la empresa" width="200"></picture>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
        aria-label="Toggle navigation">
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="./">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Catálogo</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Categorias</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="#">Sala</a>
              <a class="dropdown-item" href="#">Habitación</a>
              <a class="dropdown-item" href="#">Comedor</a>
              <a class="dropdown-item" href="#">Niños</a>
              <a class="dropdown-item" href="#">Baños</a>
              <a class="dropdown-item" href="#">Cocina</a>
            </div>
          </li>
        </ul>
        <form class="d-flex my-2 my-lg-0">
          <input class="form-control me-sm-2" type="text" placeholder="Texto Buscado">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>
  </header>
  <main>
    <!-- carrusel -->
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="First slide"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="src\picture\slide1.jpg" class="w-100 d-block" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h3>Title</h3>
            <p>Description</p>
          </div>
        </div>
        <div class="carousel-item active">
          <img src="src\picture\slide2.jpg" class="w-100 d-block" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h3>Title</h3>
            <p>Description</p>
          </div>
        </div>
        <div class="carousel-item active">
          <img src="src\picture\slide3.jpg" class="w-100 d-block" alt="Thirth slide">
          <div class="carousel-caption d-none d-md-block">
            <h3>Title</h3>
            <p>Description</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- blog -->
    <div class="container d-flex justify-content-center ">
      <div class="row text-center pt-3">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="card border-ligth" style="max-width: 18rem;">
            <div class="text-center">
              <img class="card-img-top" src="src\picture\top.png" style="width:150px;" alt="Title">
            </div>
            <div class="card-body">
              <h4 class="card-title">nosotros</h4>
              <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book.</p>
              <button type="button" class="btn btn-success"><i class="bi bi-eye"></i>Ver Detalles</button>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="card border-ligth" style="max-width: 18rem;">
            <div class="text-center">
              <img class="card-img-top" src="src\picture\top.png" style="width:150px;" alt="Title">
            </div>
            <div class="card-body">
              <h4 class="card-title">Nuestra vision</h4>
              <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book.</p>
              <button type="button" class="btn btn-success"><i class="bi bi-eye"></i>Ver Detalles</button>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="card border-ligth" style="max-width: 18rem;">
            <div class="text-center">
              <img class="card-img-top" src="src\picture\top.png" style="width:150px;" alt="Title">
            </div>
            <div class="card-body">
              <h4 class="card-title">Nuestra Mision</h4>
              <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book.</p>
              <button type="button" class="btn btn-success"><i class="bi bi-eye"></i>Ver Detalles</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- catalogo -->
    <div class="text-center">
      <h1>Catalogo</h1>
      <hr>
    </div>
    <!-- productos -->
    <div class="row justify-content-center align-items-center g-1" style="max-width: 100%;">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card border-light">
          <picture class="card-img-top text-center">
            <img style="width: 75%;" src="src\picture\producto.jpg" alt="Title">
          </picture>
          <div class="card-body">
            <h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
            <p class="card-text" style="font-family: 'PT Serif', serif;">$10.50</p>
            <hr>
            <div class="btn-group d-flex">
              <button class="btn btn-dark" type="submit"><i class="bi bi-eye"></i> Ver</button>
              <button class="btn btn-dark" type="submit"><i class="bi bi-cart-plus"></i> Comprar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card border-light">
          <picture class="card-img-top text-center">
            <img style="width: 75%;" src="src\picture\producto.jpg" alt="Title">
          </picture>
          <div class="card-body">
            <h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
            <p class="card-text" style="font-family: 'PT Serif', serif;">$10.50</p>
            <hr>
            <div class="btn-group d-flex">
              <button class="btn btn-dark" type="submit"><i class="bi bi-eye"></i> Ver</button>
              <button class="btn btn-dark" type="submit"><i class="bi bi-cart-plus"></i> Comprar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card border-light">
          <picture class="card-img-top text-center">
            <img style="width: 75%;" src="src\picture\producto.jpg" alt="Title">
          </picture>
          <div class="card-body">
            <h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
            <p class="card-text" style="font-family: 'PT Serif', serif;">$10.50</p>
            <hr>
            <div class="btn-group d-flex">
              <button class="btn btn-dark" type="submit"><i class="bi bi-eye"></i> Ver</button>
              <button class="btn btn-dark" type="submit"><i class="bi bi-cart-plus"></i> Comprar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card border-light">
          <picture class="card-img-top text-center">
            <img style="width: 75%;" src="src\picture\producto.jpg" alt="Title">
          </picture>
          <div class="card-body">
            <h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
            <p class="card-text" style="font-family: 'PT Serif', serif;">$10.50</p>
            <hr>
            <div class="btn-group d-flex">
              <button class="btn btn-dark" type="submit"><i class="bi bi-eye"></i> Ver</button>
              <button class="btn btn-dark" type="submit"><i class="bi bi-cart-plus"></i> Comprar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card border-light">
          <picture class="card-img-top text-center">
            <img style="width: 75%;" src="src\picture\producto.jpg" alt="Title">
          </picture>
          <div class="card-body">
            <h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
            <p class="card-text" style="font-family: 'PT Serif', serif;">$10.50</p>
            <hr>
            <div class="btn-group d-flex">
              <button class="btn btn-dark" type="submit"><i class="bi bi-eye"></i> Ver</button>
              <button class="btn btn-dark" type="submit"><i class="bi bi-cart-plus"></i> Comprar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card border-light">
          <picture class="card-img-top text-center">
            <img style="width: 75%;" src="src\picture\producto.jpg" alt="Title">
          </picture>
          <div class="card-body">
            <h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
            <p class="card-text" style="font-family: 'PT Serif', serif;">$10.50</p>
            <hr>
            <div class="btn-group d-flex">
              <button class="btn btn-dark" type="submit"><i class="bi bi-eye"></i> Ver</button>
              <button class="btn btn-dark" type="submit"><i class="bi bi-cart-plus"></i> Comprar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card border-light">
          <picture class="card-img-top text-center">
            <img style="width: 75%;" src="src\picture\producto.jpg" alt="Title">
          </picture>
          <div class="card-body">
            <h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
            <p class="card-text" style="font-family: 'PT Serif', serif;">$10.50</p>
            <hr>
            <div class="btn-group d-flex">
              <button class="btn btn-dark" type="submit"><i class="bi bi-eye"></i> Ver</button>
              <button class="btn btn-dark" type="submit"><i class="bi bi-cart-plus"></i> Comprar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card border-light">
          <picture class="card-img-top text-center">
            <img style="width: 75%;" src="src\picture\producto.jpg" alt="Title">
          </picture>
          <div class="card-body">
            <h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
            <p class="card-text" style="font-family: 'PT Serif', serif;">$10.50</p>
            <hr>
            <div class="btn-group d-flex">
              <button class="btn btn-dark" type="submit"><i class="bi bi-eye"></i> Ver</button>
              <button class="btn btn-dark" type="submit"><i class="bi bi-cart-plus"></i> Comprar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer style="width: 90%;" class="m-auto">
    <!-- place footer h|ere -->
    <!-- genera un footer con lo general -->
    <div class="row text-center">

      <p class="col">Todos los derechos reservados - 2022</p>
      <p class="col">Contactanos</p>
      <p class="col">Siguenos en las redes</p>
      <p class="col">Terminos y condiciones</p>
    </div>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>