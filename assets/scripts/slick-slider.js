$('.main-slider').slick({
     dots: false,
     infinite: true,
     speed: 300,
     slidesToShow: 9,
     slidesToScroll: 1,
     prevArrow: $('.prev'),
     nextArrow: $('.next'),
     arrow: true,
     responsive: [
     {
          breakpoint: 1280,
          settings: {
               slidesToShow: 6,
               slidesToScroll: 3,
               infinite: true,
          }
     },
       {
         breakpoint: 1024,
         settings: {
           slidesToShow: 5,
           slidesToScroll: 3,
           infinite: true,
         }
       },
       {
         breakpoint: 600,
         settings: {
           slidesToShow: 4,
           slidesToScroll: 2
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 2,
           slidesToScroll: 1
         }
       }
     ]
   });





//    full section 
$('.full-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 6,
  centerMode: true,
  slidesToScroll: 1,

  prevArrow: $('.slider-btn .prev'),
  nextArrow: $('.slider-btn .next'),
  arrow: true,
  responsive: [
    {
      breakpoint: 2500,
      settings: {
           slidesToShow: 5,
           slidesToScroll: 3,
           infinite: true,
      }
 },
  {
       breakpoint: 2000,
       settings: {
            slidesToShow: 4,
            slidesToScroll: 3,
            infinite: true,
       }
  },
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 800,
      settings: {
        centerMode: false,
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        centerMode: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});



// car-type slider 

$('.car-type-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 10,
  centerMode: false,
  slidesToScroll: 1,

  prevArrow: $('.slider-btn .prev'),
  nextArrow: $('.slider-btn .next'),
  arrow: true,
  responsive: [
  
  
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 8,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 800,
      settings: {
        centerMode: false,
        slidesToShow: 4,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        centerMode: false,
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }
  ]
});








  