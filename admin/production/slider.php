<?php
 include 'header.php';
 include "../setting/baglan.php";
 include "../setting/islem.php";
 ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          <div class="page-title"></div>

          <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Anahtar Kelime Giriniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara!</button>
                    </span>
                  </div>
                </div>
          </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <div class="col-md-6" align="left">
                    <h2>Slider İşlemleri 
                    <small>
                      <?php 
                      if($_GET['durum'] =='ok') { ?> 
                          <b style="color:green;"> İşlem Başarılı...</b>
                         <?php } elseif ($_GET['durum'] =='no') {?> 
                          <b style="color:red;"> İşlem Başarısız...</b>
                     <?php } ?>
                    </small>
                  </h2>
                  </div>
                    <div class="col-md-6" align="right"> 
                      <a href="slider-ekle.php"> <button style="width:100px;" class="btn btn-danger"><i class="fa fa-plus"></i> Yeni Ekle</button></a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title ">Slider Görsel</th>
                            <th class="column-title text-center">Slider Ad</th>
                            <th class="column-title text-center">Slider Sıra </th>
                            <th class="column-title text-center">Slider Durum </th>
                            <th width="80px" class="column-title"></th>
                            <th width="80px" class="column-title"></th>
                            <th width="100px" class="column-title no-link last">
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            <?php
                            $slidersor=$db->prepare('SELECT * FROM slider'); 
                            $slidersor->execute();

                            while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)){
                            ?>
                          <tr>
                            <td class=""><img width="200" height="150" src="../<?php echo $slidercek['slider_url']; ?>"></td>
                            <td class="text-center"><?php echo $slidercek['slider_ad'];?></td>
                            <td class="text-center"><?php echo $slidercek['slider_sira'];?></td>
                            <td class="text-center"><?php echo $slidercek['slider_durum'];?></td>
                            <td class=""><a href="slider-duzenle.php?durum==ok&slider_id=<?php echo $slidercek['slider_id']; ?>"><button style="width:80px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Düzenle</button></a></td>
                            
                            <td class=""><a href="../setting/islem.php?durum=ok&slider_id=<?php echo $slidercek['slider_id']; ?>"><button style="width:80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Sil</button></a></td>
                            <td class="last"><a href="#"><i class="fa fa-eye"></i> Görüntüle</a>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
       <?php include 'footer.php'; ?>
