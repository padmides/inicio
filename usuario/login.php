<!DOCTYPE html>
<html lang="en">
<head>
<title>DesusWeb - Usuarios</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-login.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
<link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
<link rel="stylesheet" href="css/jquery.gritter.css" />
</head>
    <body style="margin-top: 4%;">
        <div id="loginbox">            
            <form id="loginform" class="form-vertical">
				 <div class="control-group normal_text"> <h3><img style="max-width: 50%;" src="../assets/img/logo.png" alt="Logo" /></h3></div>
                <div class="alert alert-danger vOculto" role="alert" id="error"></div>
                <div class="alert alert-success vOculto" role="alert" id="correcto"></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input id="usuario" type="text" placeholder="Usuario" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input id="contrasenia" type="password" placeholder="Contraseña" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">¿Te olvidaste la contraseña?</a></span>
                    <span class="pull-right"><a type="submit" onclick="login();" class="btn btn-success" />Entrar</a></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
                <div class="alert alert-danger vOculto" role="alert" id="error_recuperar"></div>
                <div class="alert alert-success vOculto" role="alert" id="correcto_recuperar"></div>
				<p class="normal_text">Ingrese su dirección de correo electrónico a continuación y le enviaremos instrucciones sobre cómo recuperar una contraseña.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input id="email" type="text" placeholder="Ingrese Email" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Volver al login</a></span>
                    <span class="pull-right"><a class="btn btn-info" onclick="recuperar();" />Enviar</a></span>
                </div>
            </form>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>
<script>
    
    function login() {
            $("#error").removeClass("vVisible").addClass("vOculto");
            $("#correcto").removeClass("vVisible").addClass("vOculto");
            var usuario = document.getElementById('usuario').value;
            var contrasenia = document.getElementById('contrasenia').value;

            var formData = new FormData();
            formData.append('usuario', usuario);
            formData.append('contrasenia', contrasenia);

            $.ajax({
                    url: "llogin.php", // Url to which the request is send
                    type: "POST", // Type of request to be send, called as method
                    data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    contentType: false, // The content type used when sending data to the server.
                    cache: false, // To unable request pages to be cached
                    processData: false, // To send DOMDocument or non processed data file it is set to false
                    dataType: "json"
                })
                .done(function(respuesta) {
                    if (respuesta.estado) {
                        $("#correcto").removeClass("vOculto").addClass("vVisible");
                        document.getElementById("correcto").innerHTML = respuesta.mensje;
                    } else {
                        $("#error").removeClass("vOculto").addClass("vVisible");
                        document.getElementById("error").innerHTML = respuesta.mensje;
                    }
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    console.log("Algo ha fallado: " + textStatus);
                });
    }

    function recuperar() {
        var email = document.getElementById('email').value;

        var formData = new FormData();
            formData.append('email', email);

        $.ajax({
            url: "_recuperar.php", 
            type: "POST", 
            data: formData, 
            contentType: false, 
            cache: false, 
             processData: false, 
            dataType: "json"
        })
        .done(function(respuesta) {
            if (respuesta.estado) {
                $("#correcto_recuperar").removeClass("vOculto").addClass("vVisible");
                document.getElementById("correcto_recuperar").innerHTML = respuesta.mensje;
            } else {
                $("#error_recuperar").removeClass("vOculto").addClass("vVisible");
                document.getElementById("error_recuperar").innerHTML = respuesta.mensje;
            }
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
                    console.log("Algo ha fallado: " + textStatus);
        });
    }
    
</script>

                            

