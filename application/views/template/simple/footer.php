		<div class="text-center copyrights">
			Copyright &copy; 2018 E-Profile Enterprise - All rights reserved. Power by <a href="http://esoftplay.com/">esoftplay.com</a>
		</div>
		<!-- jQuery -->
		<!-- Bootstrap JavaScript -->
		<script src="/templates/simple/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="/templates/simple/js/jquery.countdown.min.js" type="text/javascript"></script>
		<script src="/templates/simple/js/script.js" type="text/javascript"></script>
	</body>
</html>




<script type="text/javascript">

(function () {
  validation = {
    init: function () {
    	$("input[req=email]").css({
        "border-color": "#ccc"
      });
      if (validation.email($(".email").val()) == true) {
        return true
      }
    },
    email: function (e) {
      var a = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
      if (!a.test(e)) {
        $("input[req=email]").select().css({
          "border-color": "#f00"
        });
        return false
      } else {
        return true
      }
    }
  }
})();

$(document).ready(function($){
	$('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });

	$(".congrats_btn").click(function(){
		if ($(this).hasClass("btn-primary")) 
		{
			$(this).removeClass("btn-primary").addClass("btn-danger");
			$(".placeholder").remove();
			var a = '<div class="r_congrats" data-id="'+ $(this).data("id") +'">'+ $(this).html() +'</div>';
			$(".congrats_data").append(a);
		}else{
			$(this).removeClass("btn-danger").addClass("btn-primary");
			$('.r_congrats[data-id="'+$(this).data("id")+'"]').remove();
		}

	});

	$(".congrats_send").click(function(){
		var a = $(".name").val();
		var b = $(".email").val();
		if (a != '' && b != '') 
		{
			if (validation.init() == true) 
			{
				if ($(".r_congrats").length > 0) 
				{
					var datas = [];
					$(".congrats_data").find(".r_congrats").each(function(){
						datas.push($(this).data("id"));
					});

					$.ajax({
						url : "congrats_ajax/save",
						type: "post",
						data: {
							"name": $(".name").val(),
							"email": $(".email").val(),
							"congrats_data": datas
						},
						dataType: "json",
						success:function(result){
							if (result.status == 'ok') {
								window.location.href = result.url
							}else{
								alert(result.msg);
							}
						}
					});
				}else{
					alert('Silahkan pilih salah satu ucapan yang tersedia!!');	
				}
			}else{
				alert('Email anda tidak valid mohon periksa kembali!!');
			}
		}else{
			alert('Silahkan isi nama dan email dengan benar!!');
		}
	});
});
</script>
