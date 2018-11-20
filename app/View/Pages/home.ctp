





<div class="text-center">

   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="img/logo-head.png.jpg" alt="Logo Cupomeal" >CupoMeal</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#initt">Inicio</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#clientes">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Productos</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contactanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="cursor: pointer;"  data-toggle="modal" data-target="#miModal">Sing up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</div>

    <!-- Header -->
    <header class="masthead">
              <div  id="initt" class="intro-text">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicat ors" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/sld1.jpg" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/sld2.jpg" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/sld3.jpg" alt="">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="img/sld4.jpg" alt="">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="img/sld5.jpg" alt="">
    </div>
     <div class="carousel-item">


      <img class="d-block w-100" src="img/sld6.jpg" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

    </header>

    <!-- Services -->
    <section id="clientes">
      <div class="container text-center ">
        <div id="myBtnContainer">
  <button class="btnGallery active" onclick="filterSelection('all')"> Show all</button>
  <button class="btnGallery" onclick="filterSelection('pollerias')"> Pollerias</button>
  <button class="btnGallery" onclick="filterSelection('fastfood')"> FastFood</button>
  <button class="btnGallery" onclick="filterSelection('restaurante')"> Restaurante/Parrillas</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">


 <div class="column pollerias">
    <div class="content">
      <img src="img/patrocinio3.png" alt="Pollerias" style="width:100%">
     
    </div>
  </div>

  <div class="column restaurante">
    <div class="content">
      <img src="img/patrocinio2.png" alt="Restaurante" style="width:100%">
  </div>
</div>

  

   <div class="column fastfood">
    <div class="content">
      <img src="img/patrocinio4.png" alt="FastFood" style="width:100%">
     </div>
  </div>

   <div class="column fastfood">
    <div class="content">
      <img src="img/patrocinio5.png" alt="FastFood" style="width:100%">
     
    </div>
  </div>
     <div class="column fastfood">
    <div class="content">
      <img src="img/patrocinio1.png" alt="FastFood" style="width:100%">
     
    </div>
  </div>

 
  


</div>
        
    
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Cupones</h2>
            <h3 class="section-subheading text-muted">Comida de primera calidad, deliciosa y que mejor, a bajo precio !</h3>
          </div>
        </div>
<div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              
                 <?= $this->Html->image('cupomaxi.jpg',['class' => 'img-fluid']) ?> 
            </a>
            <div class="portfolio-caption">
              <h4>CUPOMAXI</h4>
              </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              
                 <?= $this->Html->image('hamburguesa.jpg',['class' => 'img-fluid']) ?> 
            </a>
            <div class="portfolio-caption">
              <h4>CUPOHAMBURGUER</h4>
              
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              
                 <?= $this->Html->image('burritos.jpg',['class' => 'img-fluid']) ?> 
            </a>
            <div class="portfolio-caption">
              <h4>LITTLE DONKEYS</h4>
              
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              
               <?= $this->Html->image('desayuno.jpg',['class' => 'img-fluid']) ?> 
            </a>
            <div class="portfolio-caption">
              <h4>CUPOBREAK</h4>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              
                <?= $this->Html->image('sushi.jpg',['class' => 'img-fluid']) ?> 
            </a>
            <div class="portfolio-caption">
              <h4>CUPOSUSHI</h4>
              
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              
                <?= $this->Html->image('pasteldecarne.jpg',['class' => 'img-fluid']) ?> 
            </a>
            <div class="portfolio-caption">
              <h4>CUPOMEAT</h4>
              
            </div>
          </div>

          
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              
                <?= $this->Html->image('articos.jpg',['class' => 'img-fluid']) ?> 
            </a>
            <div class="portfolio-caption">
              <h4>CUPOICEBERG</h4>
              
            </div>
          </div>

          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              
                <?= $this->Html->image('malteada.jpg',['class' => 'img-fluid']) ?> 
            </a>
            <div class="portfolio-caption">
              <h4>CUPOMILSHAKE</h4>
              
            </div>
          </div>

          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              
             <?= $this->Html->image('grande.jpg',['class' => 'img-fluid']) ?> 
            </a>
            <div class="portfolio-caption">
              <h4>CUPOBIGGIE</h4>
              
            </div>
          </div>
          
</div>
</div>
    </section>

    
    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Nuestro equipo de trabajo</h2>
            <h3 class="section-subheading text-muted">Siempre dispuestos al servicio de ustedes!</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="team-member ">
              <!-- <img src="img/nosotros-jos.JPG" alt="" > -->
               <?= $this->Html->image('nosotros-jos.jpg',['class' => 'mx-auto rounded-circle'])?> 
              <h4>Josdy Yadira Valdez Yrribarren</h4>
              <p class="text-muted">Developer & Analista de Sistemas</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/Josdy96">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/xhope2516/">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="team-member">
              <!-- <img src="img/nosotros-tev.JPG" alt="" > -->
               <?= $this->Html->image('nosotros-tev.jpg',['class' => 'mx-auto rounded-circle'])?> 
              <h4>Steven Omar Mezones Novoa</h4>
              <p class="text-muted">CEO & Especialista en Marketing Digital</p>
              <ul class="list-inline social-buttons">
               
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/mezonesnovoa">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/stevenmenovoa/">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
    
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Nuestros equipos de trabajo se reunen constamente para ofrecerles la mayor comodidad, y un servicio de calidad para su completa satisfacción. </p>
          </div>
        </div>
      </div>
    </section>

