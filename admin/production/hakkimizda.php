<?php 
include 'header.php';
include "../setting/baglan.php";
include "../setting/islem.php";

$hakkimizdasor=$db->prepare('SELECT * FROM hakkimizda WHERE hakkimizda_id = ?');
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>
<head>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
</head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">  
            <div class="page-title">
              <div class="title_left">
                <h3>Hakkımızda</h3>
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
                    <h2>Hakkımızda 
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
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="hakkimizda_title">Hakkımızda Başlık <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="hakkimizda_title" name="hakkimizda_title" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $hakkimizdacek['hakkimizda_title']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="hakkimizda_content">Hakkımızda İçerik <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="ckeditor" name="hakkimizda_content" id="hakkimizda_content"><?php echo $hakkimizdacek['hakkimizda_content']; ?></textarea>
                        </div>
                    </div>
                    <script type="text/javascript">
                       CKEDITOR.replace('hakkimizda_content',
                        {
                          filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
                          filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
                          filebrowserFlashBrowseUrl: '/ckfinder/ckfinder.html?type=Flash',
                          filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                          filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                          filebrowserFlashUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                          forcePastePlainText:true
                          filebrowserWindowWidth: '1000',
                          filebrowserWindowHeight: '700'
                        } );
                        </script>
                     <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="hakkimizda_video">Hakkımızda Video <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="hakkimizda_video" name="hakkimizda_video" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $hakkimizdacek['hakkimizda_video']; ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="hakkimizda_vizyon">Hakkımızda Vizyon <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="hakkimizda_vizyon" name="hakkimizda_vizyon" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $hakkimizdacek['hakkimizda_vizyon']; ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="hakkimizda_misyon">Hakkımızda Misyon <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="hakkimizda_misyon" name="hakkimizda_misyon" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $hakkimizdacek['hakkimizda_misyon']; ?>" >
                        </div>
                    </div>

                      <div class="form-group"  >
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-2">
                          <button type="submit" name="hakkimizdakaydet" class="btn btn-primary">Güncelle</button>
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
