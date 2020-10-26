$('.slider-one')
.not(".slick-intialized")
.slick({
   autoplay:true,
   autoplaySpeed:3000,
   dots:true,
   slidesToShow: 4,
   slidesToScroll: 1,
   prevArrow:".site-slider .slider-btn .prev",
   nextArrow:".site-slider .slider-btn .next" ,
   responsive: [{

      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        infinite: true
      }

    }, {

      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        dots: true
      }

    }, {

      breakpoint: 300,
      settings: "unslick" // destroys slick

    }] 
  });