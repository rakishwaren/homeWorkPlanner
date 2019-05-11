
<html>
    
   <?php 
       require ('regis.php');
     
   ?>
    
    <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="../HomePlanner/Boostrap/bootstrap-4.3.1-dist/css/bootstrap.css">
         <link rel="stylesheet" href="../HomePlanner/Boostrap/bootstrap-4.3.1-dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="../HomePlanner/style.css">
         <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    
         <script src="jquery.min.js"></script>
         <script src="Boostrap/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
         <script src="Boostrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
         <script src="loginPage.js"></script>
         
   
             
         
        
        <title></title>
    </head>
    
    <body>
        
        
       
        <div class="wrapper">
            
             <div id="hero">
                <div class="overlay"></div>
                
                    
                <div id="login">
                     <h3 class="text-center text-white pt-5">Begoo Planner</h3>
                     <div class="container">
                         <div id="login-row" class="row justify-content-center align-items-center">
                            <div id="login-column" class="col-md-6">
                                 <div id="login-box" class="col-md-12">
                                     <form id="login-form" class="form" action="login.php" method="post">
                                        <h3 class="text-center text-info">Login</h3>
                                        <div class="form-group">
                                             <label for="username" class="text-info">Email:</label><br>
                                             <input type="text" name="l_email" id="l_email" class="form-control" placeholder="Please insert your email address" required>
                                         </div>
                                         <div class="form-group">
                                             <label for="password" class="text-info">Password:</label><br>
                                             <input type="password" name="l_password" id="l_password" class="form-control" placeholder="Please insert your password" required>
                                         </div>
                                         <div class="form-group">
                                             <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                             <input type="submit" name="login" class="btn btn-info btn-md" value="login">
                                         </div>
                                         <div id="register-link" class="text-right">
                                           <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal"> New Register</button>
                                        </div>
                                        
                                        
                                    </form>
                                     
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            <div>
            
         </div>
                
                
                
        

  
        
         
    </body>
    
     <!-- The Modal -->
    <div class="modal fade" id="myModal">
         <div class="modal-dialog">
             <form name="form" action="" method="post">
                 <div class="modal-content">
                 
                    <!-- Modal Header -->
                     <div class="modal-header">
                         <h4 class="modal-title">Registration</h4>
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>

                     <!-- Modal body -->
                     <div class="modal-body">
                         <div class="control-group">
                             <!-- Username -->
                             <label class="control-label"  for="username">Username:</label>
                             <div class="controls">
                                 <input type="text" id="username" name="username" placeholder="" class="input-xlarge" required>
                                 <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                             </div>
                         </div>

                         <div class="control-group">
                         <!-- E-mail -->
                            <label class="control-label" for="email">E-mail:</label>
                            <div class="controls">
                                <input type="text" id="email" name="email" placeholder="" class="input-xlarge" onBlur="checkAvailability()" required>
                                <span id="user-availability-status"></span>
                                <p class="help-block">Please provide your E-mail</p>
                                <p><img src="LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
                                
                            </div>
                         </div>

                         <div class="control-group">
                         <!-- Password-->
                             <label class="control-label" for="password">Password:</label>
                             <div class="controls">
                                 <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required>
                                 <p class="help-block">Password should be at least 4 characters</p>
                              </div>
                         </div>

                         <div class="control-group">
                          <!-- Password -->
                            <label class="control-label"  for="password_confirm">Password (Confirm):</label>
                            <div class="controls">
                                <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge" required>
                                <input type="checkbox" onclick="mypassword()">Show Password
                                <p class="help-block">Please confirm password</p>
                            </div>
                         </div>
                     </div>

                     <!-- Modal footer -->
                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary" name="registered" value="registered" onclick="return Validate()">Submit</button>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     </div>
                </div>
             </form>
         </div>
    </div>
     
    


     
</html>