<!-- About -->
    <section id="about">
      <div class="container ">
        <div class="row">
          <div class="col-lg-12 text-center">
            <img src="img/cupomeal-acercade.jpg" alt="" style="width: 400px;">
           <p> <h3 class="section-subheading text-muted">Conoce un poco más!</h3></p>
          </div>
        </div>
          <article class="text-justify">
                
                
                <P> CUPOMEAL es una plataforma web que busca consolidar el trato de una empresa y el de sus clientes, busca asegurar mayores ingresos a las empresas y a su vez beneficiar a los usuarios con descuentos de infarto! </P>
                <p> ¿Te interesa algún cupón descuento o una oferta? Solo basta con un clic.</p>
                <p>Nuestro equipo trabaja en estrecha colaboración con los gerentes de los restaurantes que patrocinan la app en línea, lo que nos permite negociar los mejores precios y rebajas del menu diverso que ofrecen en sus locales.</p>
                <p>Porque sabemos que solo las rebajas sustanciosas son realmente buenas rebajas para nuestros usuarios. Los cupones descuento más atractivos solo los puedes encontar en nuestro portal web.
                </P>
            
            </article>
        

  
      </div>
    </section>


      <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contáctanos</h2>
            <h3 class="section-subheading text-muted">Escríbenos queremos saber mas de ti.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Celular *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Mensaje *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensaje</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; CuponMeal 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Politica de privacidad</a>
              </li>
              <li class="list-inline-item">
                <a href="https://goo.gl/forms/xUTTJZwaxUCMJLL73" target="_blank">Libro de Reclamaciones</a>
              </li>
              <li class="list-inline-item">
                <a href="#contact">Dueños de Restaurantes: Únanse!</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">CUPOMAXI</h2>
                  
                  <p>Con este cupon tendras un 15% de desc. en este producto, no desaproveches esta oferta , GO & BUY IT!</p>
                  <ul class="list-inline">
                    <li>Precio: S/. 10.00 </li>
                    <li>Fecha Limite: 2009-11-18 </li>
                    <li>Duracion: 5 dias </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">CUPOHAMBURGUER</h2>
                  <p class="item-intro text-muted">Seccion de Porductos y sus cupones asociados</p>
                  <p>Con este cupon tendras un descuentazo, buena comida y a bajo precio, no desaproveches esta oferta , GO & BUY IT!</p>
                  <ul class="list-inline">
                    <li>Precio: S/. 9.50 </li>
                    <li>Fecha Limite: 2009-11-18 </li>
                    <li>Duracion: 5 dias </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">LITTLE DONKEYS</h2>
                  <p class="item-intro text-muted">Seccion de Porductos y sus cupones asociados</p>
                  <p>Con este cupon obtendras un 2x1 , que mejor que comprar un producto y llevarte 2 , WU!, no desaproveches esta oferta , GO & BUY IT!</p>
                  <ul class="list-inline">
                    <li>Precio: S/. 12.90 </li>
                    <li>Fecha Limite: 2009-11-18 </li>
                    <li>Duracion: 5 dias </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">CUPOBREAK</h2>
                  
                  <p>Con este cupon tendras un descuentazo por un buen servido desayuno en tu restaurante favorito, CHOLITO LINDO, no desaproveches esta oferta , GO & BUY IT!</p>
                  <ul class="list-inline">
                     <li>Precio: S/. 11.80 </li>
                    <li>Fecha Limite: 2009-11-18 </li>
                    <li>Duracion: 8 dias </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close </button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">CUPOSUSHI</h2>
                  
                  <p>Con este cupon obtendras un descuentazo, comida de primera calidad a buen precio, no desaproveches esta oferta , GO & BUY IT!</p>
                  <ul class="list-inline">
                    <li>Precio: S/. 20.00 </li>
                    <li>Fecha Limite: 2009-11-18 </li>
                    <li>Duracion: 6 dias </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close </button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">CUPOMEAT</h2>
                  
                  <p>Con este cupon obtendras un descuenton, Antes: 15.90,buena comida , a buen precio, no desaproveches esta oferta , GO & BUY IT!</p>
                  <ul class="list-inline">
                    <li>Precio: S/. 8.90 </li>
                    <li>Fecha Limite: 2009-11-18 </li>
                    <li>Duracion: 5 dias </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 7 -->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">CUPOICEBERG</h2>
                  
                  <p>Con este cupon tendras un super combo, 2x1, que mejor que pagar por un producto y llevarte 2,no desaproveches esta oferta , GO & BUY IT!</p>
                  <ul class="list-inline">
                     <li>Precio: S/. 9.80 </li>
                    <li>Fecha Limite: 2009-11-18 </li>
                    <li>Duracion: 6 dias </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 8 -->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">CUPOMILSHAKE</h2>
                  
                  <p>Con este cupon tendras un super combo, 2x1, que mejor que pagar por un producto y llevarte 2,no desaproveches esta oferta , GO & BUY IT!</p>
                  <ul class="list-inline">
                   <li>Precio: S/. 12.50 </li>
                    <li>Fecha Limite: 2009-11-18 </li>
                    <li>Duracion: 3 dias </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal9 -->
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">CUPOBIGGIE</h2>
                  
                  <p>Con este cupon obtendras un 50% de descuento,buena comida ,Antes:20.00 no desaproveches esta oferta , GO & BUY IT!</p>
                  <ul class="list-inline">
                    <li>Precio: S/. 10.00 </li>
                    <li>Fecha Limite: 2009-11-18 </li>
                    <li>Duracion: 5 dias </li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      
       




          <div class="container">
            <div class="row">
      <div class="col-md-12 col-md-offset-3 ">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row " style="margin: 0 auto;">
              <div class="col-xs-12 col-md-2 col-md-offset-2">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-12 col-md-2 col-md-offset-2">
                <a href="#" id="register-form-link">Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3 mx-auto">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <form id="register-form" action="https://phpoll.com/register/process" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3 mx-auto">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        









      
    </div>
  </div>
</div>



