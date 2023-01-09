jQuery(document).ready(function() {
  // Gallery SLIDER
  jQuery(".hero_slider_content").slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay:true,
    speed: 1000,
    prevArrow: $(".slide_controls .slide-prev"),
    nextArrow: $(".slide_controls .slide-next"),
  });
  jQuery(".textimonial_inner_box").slick({
    dots: false,
    arrows: true,
    autoplay:true,
    infinite:true,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 1000,
    prevArrow: $(".slide_controls_1 .slide-prev"),
    nextArrow: $(".slide_controls_1 .slide-next"),
  });
  jQuery(".partner_box").slick({
    dots: false,
    arrows: true,
    autoplay:true,
    infinite:true,
    slidesToShow: 4,
    slidesToScroll: 1,
    speed: 1000,
    prevArrow: $(".slide_controls_1 .slide-prev"),
    nextArrow: $(".slide_controls_1 .slide-next"),
  });
});