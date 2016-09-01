    	<div class="row">
    	<div class="span12">
		  </div> <!-- /span12 -->
         </div>	
    
	      <div class="row">
	      	
	      	<div class="span12">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-pushpin"></i>
						<h3>Sıkça sorulan sorular</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<h3>Sorularda Ara</h3>
						
						<br />
						
						<ol class="faq-list">
                        <?php foreach($query as $sorgu){ ?>
							<li>
                            	<h4><?php echo $sorgu->title; ?></h4>
								<p><?php echo $sorgu->description; ?></p>	
							</li>
                         <?php } ?>
						</ol>
					</div> <!-- /widget-content -->
				</div> <!-- /widget -->	
		    </div> <!-- /spa12 -->
	      </div> <!-- /row -->
	