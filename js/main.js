(function($){
  var updateWidths = function() {
    $('.get-width').each(function(i){
      var width = $(this).parent('div').width();
      $(this).text(width + 'px');
    })
  }

  $(document).ready(updateWidths);
  $(window).on('resize', updateWidths);
})(jQuery);
