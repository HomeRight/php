$(function(){

	$('form').submit(function(){

		var typeVal = $('#type').val();
		var nameVal = $('#name').val();

		$.ajax({
			type:'GET',
			url: 'getDateTime.php',
			data:{
				name:nameVal,
				type:typeVal
			},
			success:function(data)
			{
				$('#date').html($(data).find('date').text());
				$('#myname').html($(data).find('name').text());
			},
			error:function()
			{
				alert('載入失敗12121212');
			}
		});
		return false ;
	}) ;

	$('a.tabs').click(function(){
		$.ajax({
			type:'GET',
			url:'postDateTime.php',
			error:function(){
				alert('載入網業錯誤');
			},
			success:function(data){
				alert('載入網業成功')
			}
		});
		return false ;
	}) ;


	

	


})