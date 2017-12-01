(function( $ ){
	$('#counter').countdown($('#counter').data('dates')).on('update.countdown', function(event) {
	  var $this = $(this).html(event.strftime(''
	    + '<span class="counter_block"><span>%D</span> Hari</span> '
	    + '<span class="counter_block"><span>%H</span> Jam</span> '
	    + '<span class="counter_block"><span>%M</span> Menit</span> '
	    + '<span class="counter_block"><span>%S</span> Detik</span>'));
	});
})( jQuery );