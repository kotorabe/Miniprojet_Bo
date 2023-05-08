<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo site_url('assets/images/favicon.ico');?>" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/fonts.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css');?>">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>

        <section class="section section-sm section-first bg-default text-center" id="virtuel">
        <?php if($type == 1) { ?>
            <center><h3>Intélligences Artificielles Virtuels</h3></center><br>
        <?php }else if($type == 2) { ?>
            <center><h3>Intélligences Artificielles Physiques</h3></center><br>
        <?php } ?>    
        <div class="container">
          <div class="row row-30 justify-content-center">
              <div class="row row-30">
                <?php foreach($content as $lv){ ?>
                    <div class="col-sm-6 wow fadeInRight">
                    <article class="box-icon-modern box-icon-modern-2">
                        <div class="box-icon-modern-icon linearicons-phone-in-out"></div>
                        <h5 class="box-icon-modern-title"><a href="<?php echo site_url('about_content_admin/artificiel');?>/<?php echo $lv['id'];?>/<?php echo $lv['id_type'];?>"><?php echo $lv['nom'];?></a></h5>
                        <div class="box-icon-modern-decor"></div>
                        <p class="box-icon-modern-text"><?php echo $lv['detail'];?></p>
                    </article>
                    </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </section>