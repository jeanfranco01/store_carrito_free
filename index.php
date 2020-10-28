<!DOCTYPE html>
<html>
<head>
  <?php include 'particiones_globales/particion_head/head.html';?>
  <link rel="stylesheet" href="css/styles.css">
	<title>prueba</title>
</head>
  <!------------------------- Navbar content ------------------------->
 <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

<nav class="navbar navbar-expand navbar-dark bg-primary topbar mb-4 static-top shadow">
 
  <a class="navbar-brand black" href="#">Prueba para comprar</a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#display_menu" aria-controls="display_menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->
  <div class="collapse navbar-collapse" >
    <!-- Topbar Navbar -->
	<ul class="navbar-nav ml-auto">
	    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
	    <li class="nav-item dropdown no-arrow d-sm-none">
	      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        <i class="fas fa-search fa-fw"></i>
	      </a>
	      <!-- Dropdown - Messages -->
	      <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
	        <form class="form-inline mr-auto w-100 navbar-search">
	          <div class="input-group">
	            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
	            <div class="input-group-append">
	              <button class="btn btn-primary" type="button">
	                <i class="fas fa-search fa-sm"></i>
	              </button>
	            </div>
	          </div>
	        </form>
	      </div>
	    </li>

	    <!-- Nav Item - Alerts -->
	    <li class="nav-item dropdown no-arrow mx-1">
	      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        <i class="fas fa-cart-plus"></i>
	        <!-- Counter - Alerts -->
	        <span class="badge badge-danger badge-counter">3+</span>
	      </a>
	      <!-- Dropdown - Alerts -->
	      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
	        <h6 class="dropdown-header">
	          Alerts Center
	        </h6>
	        <a class="dropdown-item d-flex align-items-center" href="#">
	          <div class="mr-3">
	            <div class="icon-circle bg-primary">
	              <i class="fas fa-file-alt text-white"></i>
	            </div>
	          </div>
	          <div>
	            <div class="small text-gray-500">December 12, 2019</div>
	            <span class="font-weight-bold">A new monthly report is ready to download!</span>
	          </div>
	        </a>
	        <a class="dropdown-item d-flex align-items-center" href="#">
	          <div class="mr-3">
	            <div class="icon-circle bg-success">
	              <i class="fas fa-donate text-white"></i>
	            </div>
	          </div>
	          <div>
	            <div class="small text-gray-500">December 7, 2019</div>
	            $290.29 has been deposited into your account!
	          </div>
	        </a>
	        <a class="dropdown-item d-flex align-items-center" href="#">
	          <div class="mr-3">
	            <div class="icon-circle bg-warning">
	              <i class="fas fa-exclamation-triangle text-white"></i>
	            </div>
	          </div>
	          <div>
	            <div class="small text-gray-500">December 2, 2019</div>
	            Spending Alert: We've noticed unusually high spending for your account.
	          </div>
	        </a>
	        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
	      </div>
	    </li>

	    <!-- Nav Item - Messages -->
	    <li class="nav-item dropdown no-arrow mx-1">
	      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        <i class="fas fa-envelope fa-fw"></i>
	        <!-- Counter - Messages -->
	        <span class="badge badge-danger badge-counter">7</span>
	      </a>
	      <!-- Dropdown - Messages -->
	      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
	        <h6 class="dropdown-header">
	          Message Center
	        </h6>
	        <a class="dropdown-item d-flex align-items-center" href="#">
	          <div class="dropdown-list-image mr-3">
	            <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/30x30" alt="" >
	            <div class="status-indicator bg-success"></div>
	          </div>
	          <div class="font-weight-bold">
	            <div class="text-truncate">Hi there! I .</div>
	            <div class="small text-gray-400">Emily Fowler · 58m</div>
	          </div>
	        </a>
	       
	       
	        <a class="dropdown-item text-center small text-gray-400" href="#">Read More Messages</a>
	      </div>
	    </li>

	    

	    <!-- Nav Item - User Information -->
	    <li class="nav-item dropdown no-arrow">
	      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
	        <img class="img-profile rounded-circle" src="img/user.png">
	      </a>
	      <!-- Dropdown - User Information -->
	      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
	        <a class="dropdown-item" href="login.php">
	          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
	          Perfil
	        </a>
	        <a class="dropdown-item" href="#">
	          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
	          Ajustes
	        </a>
	        <a class="dropdown-item" href="#">
	          <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
	          Lista de actividades
	        </a>
	        <div class="dropdown-divider"></div>
	        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
	          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
	          Cerrar Sesión
	        </a>
	      </div>
	    </li>
      <!--x-- /Nav Item - User Information -->
	</ul>
  </div>
  
