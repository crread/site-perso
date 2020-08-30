$(document).ready(function () {

    $('.fullpage').onepage_scroll({
        sectionContainer: "section",
        easing: "ease", 
        animationTime: 1000,
        pagination: true,
        keyboard: true,
        direction: "vertical",
    });

    $('.myCarousel').slick({
        slidesToShow: 3,
        dots: true,
        infinite: true,
        autoplay: true,
        autoPlaySpeed: 1250,
        speed: 750,
        focusOnSelect: true,
        centerMode: true,
    });
});
