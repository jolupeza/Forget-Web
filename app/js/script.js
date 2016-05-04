'use strict';

var j = jQuery.noConflict();
var win = window;

(function($){
  j(document).on('ready', function(){
    j('#share-fb').on('click', function(ev){
      ev.preventDefault();

      var $this = j(this),
        href = $this.attr('href');
      win.open(href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');

      setTimeout(function(){
        j('#md-message').modal('show');
      }, 10000);

      return false;
    });

    j('#share-tw').on('click', function(ev){
      ev.preventDefault();

      var $this = j(this),
        href = $this.attr('href');
      win.open(href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');

      setTimeout(function(){
        j('#md-message').modal('show');
      }, 10000);

      return false;
    });
  });
})(jQuery);
