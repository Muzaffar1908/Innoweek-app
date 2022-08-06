   $('.cource-slider').owlCarousel({
       loop: true,
       margin: 10,
       autoplayHoverPause: true,
       nav: false,
       navText: [
           "<i class='icofont-long-arrow-left'></i>",
           "<i class='icofont-long-arrow-right'></i>"
       ],
       dots: false,
       autoplay: true,
       responsive: {
           0: {
               items: 3
           },
           600: {
               items: 4
           },
           1000: {
               items: 6
           }
       }
   });