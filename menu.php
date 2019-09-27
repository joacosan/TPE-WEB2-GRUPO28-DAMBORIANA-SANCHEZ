
<?php
  require_once "db_menu.php";
  require_once "list_desayunos.php";
function menu(){  
   
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
  <title>El Rey del Bajon</title>
</head>

<body class="body">
  <!------HEADER----->
  <header>
    <!----------NAVBAR-------->
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark fixed-top">
      <div class="container">
        <a href="index.html" class="navbar-brand">
          El Rey del Bajon <i class="fas fa-crown"></i>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item  mx-auto">
              <a class="nav-link" href="index.php" action="home">Home</a>
            </li>
            <li class="nav-item mx-auto">
              <a class="nav-link" href="nosotros.html">Nosotros</a>
            </li>
            <li class="nav-item mx-auto">
              <a class="nav-link" href="galeria.html">Galeria</a>
            </li>
            <li class="nav-item active mx-auto">
              <a class="nav-link" href="" action="menu">Menu</a>
            </li>
            <li class="nav-item mx-auto">
              <a class="nav-link" href="contacto.html">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-----------BANNER-------->
  <section class="banner">
    <img src="img/menu/banner-menu.jpg" alt="banner" class="banner--img">
    <div class="banner--content">La mejor y exquisita comida está aquí.</div>
  </section>
  <!-----------MAIN-------->
  <main class="main">
    <article class="mainArticle">
      <!-----------------------DESAYUNOS------------------------------->
      <section class="sectionMenu">
        <div class="containerfluid font-weight-bold">
          <h2 class="title mt-4">Desayunos <i class="fas fa-hamburger"></i></h2>
          <table class="table table-striped text-center">
            <tbody>
              <?php
              getDesayunos();
              ?>
            </tbody>
          </table>
        </div>
        <!------------------------------ALMUERZOS - CENASs----------------->
        <div class="containerfluid font-weight-bold">
          <h2 class="title">Almuerzos - Cena <i class="fas fa-hamburger"></i></h2>
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">La Resaca</th>
                <th scope="col">Hamburguesa completa doble, Queso, Jamon,Lechuga, Huevo y tomate. Incluye
                  Gaseosa/Cerveza.
                </th>
                <th scope="col">$180.00</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Big Willie</td>
                <td>Doble carne, doble provoleta, bondiola desmechada a la BBQ, bacon picado y tomate . Incluye Gaseosa
                  o
                  Cerveza.</td>
                <td>$200.00</td>
              </tr>
              <tr>
                <td>Black Mex</td>
                <td>Pan negro, triple carne, triple dambo, bacon,tomate picado, guacamole + sour cream y nachos. Incluye
                  Gaseosa o Cerveza.</td>
                <td>$250.00</td>
              </tr>
              <tr>
                <td>LA TAPA ARTERIAS</td>
                <td>Triple Carne, Triple Dambo,todo esto literalmente bañado en cheddar y bacon picado.Incluye Gaseosa o
                  Cerveza.</td>
                <td>$250.00</td>
              </tr>
              <tr>
                <td>Hamburguesa Ranchera</td>
                <td>Hamburguesa de res con bacon, huevo con un colchon de cebolla caramelizada, racion de fritas con
                  cascara. Incluye Gaseosa o Cerveza.</td>
                <td>$200.00</td>
              </tr>
              <tr>
                <td>AMERICANA 2.0</td>
                <td>Triple carne, Triple Cheddar,Doble Dambo, Bacon, pepinillos, cebolla morada. Incluye Gaseosa o
                  Cerveza.
                </td>
                <td>$150.00</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-----------------------------CERVEZAS----------------------------------->
        <div class="containerfluid font-weight-bold">
          <h2 class="title">Cervezas <i class="fas fa-beer"></i></h2>
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">Ipa</th>
                <th scope="col">-</th>
                <th scope="col">$90.00</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Doble Ipa</td>
                <td> - </td>
                <td>$90.00</td>
              </tr>
              <tr>
                <td>Stout</td>
                <td> - </td>
                <td>$90.00</td>
              </tr>
              <tr>
                <td>Honey</td>
                <td> - </td>
                <td>$90.00</td>
              </tr>
              <tr>
                <td>Amber Ale</td>
                <td> - </td>
                <td>$90.00</td>
              </tr>
              <tr>
                <td>Barley Wine</td>
                <td> - </td>
                <td>$90.00</td>
              </tr>
            </tbody>
          </table>
          <!--------------------------------POSTRES--------------------------------->
          <div class="containerfluid font-weight-bold">
            <h2 class="title mt-4">Postres <i class="fas fa-ice-cream"></i></h2>
            <table class="table table-striped text-center">
              <thead>
                <tr>
                  <th scope="col">El Mañanero</th>
                  <th scope="col">Hamburguesa mediana simple con bacon cebolla y cheddar. Incluye Papas y Gaseosa.</th>
                  <th scope="col">$150.00</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Torta de chocolate</td>
                  <td>Suave y húmedo bizcocho de chocolate.</td>
                  <td>$100.00</td>
                </tr>
                <tr>
                  <td>Triángulo de mazapán</td>
                  <td>Crema de almendras con mazapán y mermelada de frambuesa</td>
                  <td>$120.00</td>
                </tr>
                <tr>
                  <td>Ensalada de frutas naturales</td>
                  <td>Ensalada de frutas naturales de estación servidas al plato.</td>
                  <td>$150.00</td>
                </tr>
                <tr>
                  <td>Tres Leches</td>
                  <td>Suave y húmedo bizcocho de vainilla embebido en tres leches.</td>
                  <td>$120.00</td>
                </tr>
                <tr>
                  <td>Versalles</td>
                  <td>Suave bizcocho de castañas y pecanas embebido en almibar con dulce de leche.</td>
                  <td>$120.00</td>
                </tr>
                <tr>
                  <td>Volcán de chocolate</td>
                  <td>Suave bizcocho de chocolate relleno de fudge. Se sirve caliente.</td>
                  <td>$150.00</td>
                </tr>
              </tbody>
            </table>
          </div>
      </section>
      <!-------CONTAINER Formulario Tu hamburguesa ideal----->
      <div class="container-fluid">
        <section class="InfoHamburguesa">
          <div class="container text-center">
            <h2 class="title m-4">¿Como sería tu hamburguesa ideal?</h2>
            <div class="imgBoxx"><img class="imgBIdeal" src="img/burgerideal.jpg" alt="tu hamburguesa ideal"></div>

            <p class="font-weight-bold mt-4">En el Rey del Bajon, queremos que vos diseñes la proxima hamburguesa de
              nuestra linea.
              A continuación tendras diferentes opciones arma la hamburguesa a tu gusto. La mejor sera seleccionada y se
              le
              entregara una tarjeta vip para todas sus compras</p>
          </div>
        </section>
        <!------------Formulario Hamburguesa Ideal------------>
        <div class="container ">
          <section class="form-hamburguesa">
            <div class="row justify-content-center">
              <div class="col-sm-9">
                <form id="formulario-hamburguesas">
                  <div class="form-group">
                    <h5 class="title">¿De cuantos pisos sería tu hamburguesa ideal?</h5>
                    <select class="form-control" id="carnesselect">
                      <option class="active">x1</option>
                      <option>x2</option>
                      <option>x3</option>
                      <option>x4</option>
                      <option>x5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <h5 class="title">¿Que quesos le pondrías a tu hamburguesa ideal?</h5>
                    <select class="form-control" id="quesosselect">
                      <option class="active">Cheddar</option>
                      <option>Dambo</option>
                      <option>Provoleta</option>
                      <option>Roquefort</option>
                      <option>Todos</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <h5 class="title">¿Que verduras le pondrías a tu hamburguesa ideal?</h5>
                    <select class="form-control" id="verdurasselect">
                      <option class="active">Tomate</option>
                      <option>Lechuga</option>
                      <option>Cebolla caramelizada</option>
                      <option>Cebolla</option>
                      <option>Todas</option>
                      <option>Ninguna</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <h5 class="title">¿Que aderezos le pondrías a tu hamburguesa ideal?</h5>
                    <input type="text" id="ingresoaderezos" class="input-group-text aderezo"
                      placeholder="Ingresa tu aderezo preferido: ">
                  </div>
                  <div class="form-group mb-3">
                    <h5 class="title">Ingresa tu correo electronico</h5>
                    <input type="email" class="form-control" id="ingresomail" placeholder="juancito@example.com"
                      required>
                  </div>
              </div>
              </form>
              <!------------Tabla Resultados de Hamburguesa Ideal------------>
              <table class="table table-hover mt-4">
                <thead>
                  <tr>
                    <th id="cantidadCarnes"></th>
                    <th id="mostrarcarnes"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th id="quesos"></th>
                    <td id="mostrarquesos"></td>
                  </tr>
                  <tr>
                    <th id="verduras">v</th>
                    <td id="mostrarverduras"></td>
                  </tr>
                  <tr>
                    <th id="aderezo"></th>
                    <td id="mostraraderezo"></td>
                  </tr>
                  <tr>
                    <th id="mail"></th>
                    <td id="mostrarmail"></td>
                  </tr>
                </tbody>
              </table>
              
              <div class="container text-center">
                <button type="button" class="btn btn-outline-danger btn-lg" id="btnAgregar">
                  Agregar
                </button>
                
                <button type="button" class="btn btn-outline-danger btn-lg" id="btnAgregarItems">
                  Agregar 3 
                </button>
              </div>
            </div>
            <div class="aviso text-center mt-4"></div>
            <div class="container mt-5">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Cantidad De Carnes</th>
                    <th>Queso</th>
                    <th>Verdura</th>
                    <th>Aderezo</th>
                    <th>Mail</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                  </tr>
                </thead>
                <tbody id="table-body">
                
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>
    </article>
    <!-----FIN MAIN ARTICLE---->
  </main>
  <!-----FIN MAIN------>

  <!---------------Footer--------------->
  <footer>
    <div class="container-fluid bg-dark p-4 mt-4">
      <div class="row">
        <div class="col-3 col-md-4 title-footer">
          <h5 class="text-uppercase text-light">El Rey del Bajon <i class="fas fa-crown"></i></h5>
        </div>
        <div class="col-3 col-md-4 text-center">
          <!-- Links -->
          <h5 class="text-uppercase text-center text-light title-footer"></h5>

          <ul class="list-footer title-footer">
            <li class="liFooter">
              <a href="#!"><i class="fab fa-facebook-square faceLi icons-color"></i></a>
            </li>
            <li class="liFooter">
              <a href="#!"><i class="fab fa-twitter-square twLi icons-color"></i></a>
            </li>
            <li class="liFooter">
              <a href="#!"><i class="fab fa-instagram igLi icons-color"></i></a>
            </li>
            <li class="liFooter">
              <a href="#!"><i class="fas fa-envelope mailLi icons-color"></i></a>
            </li>
            <li class="liFooter">
              <a href="#!"><i class="fas fa-phone phoneLi icons-color"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center text-light py-1 bg-dark">© 2019 Copyright:
      <a href="index.html">ElreydelBajon.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <!--script scroll-Reveal-->
  <script src="https://unpkg.com/scrollreveal"></script>
  <!--script boostrap 4-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <!--Main.js -->
  <script src="js/main.js"></script>
  <!--Menu.js-->
  <script src="js/menu.js"></script>
</body>
</html>
<?php
}   
?>