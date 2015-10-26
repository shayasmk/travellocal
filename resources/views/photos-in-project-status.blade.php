@include('layouts.test-header')
        <link rel="stylesheet" href="/colorbox-master/colorbox.css" />
        <script src='/colorbox-master/jquery.colorbox-min.js'></script>
        <script>
            $(document).ready(function(){
                $(".group1").colorbox({rel:'group1'});
            });
    </script>
        <div class="header">Project Status</div>
        <div class="container">
            <div class='col-md-12'>
<!--                <div class='top-margin-gallery hcenter col-xs-12'>
                    <div class='col-md-4 col-sm-2 col-xs-1'>
                        
                    </div>
                    <a href="/gallery" class='yellow-color col-md-2 col-sm-4 col-xs-12 right-text-align-gallery'>A<label class='regular-font bottom-border-line'>LBU</label>M</label></a>
                    <a href="/all-photos" class='blue-color col-md-2 col-sm-4 col-xs-12 left-text-align-gallery'>ALL PHOTOS</a>
                    <div class='col-md-4 col-sm-2 col-xs-1'>
                        
                    </div>
                </div>-->
               <div class='top-margin-gallery  hcenter col-xs-12'>
                    <div class='col-xs-2'>
                    </div>
                    <div class='gallery-container col-xs-8'>
                        <?php
                        foreach($images AS $image)
                        {
                            ?>
                        
                        <div class='col-md-3 col-sm-6 col-xs-12' style='padding-top:15px'>
                          <?php
                          if($image['image'] != '')
                          {
                          ?>
                            <p>
                                <a class="group1 gallery-image-container col-xs-12" href='/uploads/album-status-images/<?php echo $image['image']; ?>'>
                                    <img class='col-md-12 top-margin-gallery-image-1' src='/uploads/album-status-images/<?php echo $image['image']; ?>' /> 
                                    <label class='gallery-image-text' style="width: 120px;text-align: center">
                                    <?php echo $image['title']; ?>
                                </label>
                                </a>
                            </p>
                              <?php
                          }
                          else
                          {
                              ?>
                            <p>
                                <a class="group1 gallery-image-container col-xs-12" href='/img/No_image.png'>
                                    <img class='col-md-12 top-margin-gallery-image-1' src='/img/No_image.png' /> 
                                    <label class='gallery-image-text' style="width: 120px;text-align: center">
                                    <?php echo $image['title']; ?>
                                </label>
                                </a>
                            </p>
                              <?php
                          }
                          ?>
<!--                          <label class='gallery-image-text'>
                              <?php echo $image['title']; ?>
                          </label>-->
                        </div>
                        <?php
                        }
                        ?>

                    </div>
                    <div class='col-xs-2'>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            $(document).ready(function(){
               $('body').addClass('gallery-main-container'); 
            });
        </script>
     @include('layouts.test-footer')