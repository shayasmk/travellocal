
<!DOCTYPE html>
<html>
    <head>
        <title>
            Login
        </title>
        <link href="/css/style.css" rel="stylesheet" type="text/css" />
        <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <script src="/bootstrap/js/bootstrap.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="grey-bg">
        <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 login-form-margin">
            <?php
            if($errors->any())
            {
                echo implode('', $errors->all('<div class="red-text">:message</div>'));
            }
            ?>
            <div class="panel panel-default ">
                 
                <div class="panel-heading"> <strong class="">Login</strong>

                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => '/admin/login', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                                   
                        <div class="form-group">
                            
                                <label for="email" class = "col-sm-3 control-label">Username</label>
                          
                           
                            <div class="col-sm-9">
                               
                                    <input type="text" name="data[email]" class = "form-control no-format " id = "inputUsername" placeholder = "email" required />
                               
                            </div>
                        </div>
                        <div class="form-group">
                           
                            <label for="password" class = "col-sm-3 control-label">Password</label>
                                
                           
                            <div class="col-sm-9">
                               <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="data[password]" required/>
                            </div>
                        </div>
<!--                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label class="">
                                        <input class="" type="checkbox">Remember me</label>
                                </div>
                            </div>
                        </div>-->
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <input type="submit" class="btn btn-success btn-sm" value="SIgn In" />
                                 
                                
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                       {!! Form::close() !!}
                </div>
                <div class="panel-footer" style="text-align:center">
                    Powered By<a href="http://www.papayamedia.in" target="_blank" style="padding-left:5px;padding-right:5px;color : black;text-decoration: underline">Papaya</a> & <a href="http://www.clusterindia.in" target="_blank" style="padding-left:5px;padding-right:5px;color : black;text-decoration: underline">Cluster India</a>
<!--                    Not Registered? <a href="#" class="">Register here</a>-->
                </div>
            </div>
        </div>
    </div>
</div>
        
        
        
    </body>
</html>