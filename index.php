<?php
    function home(){
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

<body>
    <!------HEADER------->
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
                        <li class="nav-item active mx-auto">
                            <a class="nav-link" href="index.html" action="home">Home</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="nosotros.html">Nosotros</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="galeria.html">Galeria</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="menu.html">Menu</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Fin NavBar-->
    </header>
    <!--Fin Header-->
    <!-----------BANNER-------->
    <section class="banner">
        <img src="img/fondo.jpg" alt="banner" class="banner--img">
        <div class="banner--content">La mejor y exquisita comida está aquí.</div>
    </section>
    <section class="col-sm-12 text-center bg-danger">
        <div class="container-fluid">
            <h2 class="main--title ff">Bienvenido El Rey del bajon <i class="fas fa-crown"></i></h2>
            <p class="main--txt p-4">El chef argentino Esteban Reynoso, que ocupa el puesto N° 3 en el mundo, según el
                ranking de The World’s 50 Best Restaurants 2018, abre El Rey del Bajon, un innovador bar de
                hamburguesas. Luego de una cuidadosa investigación y del trabajo de una vida experimentando con
                ingredientes frescos y técnicas de alta cocina, el chef y propietario de Mirazur (3 estrellas Michelin)
                y Grand Coeur, en Francia, ha perfeccionado su receta de la hamburguesa hecha con los mejores
                ingredientes. Carne 100% de pastura · Ensaladas con vegetales 100% orgánicos · Frutas naturales de
                estación · Huevos de granja y mucho más...</p>
        </div>
    </section>
    <!--------FIN BANNER---------->
    <!-----------MAIN-------->
    <main class="main">
        <article class="mainArticle">
            <div class="container-fluid">
                <section class="headMain">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="main-content-left">
                                <img class="img-fluid" src="img/food3.jpg" alt="hamburguesa">
                            </div>
                        </div>
                        <div class="col-sm-6 align-self-center">
                            <div class="container-fluid text-center p-4">
                                <h1 class="title pt-3 ff">Disfruta de las mejores Hamburguesas</h1>
                                <p class="mt-5 text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.,
                                    eius
                                    pariatur nesciunt hic, libero ad repudiandae voluptatum dolor quibusdam </p>
                                <a href="#" class="btn btn-outline-danger btn-lg mt-2 text-center">Ver mas!</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <section class="bodyMain">
                <div class="container">
                    <!----Cards Container---->
                    <div class="container-cards">
                        <!--card 1-->
                        <div class="maincontainer">
                            <div class="thecard">
                                <div class="thefront">
                                    <img class="img-fluid" src="img/galeria/hamburguer1.jpg" alt="food1">
                                </div>
                                <div class="theback">
                                    <h2 class="title-cards">Especial del dia 1: <span>$120</span></h2>
                                    <p class="txt-cards">Hamburguesa de 2 pisos, con doble cheddar, huevo, panceta,
                                        cebolla
                                        y
                                        salsa barbecue. </p>
                                </div>
                            </div>
                        </div>
                        <!--card 2-->
                        <div class="maincontainer">
                            <div class="thecard">
                                <div class="thefront">
                                    <img class="img-fluid" src="img/galeria/hamburguer3.jpg" alt="food2">
                                </div>
                                <div class="theback">
                                    <h2 class="title-cards">Especial del dia 2: <span>$120</span></h2>
                                    <p class="txt-cards">Hamburguesa de 2 pisos, con doble cheddar, huevo, panceta,
                                        cebolla
                                        y
                                        salsa barbecue. </p>
                                </div>
                            </div>
                        </div>
                        <!--card 3-->
                        <div class="maincontainer">
                            <div class="thecard">
                                <div class="thefront">
                                    <img class="img-fluid" src="img/galeria/hamburger2.jpg" alt="food4">
                                </div>
                                <div class="theback">
                                    <h2 class="title-cards">Especial del dia 3: <span>$120</span></h2>
                                    <p class="txt-cards">Hamburguesa de 2 pisos, con doble cheddar, huevo, panceta,
                                        cebolla
                                        y
                                        salsa barbecue.</p>
                                </div>
                            </div>
                        </div>
                        <!--card 4-->
                        <div class="maincontainer">
                            <div class="thecard">
                                <div class="thefront">
                                    <img class="img-fluid" src="img/galeria/hamburguer4.jpg" alt="food5">
                                </div>
                                <div class="theback">
                                    <h2 class="title-cards">Especial del dia 4: <span>$120</span></h2>
                                    <p class="txt-cards">Hamburguesa de 2 pisos, con doble cheddar, huevo, panceta,
                                        cebolla
                                        y
                                        salsa barbecue. </p>
                                </div>
                            </div>
                        </div>
                        <!--card 5-->
                        <div class="maincontainer">
                            <div class="thecard">
                                <div class="thefront">
                                    <img class="img-fluid" src="img/galeria/galeria-big2.jpg" alt="food6">
                                </div>
                                <div class="theback">
                                    <h2 class="title-cards">Especial del dia 5: <span>$120</span></h2>
                                    <p class="txt-cards">Hamburguesa de 2 pisos, con doble cheddar, huevo, panceta,
                                        cebolla
                                        y
                                        salsa barbecue. </p>
                                </div>
                            </div>
                        </div>
                        <!--card 6-->
                        <div class="maincontainer">
                            <div class="thecard">
                                <div class="thefront">
                                    <img class="img-fluid" src="img/galeria/hamburguer.jpg" alt="food1">
                                </div>
                                <div class="theback">
                                    <h2 class="title-cards">Especial del dia 6: <span>$120</span></h2>
                                    <p class="txt-cards">Hamburguesa de 2 pisos, con doble cheddar, huevo, panceta,
                                        cebolla
                                        y
                                        salsa barbecue.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="GoogleMaps">
                    <!-----GOOGLE MAPS AND CONTACT INFO----->
                    <div class="container">
                        <div class="button text-center m-3">
                            <button type="button" id="btn-mostrarOcultar"
                                class="btn btn-outline-danger">Contactanos!</button>
                        </div>
                        <!--CONTACT INFO-->
                        <section class="map" id="contenedor">
                            <div class="container">
                                <div class="row text-center p-3">
                                    <div class="col-md-6 bg-danger">
                                        <p class="mt-3"><i class="fas fa-phone"></i> +2266-444-6-33</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mt-3"><i class="fas fa-map-marker-alt"></i> 14 de julio 335, Tandil -
                                            Argentina.</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <!--MAPA GOOGLE-->
                                <iframe class="maps"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12689.890794435478!2d-59.14346776894746!3d-37.33131631185765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95911f9826185921%3A0x4eb9c14ff12f1e9!2s14+de+Julio+335%2C+Tandil%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1557246368358!5m2!1ses!2sar"
                                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </section>

                    </div>
                </section>
            </section>
        </article>
    </main>
    <!--Fin Main-->
    <!-- Footer -->
    <footer>
        <div class="container-fluid bg-dark p-4 mt-5">
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
                            <a href=""><i class="fas fa-phone phoneLi icons-color"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="footer-copyright text-center text-light py-2 bg-dark">© 2019 Copyright:
            <a href="index.html">ElreydelBajon.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

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
    <!--google map-->
    <script src="js/mostrarOcultar.js"></script>
</body>

</html>
<?php
    }
?>