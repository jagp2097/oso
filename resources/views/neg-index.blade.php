<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

      body{
        background-image: url({{ asset('images/subtle_dots.png') }});
      }

    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="{!! asset('images/logo_ex.png') !!}" class="d-inline-block align-top" width="75" height="75" alt="">
        </a>
        <a class="nav-item nav-link" href="#">Iniciar sesión <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Crear cuenta</a>
        <a class="nav-item nav-link" href="#">File</a>
        <a class="nav-item nav-link" href="#">Edit</a>
        <a class="nav-item nav-link" href="#">View</a>
        <a class="nav-item nav-link" href="#">Help</a>
      </nav>
    </header>

    <main class="col-md-12 container">
      <div class="m-5">
        <article class="text-center" style="background-color:yellow">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>
        <article class="text-center" style="background-color:ivory">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>
        <article class="text-center" style="background-color:#009B94">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>
      </div>

      <div style="background-color:brown" class="text-center">
        <p class="m-5">Algunos establecimientos</p>

        <div class="row container">
          <div class="col-md-3 card m-1" style="width:18rem;">
            <img src="{!! asset('images/logo_ex.png') !!}" class="card-img-top" width="180" height="180" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>


          <div class="col-md-3 card m-1" style="width:18rem;">
            <img src="{!! asset('images/logo_ex.png') !!}" class="card-img-top" width="180" height="180" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="col-md-3 card m-1" style="width:18rem;">
            <img src="{!! asset('images/logo_ex.png') !!}" class="card-img-top" width="180" height="180" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="col-md-3 card m-1" style="width:18rem;">
            <img src="{!! asset('images/logo_ex.png') !!}" class="card-img-top" width="180" height="180" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>


        </div>
      </div>


    </main>

    <footer>

    </footer>




  </body>
</html>
