
function checnum(as)
{
    var dd = as.value;
    if(isNaN(dd))
    {
    dd = dd.substring(0,(dd.length-1));
    as.value = dd;
    }
}

function loan() {
    var a = document.first.aa.value;
    var b = document.first.bb.value;
    var c = document.first.cc.value;
    var n = c * 12;
    var r = b/(12*100);
    var p = (a * r *Math.pow((1+r),n))/(Math.pow((1+r),n)-1);
    var prin = Math.round(p*100)/100;
    document.first.r1.value = prin;
    var mon = Math.round(((n * prin) - a)*100)/100;
    document.first.r2.value = mon;
    var tot = Math.round((mon/n)*100)/100;
    document.first.r3.value = tot;
        for(var i=0;i<n;i++)
        {
        var z = a * r * 1;
        var q = Math.round(z*100)/100;
        var t = p - z;
        var w = Math.round(t*100)/100;
        var e = a-t;
        var l = Math.round(e*100)/100;
        a=e;
        }
    } 

$(document).on('click','.delete-image',function(){
        var tr = $(this).parent('div').first();
        $(tr).remove();
      });

$(document).ready(function(){
    $('#enquiry-now-submit-1').click(function(){
        var csrf = $('#enquiry-form').find('[name="_token"]').val();
        var name1 = $('#name1').val();
        var email1 = $('#email1').val();
        var mobile1 = $('#mobile1').val();
        var message1 = $('#message1').val();
        $('.error_space_enquiry').html('Sending Mail....');
        $.post("/mail-enquiry",{"_token":csrf, "name":name1, "email":email1, "mobile":mobile1, "message":message1},function(data, status){
           $('.error_space_enquiry').html(data.message);
       });
    });
    
    $('#enquiry-now-submit-2').click(function(){
        var csrf = $('#enquiry-form').find('[name="_token"]').val();
        var name1 = $('#name2').val();
        var email1 = $('#email2').val();
        var mobile1 = $('#mobile2').val();
        var message1 = $('#message2').val();
        $('.error_space_enquiry').html('Sending Mail....');
        $.post("/mail-enquiry",{"_token":csrf, "name":name1, "email":email1, "mobile":mobile1, "message":message1},function(data, status){
           $('.error_space_enquiry').html(data.message);
       });
    });
    
    
    $("#mobile-page-bread").click(function(){
        $('#nav_list').slideToggle();
                
    }); 
    
    $('.enquire-now-div1').click(function(){
       // $('#toggle1').show("slide", { direction: "left" }, 1000);
       $('#toggle1').slideDown();
        $('.enquire-now-div1').addClass('enquire-now-div-click');
        
         // $("#toggle").toggle("slide");
      });
      $('#toggle-close-id1').click(function(){
        //  $('#toggle').hide("slide", { direction: "right" }, 1000);
        $('#toggle1').slideUp();
          $('.enquire-now-div1').removeClass('enquire-now-div-click');
      });
    
    $('.enquire-now-div').click(function(){
        $('#toggle').show("slide", { direction: "right" }, 1000);
        $('.enquire-now-div').addClass('enquire-now-div-click');
        
         // $("#toggle").toggle("slide");
      });
      
      $('#toggle-close-id').click(function(){
          $('#toggle').hide("slide", { direction: "right" }, 1000);
          $('.enquire-now-div').removeClass('enquire-now-div-click');
      });
    
        var windowHeight = $(window).height(); 
        var currentHeight = (windowHeight/2) - 80;
        
   //   var currentEnquireBoxHeight = (windowHeight/2) - 100;
        $('.enquire-now-div').attr('style','margin-top:'+currentHeight+'px');
        $('#toggle').attr('style','margin-top:'+currentHeight+'px');
    $("#add-more-button").click(function(){
        $("#floor-plan-container").append("<div class='hundred-percent top-margin pull-left' id='image-container'><input type='file' name='floor[]' class='pull-left' style='margin-left:20%'/><select name='floor_title[]' class='pull-left' style='margin-right:15px'><option value='Typical'>Typical</option><option value='Individual'>Individual</option><option value='Location plan'>Location plan</option></select><button type='button'  class='pull-left delete-image btn btn-xs btn-danger'><i class='glyphicon glyphicon-remove-circle'></i></button></div>");
    });
    
    $('#add-more-button-status').click(function(){
        $("#status-image-container").append("<div class='hundred-percent top-margin pull-left' id='image-container'><input type='file' name='status[]' class='pull-left' style='margin-left:20%'/><input type='text' name='status_title[]' class='pull-left' style='margin-right:15px'/><button type='button'  class='pull-left delete-image btn btn-xs btn-danger'><i class='glyphicon glyphicon-remove-circle'></i></button></div>")
    });
    
   var windowHeight = $(window).height();
   var windowWidth = $(window).width();

   var marginLength = (windowHeight/2)-110;
   
   //$('.video-frame').css('height',windowHeight);
   // $('.video-frame').css('width',windowWidth);
   if(windowHeight > 800)
    {
        $('.logo-container').css('margin-top', marginLength);
    }
    else
    {
        $('.logo-container').css('margin-top', marginLength);
        var newMarginLength = marginLength - 50;
        
    }
    $('.menu-image').click(function() {
        var hiddenPointer = $('#hidden-pointer').val();
        
        
        if(windowWidth > 700)
        {
            if(hiddenPointer == 0)
            {
                $('.cd').animate({width:'19%'}, 500);
                $('.ef').animate({width:'80%'}, 500);
                $('.logo-image').animate({left:'20%'}, 500);
                $('.logo-image').css('padding','10px');
                $('#logo-container-a').css('width','100%');
                if(windowHeight <= 800)
                {
                  //  $('.logo-container').animate({top: newMarginLength},500);
                    $('.logo-container').css('margin-top', newMarginLength);
                }
               
                $('#hidden-pointer').val('1');
                $('#nav_list').show();
            }
            else
            {
                $('.cd').animate({width:'9%'}, 500);
                $('.ef').animate({width:'90%'}, 500);
                $('.logo-image').animate({left:'0%'}, 500);
                $('.logo-image').css('padding','0px');
              //  $('#logo-container-a').animate({width:'80px'},500);
                
                if(windowHeight <= 800)
                {
                    $('.logo-container').css('margin-top', marginLength);
                }
                //$('#logo-container-a').css('width','80px');
                $('#hidden-pointer').val('0');
                $('#nav_list').hide();
            }
        }
        else
        {
//            if(hiddenPointer == 0)
//            {
//                $('.cd').css('z-index','100000');
//                $('.cd').animate({width:'100%'}, 500);
//                $('.ef').animate({width:'0%'}, 500);
//               // $('.logo-image').animate({left:'15%'}, 500);
//                $('#hidden-pointer').val('1');
//                $('#nav_list').show();
//                
//            }
//            else
//            {
//                $('.cd').attr('z-index','0');
//                $('.cd').animate({width:'9%'}, 500);
//                $('.ef').animate({width:'90%'}, 500);
//               // $('.logo-image').animate({left:'0%'}, 500);
//                $('#hidden-pointer').val('0');
//                $('#nav_list').hide();
//            }
        }
        
        
    });
    
    

   $('#each-album-add-more').click(function()
   {
     //  $('#each-file-box').append('<div class="hundred-percent top-margin each-file-add-class pull-left" ><input type="file" class="admin-album-file" /><button type="button"  class="pull-left delete-image btn btn-xs btn-danger delete-each-file"><i class="glyphicon glyphicon-remove-circle"></i></button></div>');
   });
   
   $('.delete-each-file').click(function(){
      
      // var tr = $(this).parents('.each-file-add-class');
      // $(tr).delete();
   });
   $(document).on('click','.floor-plan-each-img', function(){
      
       $('.floor-plans-desc').html('Loading....');
       var id = $(this).attr('data-id');
       var csrf = $('[name="_token"]').val();
       $.post("/get-floor-plan-images",{"_token":csrf, "id":id},function(data, status){
            $('.floor-plans-desc').html('');
           $(data.floor).each(function(key,value){
               $('.floor-plans-desc').append('<p class="col-xs-12 col-sm-4"><a href="/uploads/album-floor-plans/'+value.image+'" class="group5 floor-plan-each-img1  col-xs-12"  style="padding:0px;height:135px" ><img class="col-xs-12" src="/uploads/album-floor-plans/'+value.image+'" style="max-width:145px;max-height:125px;padding:0px" /></a></p>');
              //  makeColourBox();
           });
           makeColourBox();
       });
   });
   
   $(document).on('click', '.status-plan-each-img',function(){
       $('.project-status-desc').html('Loading....');
       var id = $(this).attr('data-id');
       var csrf = $('[name="_token"]').val();
       $.post("/get-project-status-images",{"_token":csrf, "id":id},function(data, status){
           $('.project-status-desc').html('');
           $(data.status).each(function(key,value){
               $('.project-status-desc').append('<p class="col-xs-12 col-sm-4"><a href="/uploads/album-status-images/'+value.image+'" class="group4 floor-plan-each-img  col-xs-12"  style="padding:0px;height:135px" ><img class="col-xs-12" src="/uploads/album-status-images/'+value.image+'" style="max-width:145px;max-height:125px;padding:0px" /></a></p>');
              //  makeColourBox();
           });
           makeColourBox();
       });
   });
   
   $('.top-margin-gallery-image').click(function(){
       
        var id = $(this).attr('data-id');
        var project_status = $(this).attr('data-project_status');
        // $('.project-status-desc').html('<div class="col-xs-12 col-sm-4">'+project_status+'</div>');
     
       $('.floor-plans-desc').html('');
       $('.project-status-desc').html('');
       var csrf = $('[name="_token"]').val();
       
       $.post("/get-floor-plans",{"_token":csrf, "id":id},function(data, status){
           $(data.floor).each(function(key,value){
               
               $('.floor-plans-desc').append('<p class="col-xs-12 col-sm-4"><a class=" floor-plan-each-img  col-xs-12" data-href="/floor-plan/'+value.id+'" data-id="'+value.id+'" style="padding:0px;height:135px" target="_blank"><img class="col-xs-12" src="/uploads/project-floor-plan/'+value.image+'" style="max-width:145px;max-height:125px;padding:0px" /></a><br/><label style="width:100%;text-align:center">'+value.image_title+'</label></p>');
           });
           $(data.status).each(function(key,value){
               
               $('.project-status-desc').append('<p class="col-xs-12 col-sm-4"><a class=" status-plan-each-img  col-xs-12" data-href="/project-status/'+value.id+'" data-id="'+value.id+'" style="padding:0px;height:135px" target="_blank"><img class="col-xs-12" src="/uploads/project-status/'+value.image+'" style="max-width:145px;max-height:125px;padding:0px"/></a><br/><label style="width:100%;text-align:center">'+value.image_title+'</label></p>');
           });
        //   makeColourBox();
       },'json');
       
       $('.top-margin-gallery2').hide();
       var overview = $(this).attr('data-overview');
       
       var amenities = $(this).attr('data-amenities');
       var latitude = $(this).attr('data-latitude');
       var longitude = $(this).attr('data-longitude');
       var location_info = $(this).attr('data-location_info');

       var image_location = $(this).attr('data-image_location');
       var three_sixty_folder = $(this).attr('data-three_sixty_folder');
       var address = $(this).attr('data-address');
       $('.projects-360-link').attr('href', '/tour/'+three_sixty_folder+'/flash/Oxoniya_Oxoniya 360.html');
       $('.overview-desc').html(overview);
       
       
       $('.amenities-desc').html("<ul><li>"+amenities+"</ul>");
       $('.location-desc').html('<div class="map-holder col-md-6"><div id="mapPlaceholder" class="pull-right"></div></div><div class="col-md-5">'+address+'</div>');
       showCurrentLocation(latitude, longitude);
        if(image_location != '')
        {
            $('.menu-menu-image').attr('src', '/uploads/projects/'+image_location);
        }
        else
        {
            $('.menu-menu-image').attr('src', '/img/No_image.png');
        }
        
           $('.projects-sub-container').show();
   });
   $('.projects-back-link').click(function(){
       $('.projects-sub-container').hide();
       $('.top-margin-gallery2').show();
       
   });
   $('.menu-overview').click(function(){
       $('.projects-sub-description').hide();
       $('.overview-desc').show();
       $('.menu-active').removeClass('menu-active');
       $('.menu-overview').addClass('menu-active');
   });
   $('.menu-project-status').click(function(){
       $('.projects-sub-description').hide();
       $('.project-status-desc').show();
       $('.menu-active').removeClass('menu-active');
       $('.menu-project-status').addClass('menu-active');
   });
   $('.menu-floor-plans').click(function(){
       $('.projects-sub-description').hide();
       $('.floor-plans-desc').show();
       $('.menu-active').removeClass('menu-active');
       $('.menu-floor-plans').addClass('menu-active');
   });
   $('.menu-amenities').click(function(){
       $('.projects-sub-description').hide();
       $('.amenities-desc').show();
       $('.menu-active').removeClass('menu-active');
       $('.menu-amenities').addClass('menu-active');
   });
   $('.menu-location').click(function(){
       $('.projects-sub-description').hide();
       $('.location-desc').show();
       $('.menu-active').removeClass('menu-active');
       $('.menu-location').addClass('menu-active');
   });
});

