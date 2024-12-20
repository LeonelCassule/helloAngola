<!DOCTYPE html>
<html
 <?php language_attributes();?>
>
<head>
    <meta 
    <?php bloginfo('charset'); ?>
    >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>

    <!--CSS bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- foicon do projecto-->
   <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!--Css do Projecto-->
    <link rel="stylesheet" href="wp-content/themes/helloAngola/assets/css/style.css">
   
</head>
<body>
    
    <!-- JavaScript Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--NAVBAR-->
<nav class="navbar navbar-expand-lg fixed-top bg-primary-color" id="navbar">
    <div class="container py-3">
        <a href="#" class="navbar-brand">
            <img src="wp-content/themes/helloAngola/assets/image/imovi-icon.png" alt="hello Angola">
            <span>Hello Angola</span>
        </a>
        <button 
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar-items"
        aria-controls="navbar-items"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
       <i class="bi bi-list"></i> 
       </button> 
       <div class="collapse navbar-collapse" id="navbar-items">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About us</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">History</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Project</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>
       </div> 

    </div>
</nav>

<!--SLIDER-->
<div class="container" id="slider-container">
    <div class="carousel slider" id="slider" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button
        type="button"
        class="active"
        data-bs-target="#slider"
        data-bs-slide-to="0"
        aria-current="true"
        aria-label="slide 1"
        ></button>
        <button
        type="button"
        class="active"
        data-bs-target="#slider"
        data-bs-slide-to="1"
        aria-label="slide 2"
        ></button>
        <button
        type="button"
        class="active"
        data-bs-target="#slider"
        data-bs-slide-to="2"
        aria-label="slide 3"
        ></button>
    </div>
    <div class="carousel-inner">
       <div class="carousel-item active">
        <img src="wp-content/themes/helloAngola/assets/image/banner-1.jpg" alt="casa 1" class="d-block w-100">
            <div class="carousel-caption">
            <h5>Casas Planejadas</h5>
            <a href="#" class="btn btn-dark">Ver Projectos</a>
        </div>
        </div>
        <div class="carousel-item">
            <img src="wp-content/themes/helloAngola/assets/image/banner-2.jpg" alt="casa 2" class="d-block w-100">
                <div class="carousel-caption">
                <h5>Projecto Inovadores</h5>
                <a href="#" class="btn btn-dark">Ver Projectos</a>
            </div>
        </div>    
            <div class="carousel-item">
                <img src="wp-content/themes/helloAngola/assets/image/banner-3.jpg" alt="casa 3" class="d-block w-100">
                    <div class="carousel-caption">
                    <h5>Projectos Complexos</h5>
                    <a href="#" class="btn btn-dark">Ver Projectos</a>
                </div>
            </div>    
       </div> 
    <button class="carousel-control-prev"
       type="button"
       data-bs-target="#slider"
       data-bs-slide="prev">
       <i class="bi bi-chevron-compact-left"></i>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next"
       type="button"
       data-bs-target="#slider"
       data-bs-slide="next">
       <i class="bi bi-chevron-compact-right"></i>
      <span class="visually-hidden">Next/span>
    </button>
        
</div>

<!--MINI BANNER-->
<div class="col-12 col-md-10 offset-md-1" id="mini-banners">
<div class="row">
    <div class="col-12 col-md-4">
        <div class="card text-center">
            <i class="bi bi-box primary-color"></i>
            <div class="card-body">
            <h5 class="card-title primary-color">Projectos Complexos</h5>              
        <p class="card-text secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
            <a href="#" class="btn btn-dark">Saber Mais</a>       
        </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card text-center">
            <i class="bi bi-layers primary-color"></i>
            <div class="card-body">
            <h5 class="card-title primary-color">Você Participa Também</h5>              
        <p class="card-text secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
            <a href="#" class="btn btn-dark">Saber Mais</a>       
        </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card text-center">
    <i class="bi bi-lightning-charge primary-color"></i>
            <div class="card-body">
            <h5 class="card-title primary-color">Adiantamento de Entrega</h5>              
        <p class="card-text secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
            <a href="#" class="btn btn-dark">Saber Mais</a>       
        </div>
        </div>
    </div>
</div>

</div>
</div> 

