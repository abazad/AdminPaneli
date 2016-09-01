/*USER OPERATIONS BEGIN*/
function newUser()
{
	var regex = /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;
	var name=$("input[name=firstname]").val().trim();
	var lastname=$("input[name=lastname]").val().trim();
	var email=$("input[name=email]").val().trim();
	var nick=$("input[name=nickname]").val().trim();
	var password=$("input[name=password]").val().trim();
	var confirm_password=$("input[name=confirm_password]").val().trim();
	var Field=document.getElementById('Field').checked;
	if(name=="" || lastname=="" || email=="" || nick=="" || password=="" || confirm_password=="")
	{
		$(".message").fadeIn('slow');
		$(".message").html(message('Boş alan bırakılamaz','info','message'));
		setTimeout(function(){$(".message").fadeOut()}, 3000)
	}
	else if(!regex.test(email))
	{
		$(".message").fadeIn('slow');
		$(".message").html(message('Geçersiz mail adresi girdiniz','warning','message'));
		setTimeout(function(){$(".message").fadeOut()}, 3000)
	}
	else if(password!=confirm_password)
	{
		$(".message").fadeIn('slow');
		$(".message").html(message('Girdiğiniz parolalar uyuşmuyor','danger','message'));
		setTimeout(function(){$(".message").fadeOut()}, 3000)
	}
	else if(!Field)
	{
		$(".message").fadeIn('slow');
		$(".message").html(message('Üyeliği onaylamadan kaydı tamamlayamazsınız','warning','message'));
		setTimeout(function(){$(".message").fadeOut()}, 3000)
	}
	else
	{
		$.ajax({
			type:'POST',
			data:{fullname:name+" "+lastname,email:email,nick:nick,password:password},
			url:url+"UserSettingsController/addUser",
			success: function(result)
			{
				if(result==1)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Kullanıcı ekleme başarılı','success','message'));
					setTimeout(function(){window.location="../management"}, 3000)
				}
				else if(result==3)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Bu Nick yada Email zaten var!','warning','message'));
					setTimeout(function(){$(".message").fadeOut()}, 3000)
				}
				else
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Kullanıcı eklenemedi!','danger','message'));
					setTimeout(function(){window.location="../management"}, 3000)
				}
			}
		})
	}
}
function userDelete(id)
{
	
	if($.isNumeric(id))
	{
		$.ajax({
			type:'POST',
			data:{id:id},
			url:url+"UserSettingsController/deleteUser",
			success: function(result)
			{
				if(result==1)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Kullanıcı silindi','success','message'));
					setTimeout(function(){window.location="management"}, 3000)
				}
				else if(result==2)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Bu kullanıcı silinemez','warning','message'));
					setTimeout(function(){window.location="management"}, 3000)
				}
				else if(result==3)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Kullanıcı silerken bir hata oluştu!','danger','message'));
					setTimeout(function(){window.location="management"}, 3000)
				}
			}
		});
	}
}
function userUpdate()
{
	var regex = /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;
	var fullname=$("input[name=firstname]").val().trim();
	var email=$("input[name=email]").val().trim();
	var nick=$("input[name=nickname]").val().trim();
	var password=$("input[name=password]").val().trim();
	var oldpassword=$("input[name=oldpassword]");
	var confirm_password=$("input[name=confirm_password]").val().trim();
	var Field=document.getElementById('Field').checked;
	if(fullname=="" || email=="" || nick=="")
	{
		$(".message").fadeIn('slow');
		$(".message").html(message('Boş alan bırakılamaz','info','message'));
		setTimeout(function(){$(".message").fadeOut()}, 3000)
	}
	else if(!regex.test(email))
	{
		$(".message").fadeIn('slow');
		$(".message").html(message('Geçersiz mail adresi girdiniz','warning','message'));
		setTimeout(function(){$(".message").fadeOut()}, 3000)
	}
	else if(oldpassword.val().trim()=="")
	{
		$(".help-block").fadeIn('slow');
		$(".help-block").html(message('Güvenliğiniz için şimdiki parolanızı girmeniz gerekmektedir','danger','message'));
		oldpassword.keydown(function(e) {
            $(".help-block").fadeOut();
        });
	}
	else if(password!=confirm_password)
	{
		$(".message").fadeIn('slow');
		$(".message").html(message('Girdiğiniz parolalar uyuşmuyor','danger','message'));
		setTimeout(function(){$(".message").fadeOut()}, 3000)
	}
	else if(!Field)
	{
		$(".message").fadeIn('slow');
		$(".message").html(message('Değişikliği onaylamadan devam edemezsiniz','warning','message'));
		setTimeout(function(){$(".message").fadeOut()}, 3000)
	}
	else
	{
		
		var data = {fullname:fullname,email:email,nick:nick,password:password,oldpassword:oldpassword.val()};
		$.ajax({
			type:'POST',
			data:data,
			url:url+"UserSettingsController/updateUser",
			success: function(result)
			{
				if(result==1)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Ayarlar başarılı bir şekilde güncellendi','success','message'));
					setTimeout(function(){$(".message").fadeOut('slow')}, 3000)
				}
				else if(result==2)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Güncelleme sırasında bir hata oluştu','danger','message'));
					setTimeout(function(){$(".message").fadeOut('slow')}, 3000)
				}
				else if(result==3)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Mevcut parolanızı hatalı girdiniz!','warning','message'));
					setTimeout(function(){$(".message").fadeOut('slow')}, 3000)
				}
				else if(result==4)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Bu nick ve Email önceden kullanılmış','warning','message'));
					setTimeout(function(){$(".message").fadeOut('slow')}, 3000)
				}
			}
		});
	}
}
/*USER OPERATIONS END*/

