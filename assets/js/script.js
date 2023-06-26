$(document).ready(function(){
  $('.features-list').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 2,
    arrows: true,
    prevArrow: '<span class="arrow arrow-left"><ion-icon name="chevron-back-outline"></ion-icon></span>',
    nextArrow: '<span class="arrow arrow-right"><ion-icon name="chevron-forward-outline"></ion-icon></span>',
    dots: true,
    autoplay: true,
    autoSpeed: 600,
    responsive: [{
      breakpoint: '1680',
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: '768',
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: '600',
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });

  // $('.about-product-list').slick({
  //   infinite: true,
  //   slidesToShow: 4,
  //   slidesToScroll: 1,
  //   arrows: false,
  //   dots: true,
  //   autoplay: true,
  //   autoSpeed: 800,
  //   responsive: [{
  //     breakpoint: '992',
  //     settings: {
  //       slidesToShow: 3,
  //       slidesToScroll: 1
  //     }
  //   }, {
  //     breakpoint: '768',
  //     settings: {
  //       slidesToShow: 2,
  //       slidesToScroll: 1
  //     }
  //   }, {
  //     breakpoint: '600',
  //     settings: {
  //       slidesToShow: 1,
  //       slidesToScroll: 1
  //     }
  //   }]
  // });

  $('.feedback-list').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    responsive: [{
      breakpoint: '4000',
      settings: 'unslick'
    },{

      breakpoint: '992',
      settings: {
        infinite: true,
        slidesToShow: 1,
        sldiesToScroll: 1,
        arrows: false,
        dots: true
      }
    }, {
      breakpoint: '600',
      settings: {
        infinite: true,
        slidesToShow: 1,
        sldiesToScroll: 1,
        centerMode: false,
        arrows: false,
        dots: true
      }
    }]

  });


  $('.connect-banner__slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    nextArrow: '<span class="tiens-connect__arrow tc__arrow-right"><ion-icon name="chevron-forward-outline"></ion-icon></span>',
    prevArrow: '<span class="tiens-connect__arrow tc__arrow-left"><ion-icon name="chevron-back-outline"></ion-icon></span>',
    dots: false,
    autoplay: true,
    autoplaySpeed: 960


  });

});