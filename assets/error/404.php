<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>404 - Sayfa bulunamadı</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
	    
	<link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url("assets/css/bootstrap-responsive.min.css"); ?>" rel="stylesheet" type="text/css" />
	
	<link href="<?php echo base_url("assets/css/font-awesome.css"); ?>" rel="stylesheet">
	    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	    
	<link href="<?php echo base_url("assets/css/style.css"); ?>" rel="stylesheet" type="text/css" />

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="<?php echo base_url(); ?>">
				Aradığın Sayfa Bulunamadı				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="<?php echo base_url(); ?>" class="">
							<i class="icon-chevron-left"></i>
							Ana Sayfaya geridön
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="container">
	
	<div class="row">
		
		<div class="span12">
			
			<div class="error-container">
				<h1>404</h1>
				
				<h2>Üzgünüm! Aradığın sayfayı bulamadım</h2>
				
				<div class="error-details">
					Bu hatayı alıyorsanız aradığınız sayfa silinmiş yada taşınmış olabilir yada hatalı link girmiş olabilirsiniz. Lütfen herşeyi kontrol ettikten sonra tekrar deneyin.
					
				</div> <!-- /error-details -->
				
				<div class="error-actions">
					<a href="<?php echo base_url(); ?>" class="btn btn-large btn-primary">
						<i class="icon-chevron-left"></i>
						&nbsp;
						Ana Sayfaya Dön						
					</a>
					
					
					
				</div> <!-- /error-actions -->
							
			</div> <!-- /error-container -->			
			
		</div> <!-- /span12 -->
		
	</div> <!-- /row -->
	
</div> <!-- /container -->


<script src="<?php echo base_url("assets/js/jquery-1.7.2.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>

</html>