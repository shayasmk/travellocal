<a href="/index.php" style='position:fixed;' id="home-image-fixed">
    <img src="/img/Home.png" style="margin-right:10px;position: fixed;right:10px;top:10px"/>
</a>

<div  id="hotline-fixed" >
    Hotline : +91 96331 10101
</div>

<div style='position:fixed;bottom:10px;right:10px;z-index:10000;color:white;font-size:11px'>
            
    <a href="https://twitter.com/OxoniyaBuilders" target="_blank"><img src="/img/Twitter.png" style="margin-right:10px"/></a>
            <a href=" https://www.facebook.com/pages/Oxoniya-Builders-Developers-Pvt-Ltd/358525754343470" target="_blank"><img src="/img/facebook.png" /></a>
        </div>
{!! Form::open(['url' => 'contact', 'method' => 'post',  'role' => 'form', 'id' => 'enquiry-form']) !!}
<div class='enquire-now-div' >
    <div class='enquire-now-text'>
        Enquire Now
    </div>
</div>
<div id="toggle">
    <div  class="col-md-10 error_space_enquiry" style="float:left;padding-top:5px;color:white;font-weight: bold"></div>
    <div id="toggle-close-id" class="col-md-1" style="float:right"><div class="close-toggle-inside">x</div></div>
    
    <div class="col-md-12" style="margin-bottom:20px">
        <div class="col-md-6 col-sm-12">
            <input type="text" class="col-sm-12 top-margin side-pop" id="name1" placeholder="Name" />
            <input type="text" class="col-sm-12 top-margin side-pop" id="email1" placeholder="Email" />
            <input type="text" class="col-sm-12 top-margin side-pop" id="mobile1" placeholder="Mobile"  />
        </div>
         <div class="col-md-6 col-sm-12">
             {!! Form::textarea('data[message]', '',array('required', 'class'=>'col-sm-12 top-margin side-pop-message', 'placeholder'=>'Message', 'style' => 'height:81px', 'id'=>'message1')) !!}
             
        </div>
        <div class="col-md-12" style="text-align: right">
            <input type="button" value="SUBMIT" class="btn btn-inverse btn-xs" id="enquiry-now-submit-1" style='margin-top:5px' />
        </div>
    </div>
    
    
</div>
<div class='enquire-now-div1' >
    <div class='enquire-now-text1'>
        Enquire Now
    </div>
</div>
<div id="toggle1">
    <div  class="col-md-10 error_space_enquiry" style="float:left;padding-top:5px;color:white;font-weight: bold"></div>
    <div id="toggle-close-id1" class="col-xs-1" style='float:right'><div class="close-toggle-inside1">x</div></div>
    
    <div class="col-xs-12" style="margin-bottom:2px;padding:0px;">
        <div class="col-xs-12 ">
            <input type="text" class="col-xs-12 top-margin side-pop" id="name2" placeholder="Name" />
            <input type="text" class="col-xs-12 top-margin side-pop" id="email2" placeholder="Email" />
            <input type="text" class="col-xs-12 top-margin side-pop" id="mobile2" placeholder="Mobile"  />
        
             {!! Form::textarea('data[message]', '',array('required', 'class'=>'col-xs-12 top-margin side-pop-message', 'placeholder'=>'Message', 'style' => 'height:81px', 'id' => 'message2')) !!}
             
        </div>
        <div class="col-xs-12" style="text-align: right">
            <input type="button" value="SUBMIT" class="btn btn-inverse btn-xs" id="enquiry-now-submit-2" style='margin-top:5px' />
        </div>
    </div>
    
    
</div>
{!! Form::close() !!}
</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
          <iframe  class="youtube-iframe" src="https://www.youtube.com/embed/1cRM1xAefXc" frameborder="0"  allowfullscreen style=''></iframe>
      </div>
      <div class="modal-footer">
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    $(document).ready(function(){
        var width = $(window).width();
        var height = $(window).height();
        var newHeight = height + 120;
      //  var ratio = 16/9;
       // var height = width/ratio + 32; /* 32px is approx. height of controls */
        $('.video-iframe').css('height', height);
        $('.video-iframe').css('width', width);
        //$('video').css('width', '120%');
       // $('.video-container').css('height', newHeight+'px');
       $('.video-container').attr('height', newHeight);
        $('.video-container').css('width', '110%');
    //  $('.video-container').attr('height', '500');
    //  $('.video-container').css('width', '90%');
       
    });
    </script>
</body>
</html>