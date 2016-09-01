</div></div></div>
<div class="extra">
  <div class="extra-inner">
    <div class="container">
      <div class="row">
                    <div class="span3">
                        <h4>
                            Hızlı Erişim Linkleri</h4>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>">Ana Sayfa</a></li>
                            <li><a href="<?php echo base_url('sitesetting'); ?>">Site Ayarları</a></li>
                            <li><a href="<?php echo base_url('product'); ?>">Ürünler</a></li>
                            <li><a href="<?php echo base_url('analize'); ?>">İstatistik</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>Ürünler</h4>
                        <ul>
                            <li><a href="<?php echo base_url('product'); ?>">Tüm ürünler</a></li>
                            <li><a href="<?php echo base_url('categories'); ?>">Kategoriler</a></li>
                            <li><a href="<?php echo base_url('groups'); ?>">Gruplar</a></li>
                            <li><a href="<?php echo base_url('product/newProduct'); ?>">Yeni Ürün</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>Yönetim</h4>
                        <ul>
                            <li><a href="<?php echo base_url('management/newUser'); ?>">Yeni Ekle</a></li>
                            <li><a href="<?php echo base_url('management'); ?>">Ayarlar</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4><?php  echo $this->session->userdata('username') ?></h4>
                        <ul>
                            <li><a href="<?php echo base_url('profile/'.$this->session->userdata('username')); ?>">Profil</a></li>
                            <li><a href="<?php echo base_url('logout');?>">Çıkış Yap</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /extra-inner --> 
</div>
<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; <?php echo date('Y');?> <a href="">Bir YazılımcıAklı projesidir tüm hakları saklıdır</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php echo base_url('assets/js/jquery-1.7.2.min.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/excanvas.min.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/chart.min.js'); ?>" type="text/javascript"></script> 
<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/full-calendar/fullcalendar.min.js'); ?>"></script>
<script src="<?php echo base_url("assets/js/base.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/faq.js"); ?>"></script>
<script>

$(function () {
	
	$('.faq-list').goFaq ();

});

</script>
</body>
</html>
