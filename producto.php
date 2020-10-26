<!DOCTYPE html>
<html>
<head>
  <?php include 'particiones_globales/particion_head/head.html';?>
  <link rel="stylesheet" href="css/styles.css">
	<title>prueba</title>
</head>
  <!------------------------- Navbar content -------------------------> 
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <nav class="navbar navbar-expand navbar-dark bg-primary topbar mb-4 static-top shadow">
            <a class="navbar-brand black" href="#">Carrito de compras</a>
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
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4 producto_img">
                <img src="img/item-6.png" alt="">
            </div>
            <div class=" col-sm-6 col-lg-8 descripcion_info">
                <div class="price-seller" style="">
                    <!--<div><vtex.cmc:skuPrice></vtex></div>-->
                    <div class="price-seller-cnt">
                        <div class="js-eof"></div>
                        <div class="price js-price-price tam">
                            <span class="flag">-11%</span>
                            <i>Oferta</i><em>S/ </em><span>7,980</span><sup></sup> 
                        </div>
                        <div class="listprice js-price-listprice">
                            <i>Regular</i>
                            <em>S/ </em>
                            <span>8,990</span>
                            <sup></sup>
                        </div>
                    </div>
                    <div class="flag-wrapper ficha">
                        <p class="flag nuevo---lo-nuevo---landing">
                            nuevo - Lo Nuevo - Landing
                        </p>
                    </div>
                </div>

                <div class="controllers-seller">
                    <div class="controllers-seller-cnt">
                        <div class="ctrl-inner">
                            <div class="tooltip-stock" style="display: none;">
                            <i class="ico-warning"></i>
                            <span class="txt"> Has alcanzado el límite disponible para este producto.
                                <span class="cantUndStock"></span>
                                <div class="calloutDown">
                                    <div class="calloutDown2">                                        
                                    </div>
                                </div>
                            </span>
                        </div>
                        <div class="popupaddm2 js-popupaddm2 rd gh-close-modal" style="display:none">
                        <div class="ppup">
                            <div class="gtexto">
                                <span class="text1">
                                    Sé prevenido, añade un 10%
                                </span>
                                <span class="text2">
                                    Añadir 10% para zócalos, perdidas y rupturas.
                                </span>
                            </div>
                            <div class="g-btns">
                                <a href="javascript:;" class="solo-prod js-addtocart -pu gh-enlace v2">No, gracias</a>
                                <a href="javascript:;" class="agregarpor js-agregarpor -pu gh-btn">Agregar 10%</a>
                            </div>
                        </div>
                    </div>
                    <div class="popupaddm3 js-popupaddm2 rd gh-close-modal" style="display:none">
                        <div class="ppup">
                            <div class="gtexto">
                                <span class="text1">Importante:</span>
                                <span class="text2">Este producto cuenta con variantes de color y/o diseño que será seleccionado aleatoriamente en base a su disponibilidad.</span>
                            </div>
                            <div class="g-btns">
                                <a href="javascript:;" class="solo-prod js-agregarpor -pu gh-enlace v2">Cancelar</a>
                                <a href="javascript:;" class="agregarpor js-agregarpor -pu gh-btn">Aceptar</a>
                            </div>
                        </div>
                    </div>
                    <div class="popupaddm4 js-popupaddm2 rd gh-close-modal" style="display:none">
                        <div class="ppup">
                            <div class="gtexto">
                                <span class="text1">Importante:</span>
                                <span class="text2">Recuerda que este producto es a pedido y no se aceptan cambios ni devoluciones</span>
                            </div>
                            <div class="g-btns">
                                <a href="javascript:;" class="solo-prod js-agregarpor -pu gh-enlace v2">Cancelar</a>
                                <a href="javascript:;" class="agregarpor js-agregarpor -pu gh-btn">Aceptar</a>
                            </div>
                        </div>
                    </div>
                    <div class="gh-popup-add gh-popup-add-mxn js-popup-add-mxn rd gh-close-modal" style="display:none">
                        <div class="ppup">
                            <div class="gtexto">
                                <span class="text1">APROVECHA EL 
                                    <p class="flag"></p>
                                </span>
                                <span class="text2">Te <em class="js-text-add-mxn"></em>
                                 para acceder a la promoción. <em class="js-text-mxn"></em>
                                </span>
                            </div>
                            <div class="g-btns">
                                <a href="javascript:;" class="solo-prod js-agregarpor -pu gh-enlace v2">No, gracias</a>
                                <a href="javascript:;" class="agregarpor js-agregarpor -pu gh-btn">Agregar promo</a>
                            </div>
                        </div>
                    </div>
                    <div class="tooltip_mc js-tooltip_mc">
                        <span class="cant_caja">1 Caja</span>
                            <div class="down-org">
                                <div class="down_int-org">                                    
                                </div>
                            </div>
                        </div>
                        <div class="ctrl-menosmas cantidad">
                            <button class="btn_cantidad js-menos icons-menos" type="button" aria-label="Disminuir"></button>
                            <input class="input_cant js-cantProdFicha" type="number" value="1">
                                <div class="wp_mc js-wp_mc">
                                    <input class="input_cant_mc js-cantProdFichaMC" id="txtNumMetraje" type="text" value="1">
                                    <span class="t_m2">m²</span>
                                </div>
                                <button class="btn_cantidad js-mas icons-mas" type="button" aria-label="Aumentar"></button>
                            </div>
                        </div>
                        <button class="js-addtocart gh-btn v2 v3" type="button">
                            <span class="preload-cart"></span>
                            <span class="icons-cart"></span>
                            <em>Agregar</em>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.0.7/js/sb-admin-2.min.js" type="text/javascript"></script>
<!--slich slider javascript-->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/script.js"></script>
</html>