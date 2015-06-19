// @codekit-prepend "lib/Modernizr.js"
// @codekit-prepend "../../bower_components/responsive-img.js/responsive-img.js"
// @codekit-prepend "../../bower_components/rocket/src/js/kit.js"

ready(function () {
  k('.button-toggle').click(function() {
    k(this).parents('.panel').toggleClass('panel-close');
    k(this).find('span').toggleClass('abc-angle-up').toggleClass('abc-angle-down');
  });

  // video list
  k('.video-list .toggle').click(function() {
    k(this).parents('li').toggleClass('show');
  });

  // button popup
  k('.button-popup > .button').click(function() {
    k(this).siblings('.popup-content').toggleClass('show');
  });
  k('.button-popup .cancel').click(function() {
    k(this).parents('.popup-content').removeClass('show');
  });
});