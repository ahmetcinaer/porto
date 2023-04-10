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
                    <h2>Genel Ayarlar 
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_logo">Site Logo <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_logo" name="ayar_logo" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_logo']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_siteurl">Site Adres <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_url" name="ayar_siteurl" required="required"  class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_siteurl']; ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_title">Başlık <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_title" name="ayar_title" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_title']; ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_description">Site Açıklaması <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_description" name="ayar_description" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_description']; ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_keywords">Site Anahtar Kelimeleri <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_keywords" name="ayar_keywords" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_keywords']; ?>" >
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_author">Site Yazar <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="ayar_author" name="ayar_author" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ayarcek['ayar_author']; ?>">
                        </div>
                    </div>

                      <div class="form-group"  >
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="genelayarkaydet" class="btn btn-primary">Güncelle</button>
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
