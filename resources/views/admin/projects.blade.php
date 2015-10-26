
@include('layouts.header')

         <section class="content-header">
          <h1>
            Projects
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
         
            <li class="active">Add Projects</li>
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
                {!! Form::open(['url' => 'admin/project', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'disclaimer-form', 'files'=>true]) !!}
                   
     
                    <div class='hundred-percent top-margin pull-left'>
                        {!! Form::label('Name','Name',['class' => 'pull-left span2']) !!}
                         {!! Form::text('data[name]', '',array('required', 'class'=>'form-control description-textarea input-area span7 pull-left', 'placeholder'=>'Name')) !!}
                    </div>
                    <div class='hundred-percent top-margin pull-left'>
                        {!! Form::label('Address','Address',['class' => 'pull-left span2']) !!}
                         {!! Form::textarea('data[address]', '',array( 'class'=>'form-control description-textarea input-area span7 pull-left', 'placeholder' => 'Address' )) !!}
                    </div>
                    <div class='hundred-percent top-margin pull-left'>
                        {!! Form::label('Location','Location',['class' => 'pull-left span2']) !!}
                         {!! Form::text('data[location]', '',array( 'class'=>'form-control description-textarea input-area span7 pull-left', 'placeholder' => 'Location' )) !!}
                    </div>
                    <div class='hundred-percent top-margin pull-left'>
                        {!! Form::label('Construction started on:','Construction started on:',['class' => 'pull-left span2']) !!}
                         {!! Form::text('data[construction_start_date]', '',array( 'class'=>'form-control description-textarea input-area span7 pull-left', 'placeholder' => 'Construction start date' )) !!}
                    </div>
                    <div class='hundred-percent top-margin pull-left'>
                        {!! Form::label('Sq Feet','Sq Feet',['class' => 'pull-left span2']) !!}
                         {!! Form::text('data[sq_feet]', '',array( 'class'=>'form-control description-textarea input-area span7 pull-left', 'placeholder' => 'Sq. Feet' )) !!}
                    </div>
                    
                    <div class='hundred-percent top-margin pull-left'>
                        {!! Form::label('Overview','Overview',['class' => 'pull-left span2']) !!}
                         {!! Form::textarea('data[overview]', '',array( 'required','class'=>'form-control description-textarea input-area span7 pull-left', 'placeholder' => 'Overview' )) !!}
                    </div>
                    <div class='hundred-percent top-margin pull-left'>
                        {!! Form::label('Project Status','Project Status',['class' => 'pull-left span2']) !!}
                         {!! Form::select('data[project_status]', array('ongoing' => 'ongoing', 'ready_to_occupy' => 'ready to occupy', 'completed' => 'completed'),'',array('required', 'class'=>'form-control description-textarea input-area span7 pull-left' )) !!}
                    </div>
                    <div class='hundred-percent top-margin pull-left'>
                            {!! Form::label('Amenities','Amenities',['class' => 'pull-left span2']) !!}
                             {!! Form::textarea('data[amenities]', '',array('required', 'class'=>'form-control description-textarea input-area span7 pull-left', 'placeholder' => 'Amenities' )) !!}
                    </div>
                    <div class='hundred-percent top-margin pull-left' style='margin-left:20%'>
                            <div class="map_canvas"></div>
                    </div>
                    <div class='hundred-percent top-margin pull-left'>
                                {!! Form::label('Latitude','Latitude',['class' => 'pull-left span2']) !!}
                             {!! Form::text('data[latitude]', '',array('required', 'class'=>'form-control description-textarea input-area span7 pull-left', 'placeholder' => 'Lattitude' , 'id' => 'latitude')) !!}
                    </div>
                    <div class='hundred-percent top-margin pull-left'>
                            {!! Form::label('Longitude','Longitude',['class' => 'pull-left span2']) !!}
                             {!! Form::text('data[longitude]', '',array('required', 'class'=>'form-control description-textarea input-area span7 pull-left', 'placeholder' => 'Longitude' , 'id' => 'longitude')) !!}
                    </div>
                    <div class='hundred-percent top-margin pull-left'>
                            {!! Form::label('Location Info','Location Info',['class' => 'pull-left span2']) !!}
                             {!! Form::text('data[location_info]', '',array('required', 'class'=>'form-control description-textarea input-area span7 pull-left', 'placeholder' => 'Location Info' , 'id' => 'location_info')) !!}
                    </div>
                    
                    <div class='hundred-percent top-margin pull-left project-file-upload'>
                            {!! Form::label('Image','Image',['class' => 'pull-left span2']) !!}
                             {!! Form::file('image') !!}
                    </div>
                    <div class="hundred-percent project-file-upload pull-left" id="floor-plan-container">
                        <b class="admin-add-floor-plans"><u>Add Floor Plans</u></b>
                        
                        <div class='hundred-percent top-margin pull-left '>
                            <label class="pull-left span2">Floor PLans</label>
                            <input type="file" name="floor[]" class=" pull-left"/>
                            <select name="floor_title[]" class=" pull-left" style="margin-right:15px">
                                <option value="Typical">Typical</option>
                                <option value="Individual">Individual</option>
                                <option value="Location_plan">Location plan</option>
                            </select>
                            
                            <button type="button" id = "add-more-button" class="pull-left btn btn-success btn-xs"><i class="glyphicon glyphicon-plus-sign"></i></button>
                          
                        </div>
                    </div>
                
                    <div class="hundred-percent project-file-upload pull-left" id="status-image-container">
                        <b class="admin-add-floor-plans"><u>Add Status Images</u></b>
                        
                        <div class='hundred-percent top-margin pull-left '>
                            <label class="pull-left span2">Status Images</label>
                            <input type="file" name="status[]" class=" pull-left"/>
                            <input type="text" name="status_title[]" class=" pull-left" style="margin-right:15px"/>
                            
                            <button type="button" id = "add-more-button-status" class="pull-left btn btn-success btn-xs"><i class="glyphicon glyphicon-plus-sign"></i></button>
                          
                        </div>
                    </div>
                
                    <div class="hundred-percent">
                        <b class="admin-add-floor-plans"><u>Add 360 View</u></b>
                        
                        <div class='hundred-percent top-margin pull-left '>
                            <label class="pull-left span2">360 view</label>
                            <input type="file" name="three_sixty" class=" pull-left"/>
                            
                          
                        </div>
                    </div>
                
    
                    <div class="pull-left hundred-percent" style="text-align:center;margin-top:5px">
                    {!! Form::submit('SAVE',array( "class" => "btn btn-primary")) !!}
                   
                    
                    </div>
                {!! Form::close() !!}
        </div>
                    
                </div>
            </div>
        </section>
<form style="display:none">
      <input id="geocomplete" type="text" placeholder="Type in an address" value="111 Broadway, New York, NY" />
      <input id="find" type="button" value="find" />
      
      
      
      <a id="reset" href="#" style="display:none;">Reset Marker</a>
    </form>
 <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    
    <script src="/geolocation/jquery.geocomplete.js"></script>
        <script>
      $(function(){
        $("#geocomplete").geocomplete({
          map: ".map_canvas",
          details: "form ",
          location: [10.0237, 76.3087],
          markerOptions: {
            draggable: true
          }
        });
        
        $("#geocomplete").bind("geocode:dragged", function(event, latLng){
          $("#latitude").val(latLng.lat());
          $("#longitude").val(latLng.lng());
          $("#reset").show();
        });
    });
</script>

   @include('layouts.footer')