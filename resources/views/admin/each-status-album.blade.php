
@include('layouts.header')

       
         <section class="content-header">
          <h1>
            Add Status Album Images
            
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

                      ?>
                        <div class="hundred-percent">
                            <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Files</button>
                        </div>
                    
                    </div>
                    
                </div>
                
                <?php
                
                foreach($data['album'] AS $img)
                {
                    ?>
                
                <div class="col-md-3">
                    <img class='hundred-percent' src='/uploads/album-status-images/<?php echo $img['image']; ?> ' />
                    <br/>
                    <label class="hcenter hundred-percent"><?php echo $img['title']; ?></label>
                    <br/>
<!--                    <div class='hundred-percent hcenter'>
                       
                        <a href="/admin/delete-each-photo-in-album/<?php echo $data['id'].'/'.$img['id'] ?>" class='btn btn-danger' type='button'>Delete</a>
                    </div>-->
                </div>
                <?php
                }
                ?>
            </div>
        </section>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Files</h4>
      </div>
        {!! Form::open(['url' => 'admin/add-project-status/'.$data['id'], 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'disclaimer-form', 'files'=>true]) !!}
      <div class="modal-body pull-left hundred-percent" id='each-file-box'>
          
<!--            {!! Form::button('Add More',array('class'=>'btn btn-success btn-sm', 'id' => 'each-album-add-more' )) !!}-->
            <div class="hundred-percent top-margin each-file-add-class pull-left" >
                {!! Form::label('Title', 'Title', array('class' => 'span2')) !!}
                {!! Form::text("data[title]", '', array('class' => 'span6')) !!}
            </div>
            <div class="hundred-percent top-margin each-file-add-class pull-left" >
                {!! Form::label('Description', 'Description', array('class' => 'span2 pull-left')) !!}
                {!! Form::textarea("data[description]", '', array('class' => 'span6')) !!}
            </div>
            <div class="hundred-percent top-margin each-file-add-class pull-left" >
                {!! Form::label(' Image', 'Image', array('class' => 'span2 pull-left')) !!}
                {!! Form::file('image', array('class'=>'' )) !!}
                
            
            </div>
      </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">UPLOAD</button>
      </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>

   @include('layouts.footer')