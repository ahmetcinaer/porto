<?php 
include 'header.php';
include "../setting/baglan.php";
include "../setting/islem.php";

$slidersor=$db->prepare('SELECT * FROM slider WHERE slider_id =:slider_id');
$slidersor->execute(array(
    'slider_id' => $_GET['slider_id']
));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">  
            <div class="page-title">
              <div class="title_left">
                <h3>Slider Düzenle</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Aramak için...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Slider İşlemleri  
                      <small>
                      <?php 
                        if($_GET['durum'] =='ok') { ?> 
                            <b style="color:green;"> Güncelleme Başarılı...</b>
                         <?php } elseif ($_GET['durum'] =='no') {?> 
                          <b style="color:red;"> Güncelleme Yapılmadı...</b>
                        <?php } ?>
                      </small>
                    </h2>
                    <!-- <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form action="../setting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    
                    <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id']; ?>">
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Slider_url">Resim Seç <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" id="Slider_url" name="Slider_url" value="<?php echo $slidercek['slider_url']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_ad">Slider Ad <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="slider_ad" name="slider_ad" value="<?php echo $slidercek['slider_ad']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_link">Slider Link <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="slider_link" name="slider_link" value="<?php echo $slidercek['slider_link']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_sira">Slider Sıra <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="slider_sira" name="slider_sira" value="<?php echo $slidercek['slider_sira']; ?>" required="required" value="0" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slider_durum">Slider Durum <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="heard" class="form-control" name="slider_durum" required>
                               <?php if($slidercek['slider_sira']== 1) {?>
                                    <option value="1">Aktif</option>
                                    <option value="0">Pasif</option>
                               <?php } else {?>
                                    <option value="0">Pasif</option>
                                    <option value="1">Aktif</option>
                               <?php } ?>
                            </select>
                        </div>
                    </div>
                      <div class="form-group"  >
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="sliderduzenle" class="btn btn-primary">Kaydet</button>
                        </div>
                      </div>
                   </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
       <?php include 'footer.php'; ?>
