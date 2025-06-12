jQuery(function($) {

/* Scroll link */
$(document).ready(function () {
   $('a[href^="#"]').on('click', function (e) {
       e.preventDefault();
       var target = this.hash,
           $target = $(target);
       $('html, body').stop().animate({
           'scrollTop': $target.offset().top
       }, 1200, 'swing');
   });
});
/* Mainmenu JavaScript */
(function ($) {
    $(".trigger-menu").on("click", function () {
        $(this).toggleClass("active");
        $("html").toggleClass("block");
        $(".gnav").toggleClass("opened");
        return false;
    });
})(jQuery);
$("#login-trigger").hover(function () {

    var isHovered = $(this).is(":hover");
    $(this).addClass('active')
    if (isHovered) {
        $(this).children("#login-btn").stop().slideDown(300);
    } else {
        $(this).children("#login-btn").stop().slideUp(300);
        $(this).removeClass('active');
    }

});

$(".gnav .dropdown").hover(function () {
    if ($(window).width() > 768) {
        var isHovered = $(this).is(":hover");
        $(this).addClass('active')
        if (isHovered) {
            $(this).children(".submenu").stop().slideDown(300);
        } else {
            $(this).children(".submenu").stop().slideUp(300);
            $(this).removeClass('active');
        }
    }
});

/* SCROLL TO TOP FADE EFFECT */
$(function () {
    var btn = $(".page-up");
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            btn.fadeIn();
        } else {
            btn.fadeOut();
        }
    });

});
$(function() {
    $('.faq-list__question').click(function(j) {
      
      var dropDown = $(this).closest('.faq-list__item').find('.faq-list__ans');
      $(this).closest('.faq-list').find('.faq-list__ans').not(dropDown).slideUp();
      
      if ($(this).hasClass('active')) {
        $(this).removeClass('active');
      } else {
        $(this).closest('.faq-list').find('.faq-list__question.active').removeClass('active');
        $(this).addClass('active');
      }
      
      dropDown.stop(false, true).slideToggle();
      j.preventDefault();
    });
  });

  $(".trigger").click(function(){
    $(this).toggleClass('active').next('.faq-anchorlinks').stop().slideToggle('400');
    return false;
});

});

jQuery(document).ready(function ($) {
    // Mặc định hiển thị slide đầu tiên
    $('.slider-wrap .slider-wrap__item').first().addClass('active');
    $('.slider-wrap .splide__slide').first().addClass('active').show();

    // Xử lý khi click vào các item
    $('.slider-wrap .slider-wrap__item').on('click', function () {
        // Xóa class active khỏi tất cả các items và slides
        $('.slider-wrap .slider-wrap__item').removeClass('active');
        $('.slider-wrap .splide__slide').removeClass('active').hide();

        // Lấy chỉ số của item được click
        const index = $(this).index();

        // Thêm class active vào item được chọn
        $(this).addClass('active');

        // Hiển thị nội dung .splide__slide tương ứng
        $('.slider-wrap .splide__slide').eq(index).addClass('active').fadeIn();
    });
});


