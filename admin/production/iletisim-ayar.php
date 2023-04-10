<?php 
include 'header.php';
include "../setting/baglan.php";
include "../setting/islem.php";

$ayarsor=$db->prepare('SELECT * FROM ayar WHERE ayar_id = ?');
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">  
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar</h3>
              </div>

              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Aramak için...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara</button>
                    </span>
                  </div>
                </div>
              </div> -->
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>İletişim Ayarlar 
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
                  <form action="../setting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_logo">Site Telefon <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_tel" name="ayar_tel" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_tel']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_gsm">Site Gsm <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_gsm" name="ayar_gsm" required="required"  class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_gsm']; ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_faks">Site Faks <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_faks" name="ayar_faks" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_faks']; ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_mail">Site Mail <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_mail" name="ayar_mail" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_mail']; ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_adres">Site Adres <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_adres" name="ayar_adres" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_adres']; ?>" >
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_ilce">Site İlçe <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_ilce" name="ayar_ilce" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_ilce']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_ilce">Site İl <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_il" name="ayar_il" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_il']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_mesai">Site Mesai <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_mesai" name="ayar_mesai" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_mesai']; ?>">
                        </div>
                    </div>

                      <div class="form-group"  >
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="iletisimayarkaydet" class="btn btn-primary">Güncelle</button>
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
