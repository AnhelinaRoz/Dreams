//Слайдер slider

$(document).ready(function () {
    $('.your-slider').slick({
        infinite: true,
        speed: 1000,
        arrows: true,
        // pauseOnHover: false,
        // pauseOnFocus: false,
        slidesToScroll: 1,
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 20000,
        // draggable: false,
        // swipe: false,
        responsive: [
            {
                breakpoint: 1227,
                settings: {
                    slidesToShow: 2,
                    dots: true
                }
            },
            {
                breakpoint: 794,
                settings: {
                    slidesToShow: 1,
                    dots: true
                }
            },

           ]
    });
});