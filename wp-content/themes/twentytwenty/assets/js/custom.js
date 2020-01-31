$(document).ready(function () {
  $('.example').slick({
    infinite: true,
    slidesToShow: 4,
    centerPadding: '60px',
    slidesToScroll: 1,
    arrows: true,
    speed: 300,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
  });

  $(document).scroll(function () {
    var scroll = $(window).scrollTop();
	  if (scroll > 30) {
      $('.navbar').addClass('sticky-top');
      $('.navbar').addClass('bg-dark');
      $('.navbar-brand').removeClass('font-1');
      $('.navbar-brand').addClass('font-1-resize');
      $('#r-pad').removeClass('py-3');
      $('#r-pad').addClass('py-2');
      $('#head-nav').hide();
	  }

	  else{
      $('.navbar').removeClass('bg-dark');
      $('.navbar').removeClass('sticky-top');
      
      $('.navbar-brand').addClass('font-1');
      $('.navbar-brand').removeClass('font-1-resize');
      $('#r-pad').addClass('py-3');
      $('#r-pad').removeClass('py-2');
      $('#head-nav').show();
	  }
  });
});