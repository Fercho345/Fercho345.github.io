@extends('Plantilla')

@section('index')

    <!-- Showcase/Hero area -->

    <section id="top" class="bg-light text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start text-md-center">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div class="text-start">
                    <h1>Obtén Tu Cita Sin <span class="text-info">Hacer Filas</span></h1>
                    <p class="lead my-4 text-start">No Más Pérdida de Tiempo</p>
                    <button class="btn btn-info rounded-pill text-white"  href="#">Ver Más</button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="img/health.png"
                    alt="Image of a Iphone with the app running">
            </div>
        </div>
    </section>



    <!-- Newletter little bar -->

    <section class="bg-info text-black p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 id="services" class="mb-3 mb-md-0 fs-5 text-white">No más fila, obtén tu cita en nuestro sitio web!</h3>
                <div class="input-group news-input">
                    <input type="email" class="form-control" placeholder="Ingresa tu Correo">
                    <button  class="btn btn-outline-light" type="button"
                        id="button-newsletter">Enviar</button>
                </div>
            </div>
        </div>
    </section>

        <!-- Services/Features Carusel-->

        <section class="p-5">
        <div class="container text-center">
            <!-- ancla -->
            <h3 class="mb-5">Puedes encontrar estos servicios... <br>
                <span class="text-info fs-5">...y otros más!</span>
            </h3>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/mision.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="">Consulta</h5>
                            <p>Disponibilidad de Fechas
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/vision.jpg" class="d-block w-100" alt="mechanic">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Agenda</h5>
                            <p>Tu cita con anticipación</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/valores.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Atiéndete</h5>
                            <p>Con nuestros profesionales capacitados</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span id="hdiw" class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <div>
        <h3 class="text-center">Mapa de<span class="text-info"> Sitio</span></h3>

        <br>
        <br>
        <div class="container" id="sitemap">
            <div class="row">
                <div class="col">
                    <a class="dropdown-item" href="/">
                        <p class="fs-6">Index</p>
                    </a>

                </div>


                <div class="col">
                    <a class="dropdown-item" href="#services">
                        <p class="fs-6">Services</p>
                    </a>
                </div>

                <div class="col">
                    <a class="dropdown-item" href="#hdiw">
                        <p class="fs-6">How Does It Works?</p>
                    </a>

                </div>
                <div class="col">
                    <a class="dropdown-item" href="#faq">
                        <p class="fs-6">FAQ</p>
                    </a>


                </div>
                <div class="col">
                    <a class="dropdown-item" href="#">
                        <p class="fs-7">About Us</p>
                    </a>
                    <a class="dropdown-item" href="/mission">
                        <p class="fs-7 text-secondary">Mision</p>
                    </a>
                    <a class="dropdown-item" href="/vision">
                        <p class="fs-7 text-secondary">Vision</p>
                    </a>
                    <a class="dropdown-item" href="/values">
                        <p class="fs-7 text-secondary">Values</p>
                    </a>

                </div>

            </div>
        </div>
        <br>
        <br>
        <br>
         <!-- Footer -->
 <footer class="bg-info text-white pt-5 pb-4">

<div class="container text-center text-md-left">

    <div class="row text-center text-md-left">

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold ">Acuerdos del Usuario</h5>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Términos y Condiciones</a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Aviso de Privacidad</a>
            </p>


        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold ">Ayuda</h5>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> FAQ</a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> How Does It Works?</a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Sitemap</a>
            </p>


        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold">CContáctanos</h5>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Tepic Nayarit, Los
                    Fresnos</a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> 311-354-4657</a>
            </p>

        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 ">Síguenos</h5>
            <p>
                <i class="fab fa-facebook-f "></i>
            </p>
            <p>
                <i class="fab fa-twitter"></i>
            </p>
            <p>
                <i class="fab fa-instagram"></i>
            </p>
            <p>
                <i class="fab fa-youtube"></i>
            </p>
        </div>

    </div>

    <hr class="mb-5">

    <div class="row align-items-center">
        <p>©Copyright2022 | <strong class="text-white">MediCitas UT</strong> | All rights reserved</p>
    </div>

</div>

</footer>
