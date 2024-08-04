$(document).ready(function(){
    // $('#worker').on('load', function () {
    //     $('#loading').addClass('hide-spinner');
    //     $('.info-img').addClass('info-img-anime')
    //     $('.info-title').addClass('info-title-anime')
    //     $('.info-company').addClass('info-company-anime')
    //     $('.info-team').addClass('info-text-anime')
    // }) 
    // $(window).on('load', function () {
        // $('#loading').addClass('hide-spinner');
        $('.info-img').addClass('info-img-anime')
        $('.info-title').addClass('info-title-anime')
        $('.info-company').addClass('info-company-anime')
        $('.info-team').addClass('info-text-anime')
    // }) 
    $('#hamburger-icon-button').click(
        () => {
            $('.hambuger-nav-cont').toggleClass('hambuger-nav-cont-open')
            $('.bg').toggleClass('bg-show')
        }
    )
    $('#bg').click(
        () => {
            $('.hambuger-nav-cont').toggleClass('hambuger-nav-cont-open')
            $('.bg').toggleClass('bg-show')
        }
    )
    $('#call').click(
        () => {
            window.open('tel:+998998870955')
        }
    )
    $(".owl-carousel").owlCarousel({
        margin: 43,
        nav: true,
        navText: [
            `<div class="arrow-item"><img class="arrow" src="./assets/icons/arrowRight.svg" alt="arrowleft"></div>`,
            `<div class="arrow-item"><img class="arrow" src="./assets/icons/arrowLeft.svg" alt="arrowleft"></div>`,
        ],
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        loop: true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:1,
                nav:true
            },
            1000:{
                items:3,
                nav:true,
                // loop:false
            }
        }
    });
    // $('.arrow-item').click(function() {
    //     owl.trigger('next.owl.carousel');
    // })
    // // Go to the previous item
    // $('.arrow-item').click(function() {
    //     // With optional speed parameter
    //     // Parameters has to be in square bracket '[]'
    //     owl.trigger('prev.owl.carousel', [300]);
    // })
});
var map = L.map('map').setView([41.332709, 69.318731], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([41.332709, 69.318731]).addTo(map)
    .bindPopup('My Sofa')
    .openPopup();