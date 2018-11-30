// Select country Ajax call
$(document).ready(function(){
	$.ajax({
		url:"controller.php",
		method:"get",
		data:{country:1},
		success:function(response){
			$('#country').html(response);
		}
	});
});

// Select State Ajax call
$(document).ready(function(){
	$('#state').hide();
	$(document).on('change','#country', function(){
			var code = $('#country').val();
			if(code==0){
				$('#state').hide();
			}
			else{
				$.ajax({
					url:'controller.php',
					method: 'POST',
					data:{state:1,code:code},
					success:function(response){
						$('#state').show();
						$('#state').html(response);
					}
			}); 
			}
	});
});