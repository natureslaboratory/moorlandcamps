$(document).ready(() => {
    $('.c-carousel').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true,
      adaptiveHeight: true,
      dotsClass: "c-carousel__dots",
      autoplay: true,
      pauseOnHover: true,
      easing: "ease-in",
      speed: 600,
  })

  $('.c-feature-break__testimony-wrapper').slick({
    infinite: true,
    fade: true,
    speed: 600,
    autoplay: true,
    autoplaySpeed: 6000
})
});