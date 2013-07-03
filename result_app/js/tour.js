
$(function(){
	$('.tour').append('<a href="#" class="btn primary btn-info" data-toggle="chardinjs">Take a tour</a>');
	$('thead').attr({ "data-intro": "Columns are Sortable", "data-position": "bottom"});
	$('#myTable_info').attr({ "data-intro": "Calculate Rank from here manually", "data-position": "bottom"});
	$('.sidebar-nav').attr({"data-intro": "Choose between Charts and Tables", "data-position": "bottom"});
});

(function() {
  $(function() {
    $('body').chardinJs();
    $('a[data-toggle="chardinjs"]').on('click', function(e) {
      e.preventDefault();
      $('thead, #myTable_info').css({ color: "#0088cc"});
      $(this).hide();
      return ($('body').data('chardinJs')).toggle();
    });
    return $('body').on('chardinJs:stop', function() {    	
      $('a[data-toggle="chardinjs"]').fadeIn(1000);
      $('thead, #myTable_info').css({color: "#333333"});
    });
  });

}).call(this);