<!--DESTAQUES-->
    <div class="container" id="featured-container">
        <div class="col-12">
            <h2 class="title primary-color">Trabalhos em Destaque</h1>
                <p class="subtitle secondary-color">
                    Conheça os Nossos Projectos Mais Desafiadores
                </p>  
        </div>
        <div class="col-12" id="featured-images">
            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <img src="wp-content/themes/helloAngola/assets/image/project-1.jpg" alt="Projecto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projecto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="wp-content/themes/helloAngola/assets/image/project-2.jpg" alt="Projecto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projecto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="wp-content/themes/helloAngola/assets/image/project-3.jpg" alt="Projecto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projecto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="wp-content/themes/helloAngola/assets/image/project-4.jpg" alt="Projecto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projecto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="wp-content/themes/helloAngola/assets/image/project-5.jpg" alt="Projecto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projecto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="wp-content/themes/helloAngola/assets/image/project-6.jpg" alt="Projecto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projecto</h3>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!--INFO-->
    <div class="container" id="info-container">
        <div class="col-12">
            <h2 class="title primary-color">Detalhes Importante</h1>
                <p class="subtitle secondary-color">
                    Saiba Mais a Experiência da Nossa  Incrivel
                </p>  
        </div>
        <div class="col-12">
            <div class="row">
            <div class="col-12 col-md-5" id="info-banners">
                <img src="wp-content/themes/helloAngola/assets/image/infobanner.jpg" 
                alt="information"
                class="img-fluid">                
            </div>
            <div class="col-12 col-md-7 bg-secondary" id="info-content">
               <div class="row">
                <div class="col-12">
                   <h2 class="title primary-color">
                    Estes Dados Fazem a Diferença
                   </h2> 
                    <p class="subtitle secondary-color">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                      Libero quo earum sed voluptas laborum eius, aliquid est,
                      quae incidunt sit, modi iste. 
                      Facere hic earum magnam nesciunt debitis odit nostrum?  
                    </p>
                </div>

                <div class="col-12" id="info-numbers">
                  <div class="row">
                    <div class="col-4">
                      <h3 class="primary-color">18</h3>  
                    <p class="secondary-color">Criação de Software</p>
                    </div>
                    <div class="col-4">
                        <h3 class="primary-color">95</h3>  
                      <p class="secondary-color"> WordPress & Elementor</p>
                      </div>
                      <div class="col-4">
                        <h3 class="primary-color">12</h3>  
                      <p class="secondary-color">Angular</p>
                      </div>
                  </div>  
                </div>
                <div class="col-12">
                  <a  href="#" class="btn btn-dark">Saber Mais</a>  
                </div>
               </div> 
            </div>
            </div>
        </div>
    </div>

    <!--FOOTER-->
    <footer class="container-fluid bg-dark-color" id="footer">
        <div class="container">
            <div class="row">
                <!--FOOTTER TOP-->
                <div class="col-12" id="footer-top">
                   <div class="row justify-content-between">
                    <div class="col-4">
                        <h2>Hello Angola</h2>
                    </div>
                    <div class="col-4" id="social-icons">
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-youtube"></i>
                        <i class="bi bi-twitter"></i>
                    </div>
                   </div> 
                </div>

                <?php wp_footer();?>
                <!--FOOTER DETAILS-->
                <div class="col-12" id="footer-details">
                    <div class="row">
                        <div class="col-12 col-md-4" id="news-container">
                          <h4>Fique Por Dentro das Novidades</h4>  
                        <p class="secondary-color">Inscreva-se para recebeer em primeira mão</p>
                        <form>
                           <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Informe o seu Email">
                           </div>
                           <buttom class="btn btn-dark" type="submit">Inscrever</buttom> 
                        </form>
                    </div>
                    <div class="col-12 col-md-4" id="contact-container">
                        <h4>Formas de Contacto</h4>
                        <p class="secondary-color">+244 946 947 372</p>
                        <p class="secondary-color">leonelsalmos@gmail.com</p>
                    </div>
                    <div class="col-12 col-md-4" id="links-container">
                        <div class="row">
                            <h4>Você Pode Estar Procurando por:</h4>
                            <div class="col-6">
                              <ul class="list-unstyled">
                                <li><a href="#" class="secondary-color">Projectos</a></li>
                                <li><a href="#" class="secondary-color">WordPress</a></li>
                                <li><a href="#" class="secondary-color">Angular</a></li>
                              </ul>  
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled">
                                  <li><a href="#" class="secondary-color">Contratar</a></li>
                                  <li><a href="#" class="secondary-color">Trabalhe Connosco</a></li>
                                  <li><a href="#" class="secondary-color">Contacto</a></li>
                                </ul>  
                              </div>
                        </div>
                    </div>
                    </div>
                </div>
                
                <!--FOOTER BOTTOM-->
             <div class="col-12" id="footer-bottom">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-3">
                      <p class="secondary-color">Leonel Cassul &copy; 2024</p> 
                    </div>
                    <div class="col-12 col-md-3">
                        <p class="secondary-color">Hello Angola <i class="bi bi-heart"></i></p> 
                      </div>
                </div>
             </div>  
            </div>
        </div>
    </footer>
</div>
</body>
</html>
