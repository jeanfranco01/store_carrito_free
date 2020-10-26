<!DOCTYPE html>
<html lang="en">
<head>
     <!-- font-awesone -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.0.7/css/sb-admin-2.min.css">
    <script src="https://kit.fontawesome.com/8f2b419957.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
        <div class="panel">
            <div class="row">
                <div class="col liquid">
                    <h4><i class="fas fa-drafting-compass"></i> Jeanfranco.</h4>

                    <!-- Owl-Carousel -->

                    <div class="owl-carousel owl-theme">
                        <img src="./img/undraw_authentication_fsn5.svg" alt="" class="login_img">
                        <img src="./img/undraw_personal_data_29co.svg" alt="" class="login_img">
                        <img src="./img/undraw_fingerprint_swrc.svg" alt="" class="login_img">
                    </div>

                    <!-- /Owl-Carousel -->

                    <div class="follow">
                        Sigannos <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
                <div class="col login">

                    <button type="button" class="btn btn-signup">Registrarse</button>
                    <form>
                        <div class="titles">
                            <!-- <h6>We keep everything</h6> -->
                            <h3>Estamos listo</h3>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <input type="text" placeholder="Email" class="form-input">
                            
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="fas fa-user-lock"></i>
                            </div>
                            <input type="password" placeholder="Password" class="form-input">
                            
                        </div>

                        <button type="submit" class="btn btn-login">Iniciar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
   <!--  <div class="container">
        <div class="panel">
            <div class="row">
                <div class="col liquid">
                    <h4><i class="fas fa-drafting-compass"></i>Estamos listo</h4>
                  
                    <div class="owl-carousel owl-theme">
                        
                        <img src="img/undraw_authentication_fsn5.svg" alt="">
                        <img src="img/undraw_fingerprint_swrc.svg" alt="">
                        <img src="img/undraw_personal_data_29co.svg" alt="">
                    </div>
                  
                    <div class="follow">
                        Siguenos en
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter" ></i>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                items: 1
            });
        });
    </script>
    
</body>
</html>