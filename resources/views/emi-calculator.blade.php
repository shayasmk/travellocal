@include('layouts.test-header')
<!--<script src="/Accrue/jquery.accrue.min.js"></script>-->


        <div class="header">UTILITY TOOLS</div>
        
            <div class='col-xs-12'>
                <div class='top-margin-gallery hcenter col-md-12'>
                    <div class='col-md-2 col-xs-1'>
                        
                    </div>
                   <a href="/utility/loan-calculator" class='yellow-color col-md-3 col-xs-12 utility-red-sub-menu-1 fifteen-font-size'>LOAN ELIGIBILITY CALCULATOR</a>
                    <a href="/utility/emi-calculator" class='blue-color col-md-3 col-xs-12 utility-yellow-sub-menu fifteen-font-size'>EMI C<label class='regular-font bottom-border-line'>ALCUL</label>ATOR</a>
                    <a href="/utility/buyers-guide" class='blue-color col-md-3 col-xs-12  utility-blue-sub-menu fifteen-font-size'>BUYER'S GUIDE</a>
                    <div class='col-md-1 col-xs-1'>
                        
                    </div>
                </div>
                <div class="calculator-loan col-xs-12" style='margin-top:20px'>
                    <div class='col-xs-1'>
                        
                    </div>
                    <div class='col-xs-10'>
                        <script>
                        var hasFlash = false;
                        try {
                          var fo = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
                          if (fo) {
                            hasFlash = true;
                          }
                        } catch (e) {
                          if (navigator.mimeTypes
                                && navigator.mimeTypes['application/x-shockwave-flash'] != undefined
                                && navigator.mimeTypes['application/x-shockwave-flash'].enabledPlugin) {
                            hasFlash = true;
                          }
                        }
                        
                        if(hasFlash == true)
                        {
                            document.write('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" style="min-height:800px;width:100%">');
                            document.write('<param name="movie" value="/swf/EMI_calc.swf" />');
                            document.write('<param name="quality" value="high" />');
                            document.write('<param name="wmode" value="transparent">');
                            document.write('<embed src="/swf/EMI_calc.swf" quality="high" type="application/x-shockwave-flash"  wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" style="min-height:800px;width:100%"/>');
                            document.write('</object>');
                   
                            }
                            else
                            {
                                var windowWidth = $(window).width(); //retrieve current window width
                                
//                                if(windowWidth>700)
//                                {
//                                    document.write('<iframe src="/calculator/emi-calculator.html" id="emi-calculator-iframe" style="width:100%"></iframe>');
//                                }
//                                else
//                                {
                                    document.write('<a href="/calculator/emi-calculator1.html" style="overflow:auto;width:100%"><img src="/calculator/emi.png" id="loan-calculator-iframe1" class="loan-calculator-iframe-link1" src="/calculator/emi-calculator1.html" scrolling="yes" style="width:100%;overflow-y:scroll;cursor:pointer"/></a>');
                             //   }
                            }
                        </script>
<!--                        <iframe src="/calculator/emi-calculator.html" id="emi-calculator-iframe" style="width:100%">
                        </iframe>-->
                        <!--<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" style="min-height:800px;width:100%">
                        <param name="movie" value="/swf/EMI_calc.swf" />
                        <param name="quality" value="high" />
                        <param name="wmode" value="transparent">
                        <embed src="/swf/EMI_calc.swf" quality="high" type="application/x-shockwave-flash"  wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" style="min-height:800px;width:100%"/>
                        </object> -->
<!--                        <iframe frameBorder="0" class="col-xs-12" src="http://www.hdfc.com/sites/all/themes/hdfc/images/calculator/EMI_calc.swf" style="min-height:800px">
                        </iframe>-->
                        <div style='color:white;text-align:center'>*Approximate calculation</div>
                    </div>
                    <div class='col-xs-1'>
                        
                    </div>
                </div>
                
           
        </div>
        
        <script>
    $(document).ready(function(){
       $('body').addClass('utility-main-container'); 
    });
    </script>
        <script>
            
            $(document).ready(function(){
                var iframe_width = ($('#emi-calculator-iframe').width());
                iframe_height = (iframe_width * 1000)/975;
                $('#emi-calculator-iframe').attr('style','width:100%;height:'+iframe_height+'px');
            $(".calculator-loan").accrue();
        });

            </script>
   @include('layouts.test-footer')