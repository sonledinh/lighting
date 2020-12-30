 
$('.slide-banner').slick({
    autoplay: false,
    arrow: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1, 
    prevArrow: '',
    nextArrow: '',
});  

$('.slide-feedback').slick({
    autoplay: false,
    arrow: false,
    dots: false, 
    slidesToShow: 4,
    slidesToScroll: 2, 
    prevArrow: '',
    nextArrow: '',
    responsive: [
        {
            breakpoint: 767, 
            settings: {
                slidesToShow: 2,
            } 
        }, 
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
}); 

$('.slide-part').slick({
    autoplay: false,
    arrow: false,
    dots: false, 
    slidesToShow: 7,
    slidesToScroll: 3, 
    prevArrow: '',
    nextArrow: '',
    responsive: [
        {
            breakpoint: 767, 
            settings: {
                slidesToShow: 2,
            } 
        }, 
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
}); 

$('.slide-feat').slick({
    autoplay: true,
    arrow: false,
    dots: false, 
    slidesToShow: 1,
    prevArrow: '',
    nextArrow: '',
}); 

$('.new-small').slick({
    cssEase: 'linear',
    autoplay: true,
    arrow: false,
    dots: false, 
    slidesToShow: 3.5,
    // slidesToScroll: 1, 
    vertical: true,
    autoplaySpeed:0,
    speed: 12000,
    infinite: true,
    prevArrow: '',
    nextArrow: '',
    responsive: [
        {
            breakpoint: 767, 
            settings: {
                slidesToShow: 2,
            } 
        }, 
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
}); 

$( ".btn-list-cate a" ).click(function() {
    $('.list-cate-prd').toggleClass('active');
});

// jQuery(document).ready(function( $ ) {
//   $("#menu").mmenu({
//      "extensions": [
//         "fx-menu-zoom"
//      ],
//      "counters": true
//   });
// }); 