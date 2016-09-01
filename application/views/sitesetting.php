<div class="row">
   	<div class="span12">
   		<div class="widget ">
   			<div class="widget-header">
   				<i class="icon-cogs"></i>
	      				<h3>Site Ayarları</h3>
  				</div> <!-- /widget-header -->
				<div class="widget-content">
                <div class="message" id="message"></div>
					<div class="tab-pane" id="formcontrols">
                    <?php foreach($settings as $setting){ ?>
						<form id="" class="form-horizontal" onsubmit="return false">
						  <fieldset>
							<div class="control-group">											
								<label class="control-label" for="title">Site Başlığı</label>
									<div class="controls">
										<input type="text" class="span6" name="title" value="<?php echo $setting->title; ?>">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
							  <label class="control-label" for="description">Açıklama</label>
									<div class="controls">
										<input type="text" class="span6" name="description" value="<?php echo $setting->description; ?>">
									</div> <!-- /controls -->				
							</div> <!-- /control-group -->
                            <div class="control-group">											
							  <label class="control-label" for="keywords">Anahtar Kelimeler</label>
									<div class="controls">
										<input type="text" class="span6" name="keywords" value="<?php echo $setting->keywords; ?>">
										<p class="help-block">Önemli! Anahtar kelimeleri virgül ile ayırın</p>
                                    </div> <!-- /controls -->				
							</div> <!-- /control-group --><!-- /control-group -->
                            <div class="control-group">											
							  <label class="control-label" for="keywords">Harita Koordinat</label>
									<div class="controls">
										<input type="text" class="span6" name="location" value="<?php echo $setting->maplocation; ?>">
										<p class="help-block">Google harita koordinat bilgisi</p>
                                    </div> <!-- /controls -->				
							</div> <!-- /control-group --><!-- /control-group -->           
                                        
                                        
                                      <div class="control-group">											
											<label class="control-label">Site Durumu</label>
											
                                            <?php
                                            if($setting->status==1)
											{
												$open="checked='checked'";
											}
											if($setting->status==0)
											{
												$close="checked='checked'";
											}
											?>
                                            <div class="controls">
                                            <label class="radio inline">
                                              <input type="radio" value="1" id="btn1"  name="radiobtns" <?php echo @$open?>> Açık
                                            </label>
                                            
                                            <label class="radio inline">
                                              <input type="radio" value="0" id="btn2" name="radiobtns" <?php echo @$close?>> Kapalı
                                            </label>
                                          </div>	<!-- /controls -->			
										</div> <!-- /control-group --><!-- /control-group --><!-- /control-group --><!-- /control-group -->
                                        
										
											
										 <br />
										
											
										<div class="form-actions">
											<button type="button" class="btn btn-primary" onclick="settingSave();">Kaydet</button> 
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
                                <?php } ?>
								</div>
							</div>
						</div>
					</div> <!-- /widget-content -->
				</div> <!-- /widget -->
		    </div> <!-- /span8 -->
	      </div> <!-- /row -->