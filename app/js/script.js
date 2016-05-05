'use strict';

var j = jQuery.noConflict();
var win = window;

(function($){
  j(document).on('ready', function(){
    j('.Sh-button').on('click', function(ev){
      ev.preventDefault();

      var $this = j(this),
        href = $this.attr('href'),
        method = $this.data('method');
      win.open(href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');

      j.post(_root_ + 'main/addClick', {
        method: method
      }, function(data) {
        if (data.result) {
          setTimeout(function(){
            j('#md-message').modal('show');
          }, 10000);
        }
      }, 'json').fail(function(response){
        alert('Ocurrió un error');
      });

      return false;
    });
  });
})(jQuery);
