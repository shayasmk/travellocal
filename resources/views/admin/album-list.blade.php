
@include('layouts.header')

       
         <section class="content-header">
          <h1>
            Album LIst
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
         
            <li class="active">Album List</li>
          </ol>
        </section>
        <section class="content " >

            <!-- Small boxes (Stat box) -->
            <div class="row">
    
                <div >
                    <div class="well description-textarea actual-div base-div pull-left hundred-percent" >
                    
                    <?php
                if($errors->any())
                        {
                            echo implode('', $errors->all('<div style="color:red">:message</div>'));
                        }

                       foreach($albums AS $album)
                       {
                    ?>
               
                        <div class='col-md-3 top-margin pull-left'>
                            <?php
                            if($album['image'] != '')
                            {
                            ?>
                            <a href="/admin/album/<?php echo $album['id'] ?>"><img class="admin-album-img" src="/uploads/album-image/<?php echo $album['image'] ?>" /></a>
                            <br/>
                            
                            <label><?php  echo $album['name']; ?></label>
                            <br/>
                            <div class='hundred-percent hcenter'>
<!--                            <button class='btn btn-success' type='button'>Edit</button> -->
                                <a href="/admin/delete-album/<?php echo $album['id'] ?>/album" class='btn btn-danger' type='button'>Delete</a>
                            </div>
                            <?php
                            }
                            else
                            {
                                ?>
                            <a href="/admin/album/<?php echo $album['id'] ?>"><img class="admin-album-img" src="/img/No_image.png" /></a>
                            <br/>
                            <label><?php  echo $album['name']; ?></label>
                            <br/>
                            <div class='hundred-percent hcenter'>
<!--                            <button class='btn btn-success' type='button'>Edit</button> -->
                                <a href="/admin/delete-album/<?php echo $album['id'] ?>/album" class='btn btn-danger' type='button'>Delete</a>
                            </div>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                       }
                       ?>
                
                    </div>
                    
                </div>
            </div>
        </section>

   @include('layouts.footer')