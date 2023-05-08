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
            <div class="col-md-7 col-lg-5 col-xl-6 text-lg-left wow fadeInUp"><img src="<?php echo site_url('assets/images/index-1-415x592.png');?>" alt="intelligence artificielle" width="415" height="592"/>
            </div>
            <div class="col-lg-7 col-xl-6">
                <?php foreach($liste as $l){ ?>
                    <h3 class="text-center"><?php echo $l['nom'];?> by <?php echo $l['fournisseur'];?></h3><br>
                    <p style="font-size:15px"><?php echo $l['detail'];?></p>
                <?php } ?>
            </div>
          </div><br>
          <a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Modifier</a>
          <div class="modal fade" id="modalCta" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4>Modifier le Doc</h4>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <form  method="post" action="<?php echo site_url('ContenuController/Upt_contenu');?>">
                    <div class="row row-14 gutters-14">
                      <div class="col-12">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="form-wrap">
                          <input class="form-input" id="contact-modal-name" type="text" name="nom" data-constraints="@Required">
                          <label class="form-label" for="contact-modal-name">Nom</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-wrap">
                          <input class="form-input" id="contact-modal-fournisseur" type="text" name="fournisseur" data-constraints="@Required">
                          <label class="form-label" for="contact-modal-fournisseur">Fournisseur</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-wrap">
                          <input class="form-input" id="contact-modal-email" type="file" name="img">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-wrap">
                          <select name="id_type" class="form-control">
                            <?php foreach($liste_type as $lt) { ?>
                              <option value="<?php echo $lt['id'];?>"><?php echo $lt['nom'];?></option>
                              <?php } ?>
                          </select>
                        </div>
                      </div><br>
                      <div class="col-12">
                        <div class="form-wrap">
                          <input class="form-input" type="date" name="date_sortie">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-wrap">
                          <label class="form-label" for="contact-modal-message">Detail</label>
                          <textarea class="form-input textarea-lg" id="contact-modal-message" name="detail"></textarea>
                        </div>
                      </div>
                    </div>
                    <button class="button button-primary button-pipaluk" type="submit">Add</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <script src="<?php echo site_url('assets/js/core.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/script.js');?>"></script>