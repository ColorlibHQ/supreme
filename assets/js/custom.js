/**
 * Supreme front-end behaviour, without jQuery.
 *
 * The plugin calls keep the options they always had; ColorlibUI provides
 * drop-in versions of Slick, Magnific Popup and AjaxChimp that build the same
 * markup, so the theme's stylesheets apply unchanged.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  // The old script also started Owl Carousel on .player_info_item, but the
  // theme never loaded Owl Carousel's script and no template prints that
  // element, so the call never ran; it is left out.

  UI.ready(function () {
    if (document.getElementById('default-select')) {
      UI.enhanceSelects('select');
    }
  });

  UI.magnific('.popup-youtube, .popup-vimeo', {
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  // menu fixed js code
  window.addEventListener('scroll', function () {
    var fixed = window.pageYOffset + 1 > 50;
    UI.toElements('.main_menu_iner').forEach(function (menu) {
      ['menu_fixed', 'animated', 'fadeInDown'].forEach(function (name) {
        menu.classList.toggle(name, fixed);
      });
    });
  }, { passive: true });

  // Main slider with a thumbnail strip; the thumbnail for the current slide
  // carries slick-active, and the .content block for it is the one shown.
  UI.ready(function () {
    function thumbs() {
      return UI.toElements('.slider-nav-thumbnails .slick-slide');
    }
    function show(el) {
      el.style.display = '';
      if (window.getComputedStyle(el).display === 'none') el.style.display = 'block';
    }

    UI.toElements('.slider').forEach(function (slider) {
      // On before slide change match active thumbnail to current slide
      slider.addEventListener('beforeChange', function (e) {
        thumbs().forEach(function (thumb, i) {
          thumb.classList.toggle('slick-active', i === e.detail.nextSlide);
        });
      });
      slider.addEventListener('afterChange', function (e) {
        UI.toElements('.content[data-id]').forEach(function (content) {
          content.style.display = 'none';
        });
        UI.toElements('.content[data-id="' + (e.detail.currentSlide + 1) + '"]').forEach(show);
      });
    });

    UI.slick('.slider', {
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      speed: 300,
      infinite: true,
      asNavFor: '.slider-nav-thumbnails',
      autoplay: true,
      pauseOnFocus: true,
      dots: true
    });

    UI.slick('.slider-nav-thumbnails', {
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider',
      focusOnSelect: true,
      infinite: true,
      prevArrow: false,
      nextArrow: false,
      centerMode: true,
      responsive: [{
        breakpoint: 480,
        settings: { centerMode: false }
      }]
    });

    // Only the first thumbnail slide starts active.
    thumbs().forEach(function (thumb, i) {
      thumb.classList.toggle('slick-active', i === 0);
    });
  });

  // FAQ accordion: a header opens its item and closes the others; clicking
  // the open item's header closes it.
  UI.ready(function () {
    var accordionItem = UI.toElements('.accordion-item');
    accordionItem.forEach(function (item) {
      var header = item.querySelector('.accordion-header');
      if (!header) return;
      header.addEventListener('click', function (e) {
        var parent = e.currentTarget.parentNode;
        if (parent.classList.contains('active')) {
          parent.classList.remove('active');
        } else {
          accordionItem.forEach(function (other) {
            other.classList.remove('active');
          });
          parent.classList.add('active');
        }
      }, false);
    });
  });

  //------- Mailchimp js --------//
  UI.ajaxChimp('#mc_embed_signup form');
}());
