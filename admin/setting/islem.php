<?php 
include 'baglan.php';

if  (isset($_POST['genelayarkaydet'])) {
    $ayarkaydet=$db->prepare("UPDATE ayar SET
    ayar_logo=:ayar_logo,
    ayar_siteurl=:siteurl,
    ayar_title=:title,
    ayar_description=:description,
    ayar_keywords=:keywords,
    ayar_author=:author
    WHERE ayar_id=0");
    $iletisimAyarGuncelle=$ayarkaydet->execute(array(
        'ayar_logo'=>$_POST['ayar_logo'],
        'siteurl'=>$_POST['ayar_siteurl'],
        'title'=>$_POST['ayar_title'],
        'description'=>$_POST['ayar_description'],
        'keywords'=>$_POST['ayar_keywords'],
        'author'=>$_POST['ayar_author']
    ));
    if ($iletisimAyarGuncelle) {
        header ("Location:../production/genel-ayar.php?durum=ok");
    }
    else
    {
        header ("Location:../production/genel-ayar.php?durum=no");
    }
}
if  (isset($_POST['iletisimayarkaydet'])) {
    $ayarkaydet=$db->prepare("UPDATE ayar SET
    ayar_tel=:tel,
    ayar_gsm=:gsm,
    ayar_faks=:faks,
    ayar_mail=:mail,
    ayar_adres=:adres,
    ayar_ilce=:ilce,
    ayar_il=:il,
    ayar_mesai=:mesai
    WHERE ayar_id=0");
    $iletisimAyarGuncelle=$ayarkaydet->execute(array(
        'tel'=>$_POST['ayar_tel'],
        'gsm'=>$_POST['ayar_gsm'],
        'faks'=>$_POST['ayar_faks'],
        'mail'=>$_POST['ayar_mail'],
        'adres'=>$_POST['ayar_adres'],
        'ilce'=>$_POST['ayar_ilce'],
        'il'=>$_POST['ayar_il'],
        'mesai'=>$_POST['ayar_mesai']
    ));
    if ($iletisimAyarGuncelle) {
        header ("Location:../production/iletisim-ayar.php?durum=ok");
    }
    else
    {
        header ("Location:../production/iletisim-ayar.php?durum=no");
    }
}
if  (isset($_POST['apiayarkaydet'])) {
    $ayarkaydet=$db->prepare("UPDATE ayar SET
    ayar_recapctha=:recapctha,
    ayar_googlemap=:googlemap,
    ayar_analystic=:analystic
    WHERE ayar_id=0");
    $apiAyarGuncelle=$ayarkaydet->execute(array(
        'recapctha'=>$_POST['ayar_recapctha'],
        'googlemap'=>$_POST['ayar_googlemap'],
        'analystic'=>$_POST['ayar_analystic'] 
    ));
    if ($apiAyarGuncelle) {
        header ("Location:../production/api-ayar.php?durum=ok");
    }
    else
    {
        header ("Location:../production/api-ayar.php?durum=no");
    }
}
if  (isset($_POST['sosyalmedyaayarkaydet'])) {
    $ayarkaydet=$db->prepare("UPDATE ayar SET
    ayar_facebook=:facebook,
    ayar_twitter=:twitter,
    ayar_youtube=:youtube,
    ayar_google=:google,
    ayar_linkedin=:linkedin
    WHERE ayar_id=0");
    $hakkimizdaGuncelle=$ayarkaydet->execute(array(
        'facebook'=>$_POST['ayar_facebook'],
        'twitter'=>$_POST['ayar_twitter'],
        'youtube'=>$_POST['ayar_youtube'],
        'google'=>$_POST['ayar_google'],
        'linkedin'=>$_POST['ayar_linkedin'] 
    ));
    if ($sosyalAyarGuncelle) {
        header ("Location:../production/sosyal-medya-ayar.php?durum=ok");
    }
    else
    {
        header ("Location:../production/sosyal-medya-ayar.php?durum=no");
    }
}
if  (isset($_POST['mailayarkaydet'])) {
    $ayarkaydet=$db->prepare("UPDATE ayar SET
    ayar_smtphost=:smtphost,
    ayar_smtpuser=:smtpuser,
    ayar_smtppassword=:smtppassword,
    ayar_smtpport=:smtpport
    WHERE ayar_id=0");
    $mailAyarGuncelle=$ayarkaydet->execute(array(
        'smtphost'=>$_POST['ayar_smtphost'],
        'smtpuser'=>$_POST['ayar_smtpuser'],
        'smtppassword'=>$_POST['ayar_smtppassword'],
        'smtpport'=>$_POST['ayar_smtpport']
    ));
    if ($mailAyarGuncelle) {
        header ("Location:../production/mail-ayar.php?durum=ok");
    }
    else
    {
        header ("Location:../production/mail-ayar.php?durum=no");
    }
}
if  (isset($_POST['hakkimizdakaydet'])) {
    $hakkimizdakaydet=$db->prepare("UPDATE hakkimizda SET
    hakkimizda_title=:title,
    hakkimizda_content=:content,
    hakkimizda_video=:video,
    hakkimizda_vizyon=:vizyon,
    hakkimizda_misyon=:misyon
    WHERE hakkimizda_id=0");
    $hakkimizdaGuncelle=$hakkimizdakaydet->execute(array(
        'title'=>$_POST['hakkimizda_title'],
        'content'=>$_POST['hakkimizda_content'],
        'video'=>$_POST['hakkimizda_video'],
        'vizyon'=>$_POST['hakkimizda_vizyon'],
        'misyon'=>$_POST['hakkimizda_misyon'] 
    ));
    if ($hakkimizdaGuncelle) {
        header ("Location:../production/hakkimizda.php?durum=ok");
    }
    else
    {
        header ("Location:../production/hakkimizda.php?durum=no");
    }
}
if  (isset($_POST['sliderkaydet'])) {
    
    $uploads_dir = '../../dimg/slider';
    @$tmp_name = $_FILES['slider_url']["tmp_name"];
    @$name = $_FILES['Slider_url']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizsayi2=rand(20000,32000);
    $benzersizsayi3=rand(20000,32000);
    $benzersizsayi4=rand(20000,32000);
    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
    $refimgyol = substr($uploads_dir,6)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad.$name");


    $kaydet=$db->prepare("INSERT INTO  slider SET
    slider_ad=:ad,
    slider_link=:link,
    slider_sira=:sira,
    slider_durum=:durum,
    slider_url=:url");
    $insert=$kaydet->execute(array(
        'ad' => $_POST['slider_ad'],
        'link' => $_POST['slider_link'],
        'sira' => $_POST['slider_sira'],
        'durum' => $_POST['slider_durum'],
        'url' => $refimgyol
    ));
    if ($insert) {
        header ("Location:../production/slider.php?durum=ok");
    }
    else
    {
        header ("Location:../production/slider.php?durum=no");
    }
}
if ($_GET["durum"]=="ok") {
    $sil=$db->prepare("DELETE FROM slider WHERE slider_id =:slider_id");
    $kontrol=$sil->execute(array(
        'slider_id' => $_GET["slider_id"]
    ));
    if ($kontrol) {
        header ("Location:../production/slider.php?durum=ok");
    }
    else
    {
        header ("Location:../production/slider.php?durum=no");
    }
}

if  (isset($_POST['sliderduzenle'])) {
    $duzenle=$db->prepare("UPDATE slider SET
    slider_ad=:slider_ad,
    slider_url=:url,
    slider_link=:link,
    slider_sira=:sira,
    slider_durum=:durum
    WHERE slider_id = {$slider_id = $_POST['slider_id']}");
    $update=$duzenle->execute(array(
        'slider_ad'=>$_POST['slider_ad'],
        'url'=>$_POST['slider_url'],
        'link'=>$_POST['slider_link'],
        'sira'=>$_POST['slider_sira'],
        'durum'=>$_POST['slider_durum']
    ));
    $slider_id = $_POST['slider_id'];

    if ($update) {
        header ("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");
    }
    else
    {
        header ("Location:../production/slider-duzenle.php?&durum=no");
    }
}
?>