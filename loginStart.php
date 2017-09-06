<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Panel Conservación</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css">

    </head>
    <body>
        <div id="loginbox">            
            <form id="login" class="form-vertical" action="login.php" method="post" >
				 <div class="control-group normal_text"> <h3><img src="img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" id="username" name="username" placeholder="Usuario" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input id="password" name="password" type="password" placeholder="Contraseña" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    
                   <div class="pull-right">
                    <input  span class="btn btn-success" type="submit" name="login" value="Acceder" /> 
                   </div> 
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Ingresa tu correo electronico y recibiras las instrucciones para recuperar tu contraseña</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="Correo Electronico" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Regresar</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Recuperar</a></span>
                </div>
            </form>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>
