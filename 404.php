<!DOCTYPE html>
<html>
        <head>
                <title>Cortex Development | Home</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href = "css/bootstrap.min.css" rel = "stylesheet">
                <link href = "css/styles.css" rel = "stylesheet">
                <link href = "css/form.css" rel = "stylesheets">
                <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
        </head>
        <body>
               
                <div class = "navbar navbar-inverse navbar-static-top">
                        <div class = "container">
                               
                                <a href = "#" class = "navbar-brand">Cortex Development</a>
                               
                                <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                </button>
                               
                                <div class = "collapse navbar-collapse navHeaderCollapse">
                               
                                        <ul class = "nav navbar-nav navbar-right">
                                       
                                                <li>
                                                    <a href = "index.html">Home</a>
                                                </li>
                                            
                                                <li>
                                                    <a href = "#">About</a>
                                                </li>
                                                
                                                <li>
                                                    <a href = "#">Downloads</a>
                                                </li>
                                            
                                                <li class = "dropdown">
                                                       
                                                        <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Services <b class = "caret"></b></a>
                                                        <ul class = "dropdown-menu">
                                                                <li><a href = "#">Web Development</a></li>
                                                                <li><a href = "#">Software Development</a></li>
                                                                <li><a href = "#">Application Development</a></li>
                                                                <li><a href = "#">Free Code</a></li>
                                                        </ul>
                                               
                                                </li>
                                                
                                                <li>
                                                    <a href = "/staff.html" data-toggle="modal">Staff</a>
                                                </li>
                                            
                                                <li>
                                                    <a href = "#contact" data-toggle="modal">Contact</a>
                                                </li>
                                       
                                        </ul>
                               
                                </div>
                               
                        </div>
                </div>
               
               <div class = "container">
               <center><h1>Oops Somthing Went Wrong!</h1>
                       <p>Please old on while we fix that.</p>
               </center> 
               </div>
               
                       
       
               
                <div class = "navbar navbar-default navbar-fixed-bottom">
               
                        <div class = "container"><b>
                                <p class = "navbar-text pull-left">Site Built By <a href = "www.twitter.com/monstersl4m">Keegan Bourque</a> | <a href = "#">Home</a> | <a href = "about.html">About</a> | <a href = "staff.html">Staff</a> | <a href = "contact">Contact</a> </p>
                                <a href = "#apply" class = "navbar-btn btn-danger btn pull-right">Apply!</a>
                            </b></div>
               
                </div>
               
                <div class = "modal fade" id = "contact" role = "dialog">
                    <div class = "modal-dialog">
                        <div class = "modal-content">
                            <form class = "form-horizontal" action = "php/contact.php">
                                <div class = "modal-header">
                                    <h4>Contact Tech Site</h4>
                                </div>
                                <div class = "modal-body">
                                        <div class="alert alert-warning" role="alert">Contact PHP Is down use <a href = "http://goo.gl/forms/B2v9b6Y2Vu">Google Forms</a></div>
                               
                                    <div class = "form-group">
                                       
                                        <label for = "contact-name" class = "col-lg-2 control-label">Name:</label>
                                        <div class = "col-lg-10">
                                           
                                            <input type = "text" class = "form-control" id = "contact-name" placeholder = "Full Name">
                                           
                                        </div>
                                       
                                    </div>
                                   
                                    <div class = "form-group">
                                       
                                        <label for = "contact-email" class = "col-lg-2 control-label">Email:</label>
                                        <div class = "col-lg-10">
                                           
                                            <input type = "email" class = "form-control" id = "contact-email" placeholder = "you@example.com">
                                           
                                        </div>
                                       
                                    </div>
                                   
                                    <div class = "form-group">
                                       
                                        <label for = "contact-msg" class = "col-lg-2 control-label">Message:</label>
                                        <div class = "col-lg-10">
                                           
                                            <textarea class = "form-control" rows = "8"></textarea>
                                           
                                        </div>
                                       
                                    </div>
                               
                                </div>
                                <div class = "modal-footer">
                            <a class = "btn btn-default" data-dismiss = "modal">Close</a>    
                                    <button class = "btn btn-primary" type = "submit">Send</button>
                                    <p>Or contact using <a href = "http://goo.gl/forms/B2v9b6Y2Vu">Google Forms</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               
            
            
               
                <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script src = "js/bootstrap.js"></script>
                <script src = "http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"></script>
               
        </body>
</html>
