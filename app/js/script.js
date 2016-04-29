'use strict';

var j = jQuery.noConflict();

(function($){
  j(document).on('ready', function(){
    j('#go-form').on('click', function(){
      window.location = 'form.html';
    });

    j('#go-about').on('click', function(){
      window.location = 'about.html';
    });
  });
})(jQuery);
