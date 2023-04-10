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
                    <h2>Sosyal Medya Ayarları
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_logo">Site Facebook <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_facebook" name="ayar_facebook" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_facebook']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_siteurl">Site Twitter <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_twitter" name="ayar_twitter" required="required"  class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_twitter']; ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_title">Site Youtube <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_youtube" name="ayar_youtube" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_youtube']; ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_description">Site Google <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_google" name="ayar_google" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_google']; ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_keywords">Site Linkedin <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_linkedin" name="ayar_linkedin" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_linkedin']; ?>" >
                        </div>
                    </div>
                      <div class="form-group"  >
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="sosyalmedyaayarkaydet" class="btn btn-primary">Güncelle</button>
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
