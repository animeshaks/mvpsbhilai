<section class="banner-area relative about-banner" id="home" style="background: url(<?php echo $base_url; ?>img/gallery_background.jpg);">  
    <div class="overlay overlay-bg"></div>
    <div class="container">             
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    School Activities          
                </h1>   
                <p class="text-white link-nav">
                    <a href="<?php echo $base_url; ?>home">Home</a>  
                    <span class="lnr lnr-arrow-right"></span><a href="<?php echo $base_url; ?>gallery"> Gallery</a>
                    <span class="lnr lnr-arrow-right"></span><a href="<?php echo $base_url; ?>school-activities"> School Activities</a>
                </p>
            </div>  
        </div>
    </div>
</section>

<section class="sample-text-area">
<div class="container">

    <div class="tz-gallery">
        <div class="row">
            <?php
                $dir2 = glob('img/gallery/schoolActivity/{*.JPG,*.jpg,*.PNG,*.png}',GLOB_BRACE); 
                foreach($dir2 as $value)
                {
            ?>
                    <div class="col-sm-4 col-md-3 col-xs-6">
                        <a href="<?php echo $value; ?>" data-fancybox="images" data-caption="" class="lightbox">
                            <img src="<?php echo $value; ?>" alt="<?php echo $value; ?>" />
                        </a>   
                    </div>     
            <?php
                }
            ?> 
        </div>
    </div>
</div>
</section>