/*SITE SETTING OPERATIONS BEGIN*/
function settingSave()
{
	var titles=$("input[name=title]").val().trim();
	var descriptions=$("input[name=description]").val().trim();
	var keywords=$("input[name=keywords]").val().trim();
	var location=$("input[name=location]").val().trim();
	var btn1 = document.getElementById('btn1');   
	var btn2 = document.getElementById('btn2');
	var check;
	if(btn1.checked)
	{
		check=1;
	}
	if(btn2.checked)
	{
		check=0;
	}
	if(title="" || descriptions=="" || keywords=="" || location=="")
	{
		$(".message").fadeIn('slow');
		$(".message").html(message('Boş alan bırakılamaz','info','message'));
		setTimeout(function(){$(".message").fadeOut()}, 3000)
	}else{
		
		$.ajax({
			type:'POST',
			data:{titles:titles,descriptions:descriptions,keywords:keywords,location:location,check:check},
			url:url+"SiteSettingController/settingSave",
			success: function(result)
			{
				if(result==1)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Ayarlar kaydedildi','success','message'));
					setTimeout(function(){$(".message").fadeOut('slow');}, 3000)
				}
				else if(result==2)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Ayarlar kaydedilirken hata oluştu!','danger','message'));
					setTimeout(function(){$(".message").fadeOut('slow');}, 3000)
				}
			}
		});
	}
}
/*SITE SETTING OPERATIONS END*/

/*SOCIALBUTTON OPERATIONS BEGIN*/
function socialAdd()
{
	var regURL = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
	var socialTitle=$("input[name=socialTitle]").val().trim();
	var URL=$("input[name=URL]").val().trim();
	var total=$("input[name=total]").val().trim();
	var icon="";
	for(var i=1;i<=total;i++)
	{
		var radio=document.getElementById('radio'+i);
		if(radio.checked)
		{
			icon=radio.value;
		}
	}
	if(socialTitle=="" ||URL=="")
	{
		$(".message").fadeIn('slow');
		$(".message").animate({
            scrollTop: 0
        }, 600);
		$(".message").html(message('Boş alan gönderilemez','info','message'));

		setTimeout(function(){$(".message").fadeOut('slow');}, 3000)
	}
	else if(!regURL.test(URL))
	{
		$(".message").fadeIn('slow');
		$(".message").html(message('Hatalı url yapısı','warning','message'));
		setTimeout(function(){$(".message").fadeOut('slow');}, 3000)
	}
	else if(icon.trim()=="")
	{
		$(".message").fadeIn('slow');
		$(".message").html(message('Icon seçmediniz!','danger','message'));
		setTimeout(function(){$(".message").fadeOut('slow');}, 3000)
	}
	else
	{
		$.ajax({
			type:'POST',
			data:{socialTitle:socialTitle,URL:URL,icon:icon},
			url:url+"OtherController/socialadd",
			success: function(result)
			{
				if(result==1)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('icon Başarılı bir şekilde eklendi','success','message'));
					setTimeout(function(){window.location="socialmedia"}, 3000)
				}
				else if(result==2)
				{
					$(".message").fadeIn('slow');
					$(".message").html(message('Ekleme işleminde hata oluştu!','danger','message'));
					setTimeout(function(){$(".message").fadeOut('slow');}, 3000)
				}
			}
		});
	}
}
function socialDelete(id)
{
	if($.isNumeric(id))
	{
		$.ajax({
			type:'POST',
			data:{id:id},
			url:url+"OtherController/socialDelete",
			success: function(result)
			{
				if(result==1)
				{
					$(".message_m").fadeIn('slow');
					$(".message_m").html(message('Sosyal bağlantı silindi','success','message2'));
					setTimeout(function(){window.location="socialmedia"}, 3000)
				}
				else if(result==2)
				{
					$(".message_m").fadeIn('slow');
					$(".message_m").html(message('Bağlantı silinemedi!','warning','message2'));
					setTimeout(function(){window.location="socialmedia"}, 3000)
				}
			}
		});
	}
}
/*SOCIALBUTTON OPERATIONS END*/