</nav>
</div>
</div>
  <!-----------x-------------- Navbar content --------------x----------->
<body>

<!-- listado productos  -->
	<div class="container">
        <div class="columns is-multiline">
            <div class="column is-full-mobile">
                <div class="columns is-centered is-mobile is-multiline">
                    <!-- 1 Sección de fotografías -->
                    <div class="column is-half column-full">
                        <div class="card"> 
                            <span class="price">$89.99</span>
                            <img src="img/item-1.png" alt="">
                            <div class="card-info">
                                <h4 class="has-text-black has-text-centered has-text-weight-bold"> Women's Burnt Orenge
                                    Casual TEE $89.99 </h4>
                                <p class="has-text-centered">Classic casual t-shirt for women on the move.
                                    100%
                                    cotton.</p>
                                <div class="card-buttons">
                                    <a href="#" class="btn btn--mini-rounded"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="#" class="btn btn--mini-rounded"><i class="fas fa-heart"></i></a>
                                    <a href="producto.html" class="btn btn--mini-rounded"><i class="fas fa-eye"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-full is-half">
                        <div class="card">
                            <span class="price">$47.50</span>
                            <img src="img/item-2.png" alt="">
                            <div class="card-info">
                                <h4 class="has-text-black has-text-centered has-text-weight-bold"> Women's Burnt Orenge
                                    Casual TEE $47.50 </h4>
                                <p class="has-text-centered">Classic casual t-shirt for women on the move.
                                    100%
                                    cotton.</p>
                                <div class="card-buttons">
                                <a href="#" class="btn btn--mini-rounded"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="btn btn--mini-rounded"><i class="fas fa-heart"></i></a>
                                <a href="producto.html" class="btn btn--mini-rounded"><i class="fas fa-eye"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column is-full">
                        <div class="card">
                            <span class="price">$65.95</span>
                            
                                <img src="img/item-3.png" alt="">
                            <div class="card-info">
                                <h4 class="has-text-black has-text-centered has-text-weight-bold"> Women's Burnt Orenge
                                    Casual TEE $65.95 </h4>
                                <p class="has-text-centered">Classic casual t-shirt for women on the move.
                                    100%
                                    cotton.</p>
                                <div class="card-buttons">
                                <a href="#" class="btn btn--mini-rounded"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="btn btn--mini-rounded"><i class="fas fa-heart"></i></a>
                                <a href="producto.html" class="btn btn--mini-rounded"><i class="fas fa-eye"></i></i></a>                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Segunda sección de fotografías -->
            <div class="column is-half is-full-mobile">
                <div class="columns is-mobile is-multiline">
                    <div class="column is-full">
                        <div class="card">
                            <span class="price"><strike>$107</strike> $89.99</span>
                                <img src="img/item-4.png" alt="">
                            <div class="card-info">
                                <h4 class="has-text-black has-text-centered has-text-weight-bold"> Women's Burnt Orenge
                                    Casual TEE $89.99 </h4>
                                <p class="has-text-centered">Classic casual t-shirt for women on the move.
                                    100%
                                    cotton.</p>
                                <div class="card-buttons">
                                <a href="#" class="btn btn--mini-rounded"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="btn btn--mini-rounded"><i class="fas fa-heart"></i></a>
                                <a href="producto.html" class="btn btn--mini-rounded"><i class="fas fa-eye"></i></i></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-full is-half">
                        <div class="card">
                            <span class="price">$29.99</span>
                            <img src="img/item-5.png" alt="">
                            <div class="card-info">
                                <h4 class="has-text-black has-text-centered has-text-weight-bold"> Women's Burnt Orenge
                                    Casual TEE $29.99 </h4>
                                <p class="has-text-centered">Classic casual t-shirt for women on the move.
                                    100%
                                    cotton.</p>
                                <div class="card-buttons">
                                <a href="#" class="btn btn--mini-rounded"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="btn btn--mini-rounded"><i class="fas fa-heart"></i></a>
                                <a href="producto.html" class="btn btn--mini-rounded"><i class="fas fa-eye"></i></i></a>   </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-full is-half">
                        <div class="card">
                            <span class="price">$34.79</span>
                            <img src="img/item-6.png" alt="">
                            <div class="card-info">
                                <h4 class="has-text-black has-text-centered has-text-weight-bold"> Women's Burnt Orenge
                                    Casual TEE $34.79 </h4>
                                <p class="has-text-centered">Classic casual t-shirt for women on the move.
                                    100%
                                    cotton.</p>
                                <div class="card-buttons">
                                  <a href="#" class="btn btn--mini-rounded"><i class="fas fa-shopping-cart"></i></a>
                                  <a href="#" class="btn btn--mini-rounded"><i class="fas fa-heart"></i></a>
                                  <a href="producto.html" class="btn btn--mini-rounded"><i class="fas fa-eye"></i></i></a></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <hr>
    <div class="container-fluid">
      <div class="site-slider ">
        <div class=" slider-one text-center">
          
          <div class=" card col-md-2 product pt-md-2 pt-4">
            <img class="card-img-top" src="img/item-1.png" alt="banner1"
            />
            <div class="card-body">
              <h4 class="has-text-black has-text-centered has-text-weight-bold">POLO $89.99 </h4>
              <p class="has-text-centered">Polo clasico 100% cotton.</p>
              <div class="card-buttons">
                  <a href="producto.php" class="btn btn--mini-rounded"><i class="fas fa-shopping-cart"></i></a>
                  <a href="producto.php" class="btn btn--mini-rounded"><i class="fas fa-heart"></i></a>
                  <a href="producto.php" class="btn btn--mini-rounded"><i class="fas fa-eye"></i></i></a>
              </div>
          </div>
            <!-- <span  class=" card-text border site-btn btn-span">Producto n1 dsasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasadsad
              dsadsadsadsds
              sdad</span> -->
          </div>
          <div class="card col-md-2 product pt-md-2 pt-4">
            <img src="img/item-2.png" alt="banner2"/>
            <span class="border site-btn btn-span">Producto n2 </span>
          </div>        
          <div class="card col-md-2 product pt-md-2 pt-4">
            <img src="img/item-5.png" alt="banner2"/>
            <span class="border site-btn btn-span">Producto n5 </span>
          </div>
          <div class="card col-md-2 product pt-md-2 pt-4">
            <img src="img/item-6.png" alt="banner6"/>
            <span class="border site-btn btn-span">Producto n6 </span>
          </div>
          <div class="card col-md-2 product pt-md-2 pt-4">
            <img src="img/item-7.png" alt="banner7"/>
            <span class="border site-btn btn-span">Producto n7 </span>
          </div>
          <div class="card col-md-2 product pt-md-2 pt-4">
            <img src="img/item-7.png" alt="banner7"/>
            <span class="border site-btn btn-span">Producto n8 </span>
          </div>       
        </div>
        <div class="slider-btn">
          <span class="prev position-top">
            <i class="fas fa-chevron-left"></i>
          </span>
          <span class="next position-top right-0">
            <i class="fas fa-chevron-right"></i></span>
        </div>
      </div>
    </div>
</body>
<hr>
<div>hola mundo </div>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, itaque. A nam porro temporibus saepe voluptas suscipit necessitatibus excepturi laudantium corporis, quis labore voluptates, ullam quia aut recusandae rerum tempore?

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.0.7/js/sb-admin-2.min.js" type="text/javascript"></script>
<!--slich slider javascript-->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/script.js"></script>
</html>