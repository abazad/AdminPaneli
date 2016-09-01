var url="http://127.0.0.1/adminpaneli/";
function message(description,type,id)
{
	$('body, html').animate({
			scrollTop:$('#'+id).offset().top
        }, 600);
	var html="";
	if(type=="warning")
	{
html=
"<div class='alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Uyarı! </strong>"+description+"</div>";
	}
	if(type=="success")
	{
html=
"<div class='alert  alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Uyarı! </strong>"+description+"</div>";
	}
	if(type=="info")
	{
html=
"<div class='alert  alert-info'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Uyarı! </strong>"+description+"</div>";
	}
	if(type=="danger")
	{
html=
"<div class='alert  alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Uyarı! </strong>"+ description+"</div>";
	}
	return html;
}