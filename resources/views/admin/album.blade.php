
@include('layouts.header')

       
         <section class="content-header">
          <h1>
            Album
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
         
            <li class="active">Add Album</li>
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
                {!! Form::open(['url' => 'admin/album/', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'disclaimer-form', 'files'=>true]) !!}
                   
     
                    <div class='hundred-percent top-margin pull-left'>
                        {!! Form::label('Album','Album',['class' => 'pull-left span2']) !!}
                         {!! Form::text('data[name]', '',array('required', 'class'=>'form-control description-textarea input-area span7 pull-left', 'placeholder'=>'Album')) !!}
                    </div>
                
                    <div class='hundred-percent top-margin pull-left'>
                        {!! Form::label('Description','Description',['class' => 'pull-left span2']) !!}
                         {!! Form::textarea('data[description]', '',array( 'class'=>'form-control description-textarea input-area span7 pull-left', 'placeholder' => 'Description' )) !!}
                    </div>
                   
                    <div class='hundred-percent top-margin pull-left'>
                        {!! Form::label('Image','Image',['class' => 'pull-left span2']) !!}
                         {!! Form::file('image', '',array('required', 'class'=>'form-control description-textarea input-area span7 pull-left', )) !!}
                    </div>
    
                    <div class="pull-left hundred-percent" style="text-align:center;margin-top:5px">
                    {!! Form::submit('SAVE',array( "class" => "btn btn-primary")) !!}
                   
                    
                    </div>
                {!! Form::close() !!}
        </div>
                    
                </div>
            </div>
        </section>

   @include('layouts.footer')