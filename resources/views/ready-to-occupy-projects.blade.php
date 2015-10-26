@include('layouts.test-header')
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<link rel="stylesheet" href="/colorbox-master/colorbox.css" />
<script src='/colorbox-master/jquery.colorbox-min.js'></script>
 <script>
            $(document).ready(function(){
                $(".group5").colorbox({rel:'group5'});
                $(".group4").colorbox({rel:'group4'});
            });
            
            function makeColourBox()
            {
                $(".group5").colorbox({rel:'group5'});
                $(".group4").colorbox({rel:'group4'});
            }
    </script>
        <div class="header">PROJECTS</div>
        <div class="container">
            <div class='col-md-12 main-container' >
                <div class='top-margin-gallery hcenter col-xs-12'>
                   <div class='col-sm-2 col-xs-1'>
                        
                    </div>
                    <a href="/projects/ongoing" class='yellow-color col-sm-2 col-xs-12 utility-yellow-sub-menu fifteen-font-size '>ONGOING</a>
                    <a href="/projects/ready-to-occupy" class='blue-color col-sm-3 col-xs-12 utility-blue-sub-menu fifteen-font-size' style="text-align:center">REA<label class='regular-font bottom-border-line'>DY TO OC</label>CUPY</a>
                    <a href="/projects/completed" class='blue-color col-sm-3 col-xs-12 utility-red-sub-menu   fifteen-font-size '>COMPLETED</a>
                    <div class='col-sm-2 col-xs-1'>
                        
                    </div>
                </div>
                <div class='top-margin-gallery2  hcenter col-xs-12' >
                    <div class='col-xs-1'>
                    </div>
                    <div class=' col-xs-10'>
                        
                        <?php 
                       if(!isset($projects) || count($projects)<1)
                       {
                           echo "<div class='pro-launching-soon'>Launching Soon</div>";
                       }
                        
                        foreach($projects AS $project)
                        {
                          $src = '';
                          if($project['image_location'] == '')
                          {
                              $src = '/oxoniya/public/img/No_image.png';
                          }
                          else
                          {
                              $src = '/uploads/projects/'.$project["image_location"];
                          }
                    ?>
                        <div class='col-md-4 col-sm-6 col-xs-12'>
                            <a class="col-xs-12 projects-image-border-container" >
                          <img class='col-md-12 top-margin-gallery-image col-xs-12' src='<?php echo $src ?>' 
                               data-id='<?php echo $project['id'] ?>'
                               data-overview='<?php echo $project['overview'] ?>'
                               data-project_status='<?php echo $project['project_status'] ?>'
                               data-amenities='<?php echo str_replace("\n","</li><li>",$project['amenities']); ?>'
                               data-latitude='<?php echo $project['latitude'] ?>'
                               data-longitude='<?php echo $project['longitude'] ?>'
                               data-location_info='<?php echo $project['location_info'] ?>'
                               data-image_location='<?php echo $project['image_location'] ?>'
                               data-three_sixty_folder='<?php echo $project['three_sixty_folder'] ?>'
                               data-address="<?php echo $project['address'] ?>" /> 
                            </a>
                          <label class='gallery-image-text'>
                              <?php echo $project['name'] ?>
                          </label>
                        </div>
                        <?php
                        }
                        ?>
                        
                    </div>
                    <div class='col-xs-1'>
                        
                    </div>
                </div>
            </div>
            <div class='col-xs-12 projects-sub-container' style='display:none;padding:1px'>
                <div class='col-md-4 col-xs-12' style='padding:1px'>
                    <img class='col-xs-12 menu-menu-image' /> 
                </div>
                <div class='col-md-8 col-xs-12'>
                    <div class='col-xs-12 ongoing-projects-sub-container-specification'>
                        <ul class='col-xs-11 project-sub-container-menu'>
                            <li class='project-menu-list menu-active menu-overview'>
                              Overview  
                            </li>
                            <li class='project-menu-list menu-project-status'>
                              Project Status  
                            </li>
                            <li class='project-menu-list menu-floor-plans'>
                              Floor Plans  
                            </li>
                            <li class='project-menu-list menu-amenities'>
                              Amenities  
                            </li>
                            <li class='project-menu-list menu-location'>
                              Location  
                            </li>
                        </ul>
                        <div class='col-xs-11 projects-sub-description overview-desc'>
                            
                        </div>
                        <div class='col-xs-11 projects-sub-description project-status-desc' style='display: none;padding-bottom:0px;margin-bottom:0px'>
                            
                        </div>
                        <div class='col-xs-11 projects-sub-description floor-plans-desc' style='display: none;padding-bottom:0px;margin-bottom:0px'>
                            
                        </div>
                        <div class='col-xs-11 projects-sub-description amenities-desc' style='display: none'>
                            
                        </div>
                        <div class='col-xs-11 projects-sub-description location-desc' style='display: none'>
                            
                        </div>
                        <a href="/tour/flash/Oxoniya_Oxoniya 360.html" target="_blank" class='col-xs-6 projects-360-link'>
                            Watch 360&deg; view
                        </a>
                        <div class='col-xs-5 projects-back-link'>
                            < back
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
         {!! Form::open(['url' => 'admin/album/', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'disclaimer-form', 'files'=>true]) !!}
        {!! Form::close() !!}
         <script>
    $(document).ready(function(){
       $('body').addClass('projects-main-container'); 
    });
    </script>
       @include('layouts.test-footer')
    