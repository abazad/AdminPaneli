	      <div class="row">
	      	
	      	<div class="span12">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-th-large"></i>
						<h3>Tüm Yöneticiler </h3>
                        <div class="control-group" style="margin:6px;float:right">											
                                            <div class="controls">
                                              <div class="btn-group">
                                              <a class="btn btn-primary">
                                              	<i class="icon-user icon-white"></i> Yönetici
                                               </a>
                                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                              	<span class="caret"></span>
                                              </a>
                                              <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url("management/newUser"); ?>"><i class="icon-plus-sign"></i> Ekle</a></li>
                                              </ul>
                                            </div>
                                              </div>	<!-- /controls -->			
										</div> <!-- /control-group -->
                        
					</div><!-- /widget-header -->
					
					<div class="widget-content">
						<div class="pricing-plans plans-3">
						<?php foreach($users as $user){?>
						<div class="plan-container">
					        <div class="plan green">
						        <div class="plan-header">
					                
						        	<div class="plan-title">
						        		<?php echo $user->fullname; ?>        		
					        		</div> <!-- /plan-title -->
					                
						            <div class="plan-price">
                                        <img src="<?php echo base_url("assets/img/users.png")?>" >
                                        <span class="term"><?php echo $user->username; ?>  </span>
									</div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	        
						        
						        <div class="plan-features">
									<ul>
										<li>Kullanıcıya ilgili detaylar</li>
										<li>Email: <?php echo $user->email; ?>  </li>
										<li>Kayıt Tarihi: <?php echo $user->date; ?>  </li>
									</ul>
								</div> <!-- /plan-features -->
							<div class="plan-actions">
                            	
                   <a href="#<?php echo $user->username; ?>" role="button" class="btn btn-danger" data-toggle="modal">Kullanıcıyı Sil</a>
                            </div>
                            <div id="<?php echo $user->username; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                       <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                             <h3 id="myModalLabel">Kullanıcı Sil</h3>
                                                      </div>
                                                      <div class="modal-body">
                                                      <div class="message" id="message"></div>
                                                        <p> <?php echo $user->fullname; ?> adlı kullanıcıyı gerçekten silmek istiyor musun?</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button class="btn" data-dismiss="modal" aria-hidden="true">Kapat</button>
                                                        <button class="btn btn-primary" onclick="userDelete(<?php echo $user->id; ?>);">Onayla</button>
                                                      </div>
                                        </div>
                          </div>
                           <!-- /plan -->
					    </div> <?php } ?>
					</div> <!-- /plan-container -->
				</div><!-- /pricing-plans -->	
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->							
	</div> <!-- /span12 -->     	
</div> <!-- /row -->