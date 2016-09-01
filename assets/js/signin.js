function loginForm()
{
	var username=$("input[name=username]").val().trim();
	var password=$("input[name=password]").val().trim();
	if(username=="" ||password=="")
	{
		$(".message").fadeIn('slow');
		$(".message").html(message('Boş alan bırakılamaz','info','message'));
		setTimeout(function(){$(".message").fadeOut()}, 3000)
	}
	else
	{
		$.ajax({
			type:'POST',
			data:{username:username,password:password},
			url:url+"LoginController/logIn",
			success: function(result)
			{
				if(result==1)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Giriş Başarılı, Lütfen Bekleyin','success','message'));
					setTimeout(function(){window.location="sitesetting"}, 3000)
				}
				else if(result==2)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Böyle bir yönetici bulunamadı','info','message'));
					setTimeout(function(){$(".message").fadeOut('slow')}, 3000)
				}
			}
		});
	}
}