	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3><?php echo $this->session->userdata('username');?></h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
                    <div class="message" id="message"></div>
								<form id="edit-profile" class="form-horizontal" onsubmit="return false">
									<fieldset>
										
										<div class="control-group">											
											<label class="control-label" for="nickname">Kullanıcı Adı</label>
											<div class="controls">
												<input type="text" class="span6" name="nickname" value="<?php echo $this->session->userdata('username');?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">										
											<label class="control-label" for="firstname">İsim</label>
											<div class="controls">
												<input type="text" class="span6" name="firstname" value="<?php echo $this->session->userdata('fullname');?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										
										<div class="control-group">											
											<label class="control-label" for="email">Email Adres</label>
											<div class="controls">
												<input type="text" class="span4" name="email" value="<?php echo $this->session->userdata('email'); ?>">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<br /><br />
										
										<div class="control-group">											
											<label class="control-label" for="password">Yeni Parola</label>
											<div class="controls">
												<input type="password" class="span4" name="password" placeholder="Yeni bir parola girin">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="confirm_password">Yeni Parola (Tekrar)</label>
											<div class="controls">
												<input type="password" class="span4" name="confirm_password" placeholder="Yeni parolanızı tekrar girin">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="oldpassword">Eski Parola</label>
											<div class="controls">
												<input type="password" class="span4" name="oldpassword" placeholder="Eski parolanızı girin">
                                                <p class="help-block" id="message"></p>
											</div> <!-- /controls -->
                                            <div class="controls">
                                            <span class="login-checkbox">
                          	<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
            <label class="choice" for="Field">Değişikliği onaylıyorum</label>
            </span>		
                                            </div>	
										</div> <!-- /control-group -->
                                        
										<div class="form-actions">
                          
											<button type="button" class="btn btn-primary" onclick="userUpdate();">Güncelle</button> 
                                            <a href="<?php echo base_url("sendMail") ?>" class="btn btn-primary">Mail Yolla</a> 
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
						</div>
					</div> <!-- /widget-content -->
				</div> <!-- /widget -->
		    </div> <!-- /span8 -->	
	      </div> <!-- /row -->