$(document).on('click', '.delete-each-file', function(){
          var tr = $(this).parent('.each-file-add-class');
          $(tr).remove();
      });
      
      
      
      
      function showCurrentLocation(latitude, longitude)
      {
          var coords = new google.maps.LatLng(latitude, longitude);

                var mapOptions = {
                    zoom: 14,
                    center: coords,
                    mapTypeControl: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                //create the map, and place it in the HTML map div
                map = new google.maps.Map(
                document.getElementById("mapPlaceholder"), mapOptions
                );

                //place the initial marker
                var marker = new google.maps.Marker({
                position: coords,
                map: map,
                title: "Oxoniya Builders and Devlopers!"
                });
      }
      
      
      $( document ).ready(function() {
            currentDate = new Date();
            currentSeconds = currentDate.getSeconds();
            currentMinutes = currentSeconds + ( currentDate.getMinutes() * 60 );
            currentAnalogHours = ( currentDate.getHours() > 11 ) ? currentDate.getHours() - 12 : currentDate.getHours();
            currentHours = currentMinutes + ( currentAnalogHours * 3600 );
            $( '.clock-second-hand' ).css( 'animation-delay', '-' + currentSeconds + 's' );
            $( '.clock-minute-hand' ).css( 'animation-delay', '-' + currentMinutes + 's' );
            $( '.clock-hour-hand' ).css( 'animation-delay', '-' + currentHours + 's' );
    });
      
      
      