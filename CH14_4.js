$(function(){

	$('form').submit(function(){

		$.ajax({

			type:'POST',
			url:'saveContact.php',
			data:$('#contactform').serialize(),
			success:function(data)
			{
				var value = parseInt(data);
				if(value==1)
					$('#msg').html("成功新增");
				else
					$('#msg').html("新增失敗");
			}
		});
		return false ;
	});

	$('a.getemail').click(function(){

		$.ajax({
			type:'POST',
			url:'getEmailAddress.php',
			data:$('#contactform').serialize(),
			success:function(data)
			{
				$('#msg').html("載入網頁成功");
				$('#email').val(data);
			}
		});
		return false ;
	})
})