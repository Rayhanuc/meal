;(function($){
	$(document).ready(function() {

		$("#reservenow").on('click',function(){
			$.post(mealurl.ajaxurl,{
				action: 'reservation',
				name: $("#name").val(),
				email: $("#email").val(),
				phone: $("#phone").val(),
				persons: $("#persons").val(),
				date: $("#date").val(),
				time: $("#time").val(),
				rn: $("#rn").val()

			},function(data){
				console.log(data);
				if('Duplicate'==data){
					alert('You have already placed a request for this reservation. No need to submit again');
				}else {
					$("#paynow").attr('href',data);
					$("#reservenow").hide();
					$("#paynow").show();

				}
			});
			return false;
		});
		
	});
})(jQuery);


;(function($){
	$(document).ready(function(){
		$("#send-message").on('click',function(){
			$.post(mealurl.ajaxurl,{
				action:'contact',
				cn: $('#contact').val(),
				name: $('#cname').val(),
				email: $('#cemail').val(),
				phone: $('#cphone').val(),
				message: $('#cmessage').val(),
			},function(data){
				console.log(data);
			});
			return false;
		})
	});
})(jQuery);