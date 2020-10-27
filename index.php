<?php
include 'includes/templates/header.php';
?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <!-- Barra de navegacion -->
        <?php 
        include 'includes/templates/barra-navegacion.php';
        ?>


        <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=LdgJNtl5fZA',showYTLogo:false, showAnnotations: false, showControls: false, cc_load_policy: false, containment:'#home-section',autoPlay:true, mute:true, startAt:48, stopAt:59, opacity:1}">
        </a>


        <div class="intro-section" id="home-section" style="background-color: #ccc;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1 class="mb-3">Administra tu GIMNASIO</h1>
                        <p class="lead mx-auto desc mb-5">Un sistema completo de control para tu gimnasio, con todo lo que tu necesitas, completamente en la Web y desde cualquier dispositivo a cualquier hora.</p>
                        <p class="text-center">
                            <a href="registro.php" class="btn btn-outline-white py-3 px-5">Registrate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-8 section-heading">
                        
                        <h2 class="heading mb-3">¿Que es ALFA?</h2>
                        <p>Un sistema completo en el cual, podras administrar tu gimnasio, en cualquier momento y a cualquier hora.</p>
                    </div>
                </div>

                <!-- Slider -->
                <div class="owl-carousel nonloop-block-14 block-14" data-aos="fade">
                    <div class="slide">
                        <div class="ftco-feature-1">
                            <!-- Icono -->
                            <span class="icon flaticon-fit"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Registro</h2>
                                <p>Registrar un nuevo cliente, nunca fue mas facil, con ALFA, tu lo puedes hacer desde tu celular, tableta o PC.</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-gym-1"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Control</h2>
                                <p>Puedes llevar un mejor control de las personas que van a tu gimnasio, las horas que entrenan, dias con mas gente, etc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-gym"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Graficas</h2>
                                <p>Todo se entiende mejor, si tu lo puedes ver. Con graficos simples, te muestran los numeros mensuales.</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-vegetables"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Promociones</h2>
                                <p>En caso de que tienes clientes VIP o con algunas promociones, el sistema aplicara los cambios necesarios a cada cliente, para un mejor control.</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-fruit-juice"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Simple</h2>
                                <p>Con ALFA, no queremos que te compliques la vida, tenemos una interfaz intuitiva y simple.</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-stationary-bike"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Ventas</h2>
                                <p>Una parte muy importante en tu gimnasio, es la venta de todo tipo de productos, por eso, tu mismo puedes agregar los productos que tu quieras.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="bgimg" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">

            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <h2 class="">Facil de usar</h2>
                        <p class="lead mx-auto desc mb-5">Sin instalaciones ni descargas. Solo registrate y empieza a usar ALFA al instante.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="site-section" id="classes-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-8  section-heading">
                        <span class="subheading">¿Que beneficios tengo?</span>
                        <h2 class="heading mb-3">¿Donde puedo empezar?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis consequatur cum neque? Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.php" class="class-item-thumbnail">
                                <img src="images/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">

                                <h2><a href="single.php">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.php" class="class-item-thumbnail">
                                <img src="images/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">

                                <h2><a href="single.php">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.php" class="class-item-thumbnail">
                                <img src="images/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">

                                <h2><a href="single.php">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.php" class="class-item-thumbnail">
                                <img src="images/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">

                                <h2><a href="single.php">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.php" class="class-item-thumbnail">
                                <img src="images/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">

                                <h2><a href="single.php">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.php" class="class-item-thumbnail">
                                <img src="images/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">

                                <h2><a href="single.php">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.php" class="class-item-thumbnail">
                                <img src="images/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">

                                <h2><a href="single.php">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.php" class="class-item-thumbnail">
                                <img src="images/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">

                                <h2><a href="single.php">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.php" class="class-item-thumbnail">
                                <img src="images/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">

                                <h2><a href="single.php">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.php" class="class-item-thumbnail">
                                <img src="images/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">

                                <h2><a href="single.php">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bgimg" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <h2 class="">Every Step Counts</h2>
                        <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit ipsam tempore, sapiente modi facilis est?</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section" id="schedule-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-8  section-heading">
                        <span class="subheading">Fitness Sched</span>
                        <h2 class="heading mb-3">Schedule</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <ul class="nav days d-flex" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="sunday-tab" data-toggle="tab" href="#nav-sunday" role="tab" aria-controls="sunday" aria-selected="true">S</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="monday-tab" data-toggle="tab" href="#nav-monday" role="tab" aria-controls="monday" aria-selected="false">M</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#nav-tuesday" role="tab" aria-controls="tuesday" aria-selected="false">T</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#nav-wednesday" role="tab" aria-controls="wednesday" aria-selected="false">W</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#nav-thursday" role="tab" aria-controls="thursday" aria-selected="false">T</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="friday-tab" data-toggle="tab" href="#nav-friday" role="tab" aria-controls="friday" aria-selected="false">F</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#nav-saturday" role="tab" aria-controls="saturday" aria-selected="false">S</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="nav-sunday" role="tabpanel" aria-labelledby="nav-sunday-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Sunday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Sunday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Sunday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Sunday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Sunday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Sunday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Sunday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Sunday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Sunday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Sunday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-monday" role="tabpanel" aria-labelledby="nav-monday-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Monday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Monday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Monday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Monday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>



                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Monday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Monday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Monday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Monday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Monday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Monday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-tuesday" role="tabpanel" aria-labelledby="nav-tuesday-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Tuesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Tuesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>



                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Tuesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Tuesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Tuesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Tuesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Tuesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Tuesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>



                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Tuesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Tuesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-wednesday" role="tabpanel" aria-labelledby="nav-wednesday-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Wednesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Wednesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>



                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Wednesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Wednesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Wednesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Wednesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Wednesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Wednesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>



                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Wednesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Wednesday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-thursday" role="tabpanel" aria-labelledby="nav-thursday-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Thursday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Thursday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Thursday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Thursday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>



                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Thursday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Thursday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Thursday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Thursday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Thursday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Thursday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-friday" role="tabpanel" aria-labelledby="nav-friday-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Friday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Friday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>



                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Friday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Friday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Friday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Friday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Friday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Friday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>



                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Friday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Friday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-saturday" role="tabpanel" aria-labelledby="nav-saturday-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Saturday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Saturday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>




                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Saturday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Saturday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Saturday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_3.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Saturday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Saturday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_2.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Saturday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>



                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_4.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Saturday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>

                                <div class="class-item d-flex align-items-center">
                                    <a href="single.html" class="class-item-thumbnail">
                                        <img src="images/img_1.jpg" alt="Image">
                                    </a>
                                    <div class="class-item-text">
                                        <span>Saturday 7:30am - 9:00am</span>
                                        <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                        <span>By Justin Daniel</span>,
                                        <span>30 minutes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="bgimg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <h2 class="">Your Fitness Partner Where Ever You Are</h2>
                        <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, nisi cum officia alias recusandae neque reprehenderit.</p>
                    </div>
                </div>
            </div>
        </div>




        <div class="site-section" id="trainer-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
                    <div class="col-md-8  section-heading">
                        <span class="subheading">Trainer</span>
                        <h2 class="heading mb-3">Our Trainers</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="">
                        <div class="person">
                            <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                            <h3>Justin Daniel</h3>
                            <p class="position">Trainer</p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="person">
                            <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                            <h3>Matthew Davidson</h3>
                            <p class="position">Trainer</p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="person">
                            <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                            <h3>Matthew Davidson</h3>
                            <p class="position">Trainer</p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="person">
                            <img src="images/person_4.jpg" alt="Image" class="img-fluid">
                            <h3>Matthew Davidson</h3>
                            <p class="position">Trainer</p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="site-section" id="services-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
                    <div class="col-md-8  section-heading">
                        <span class="subheading">Escoge el que mas quieras</span>
                        <h2 class="heading mb-3">Paquetes</h2>
                        <p>Escoge el plan de quieras, y cancelalo cuando quieras. En caso de mas detalles, llama a soporte tecnico.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-fit"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Gratuito</h2>
                                <ol>
                                    <li>Coffee</li>
                                    <li>Tea</li>
                                    <li>Milk</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-gym-1"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Emprendedor</h2>
                                <p>En este paquete, se paga para un numero mayor de clientes, seccion de tienda, mas clientes, resultados mensuales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-gym"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Titan</h2>
                                <p>Esta seccion, es mas premium, lo mejor de lo mejor.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-vegetables"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Union con seccion 1</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ullam tempore aliquam dolores quos.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-fruit-juice"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Union con seccion 2</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic aut libero, doloribus. Magni, nihil.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="ftco-feature-1">
                            <span class="icon flaticon-stationary-bike"></span>
                            <div class="ftco-feature-1-text">
                                <h2>Union con seccion 3</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat dolorem debitis assumenda beatae quis.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- .site-wrap -->


    <?php
    include 'includes/templates/footer.php';
    ?>


</body>