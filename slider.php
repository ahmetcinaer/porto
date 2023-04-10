<div class="slider-container rev_slider_wrapper" style="height: 650px;">
<div id="revolutionSlider" class="slider rev_slider manual">
    <ul>
    <?php
                $slidersor=$db->prepare('SELECT * FROM slider'); 
                $slidersor->execute();
                while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)){
    ?>
        <li data-transition="fade" data-title="<?php echo $slidercek['slider_ad']; ?>" data-thumb="../<?php echo $slidercek['slider_url']; ?>">
           
                <img src="../<?php echo $slidercek['slider_url']; ?>"  
                 alt="<?php echo $slidercek['slider_ad']; ?>"
                data-bgposition="center center" 
                data-bgfit="cover" 
                data-bgrepeat="no-repeat"
                class="rev-slidebg">

                       
        </li>
    <?php } ?>    
    </ul>
</div>
</div>