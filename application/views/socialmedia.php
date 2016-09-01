<div class="row">
  <div class="span6">
    <div class="widget widget-table action-table">
	  <div class="widget-header"> <i class="icon-pushpin"></i>
        <h3>Tüm Sosyal Medya Butonları</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <div class="message_m" id='message2'></div>
            <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                  	<th> #</th>
                    <th> Sosyal Medya Başlığı </th>
                    <th> Link</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($socialGet as $get){ ?>
                  <tr>
                  	<td><img src="<?php echo $get->icon; ?>" width="58"></td>
                    <td><?php echo $get->title; ?></td>
                    <td><?php echo $get->link; ?></td>
                    <td class="td-actions"><a href="javascript:;" onClick="socialDelete(<?php echo $get->id; ?>)" class="btn btn-small btn-danger"><i class="btn-icon-only icon-remove"></i></a></td>
                  </tr> 
                <?php } ?>              
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --><!-- /widget --><!-- /widget --><!-- /widget -->
        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-edit"></i>
              <h3>Yeni Button Oluştur</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <div class="message" id="message"></div>
            <form id="edit-profile" class="form-horizontal" onSubmit="return false">										
				<div class="control-group">
                    <label class="control-label" for="socialTitle">Sosyal Medya Başlığı:</label>
                        <div class="controls">
                            <input type="text" class="span4" name="socialTitle" placeholder="Örneğin 'Twitter, Facebook, Google vs.'">
                        </div>	
                </div>								
				<div class="control-group">
                    <label class="control-label" for="url">Yönlendirilecek URL:</label>
                        <div class="controls">
                            <input type="text" class="span4" name="URL" placeholder="http://www.example.com">
                        </div>	
                </div>	
                            	<?php 
				$dir = opendir("assets/img/icons/");
				$i=0;
				while (($dosya = readdir($dir)) !== false)
				{
					if(! is_dir($dosya)){
						$i++;
					echo '<input type="radio" class="radio_item" value="'.base_url().'assets/img/icons/'.$dosya.'" name="item" id="radio'.$i.'">
		<label class="label_item" for="radio'.$i.'"> <img src="assets/img/icons/'.$dosya.'"> </label>';
					}
				}
				echo "<input type='hidden' name='total' value='".$i."'>";
				closedir($dir);
				?>
              <div class="clear"></div>
                <div class="form-actions">
                    <button type="button" class="btn btn-primary" onClick="socialAdd();">Yeni Ekle</button>
                    <button type="reset" class="btn btn-danger">Temizle</button>
                </div>
            </div>
            
            <!-- /widget-content --> 
          </div>
          <!-- /widget --><!-- /widget --><!-- /widget --><!-- /widget -->
        </div>
        <!-- /span6 --> 
      </div>