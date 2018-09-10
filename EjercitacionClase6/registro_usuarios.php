<?php
    $errorNombre = '';
    $errorEmail = '';
    $errorValidarPass = '';

    function redirect($url, $permanent = false) {
        header("Location:" . $url, true, $permanent? 301 : 302);
        exit;
    }


    if ($_POST) {
        
        //nombre
        $nombre = trim($_POST['name']);

        if (strlen($nombre) > 10) {
            $errorNombre = 'El nombre no puede superar los 10 caracteres';
        }

        //email
        $email = trim($_POST['email']);
        $input = filter_var($email, FILTER_VALIDATE_EMAIL);
        if ($input === false) {
            $errorEmail = 'El email ingresado no es válido';
        }

        if($errorNombre == NULL) {
            redirect("felicitacion.html");
        };

        //validar pass
        // if ($_POST['password'] != $_POST['password2']) {
        //     $errorValidarPass = 'Las contraseñas no coinciden';
        

    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuarios</title>
</head>
<body>
	    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre: </label><br/>
                     
                    <?php 
                        echo (isset($_POST['name'])) ? 
                        '<input type="text" name="name" id="name" value="' . $_POST["name"] . '" maxlength="50" /><br/>' : 
                        '<input type="text" name="name" id="name" value="" maxlength="50" /><br/>'
                    ?>
                   
                   	
                    <span id='register_name_errorloc' class='error'><?php echo ($errorNombre); ?></span>
                </div>
                 <div class='container'>
                    <label for='lastname' >Apellido </label><br/>
                    <?php 
                        echo (isset($_POST['lastname'])) ? 
                        '<input type="text" name="lastname" id="lastname" value="' . $_POST["lastname"] . '" maxlength="50" /><br/>' : 
                        '<input type="text" name="lastname" id="lastname" value="" maxlength="50" /><br/>'
                    ?>
                    <span id='register_name_errorloc' class='error'><?php echo ($errorEmail); ?></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    
                    <?php 
                        echo (isset($_POST['email'])) ? 
                        '<input type="text" name="email" id="email" value="' . $_POST["email"] . '" 
                            maxlength="50" /><br/>' : 
                        '<input type="text" name="email" id="email" value="" maxlength="50" /><br/>'
                    ?>

                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>

                    <label for='username'>Nombre de usuario*:</label><br/>

                    <?php 
                        echo (isset($_POST['username'])) ? 
                        '<input type="text" name="username" id="username" value="' . $_POST["username"] . '" 
                            maxlength="50" /><br/>' : 
                        '<input type="text" name="username" id="username" value="" maxlength="50" /><br/>'
                    ?>

                    <span id='register_username_errorloc' class='error'></span>

                </div>
                <div class='container'>
                    <label for='edad'>edad:</label><br/>
                    
                    <?php 
                        echo (isset($_POST['edad'])) ? 
                        '<input type="text" name="edad" id="edad" value="' . $_POST["edad"] . '" 
                            maxlength="50" /><br/>' : 
                        '<input type="text" name="edad" id="edad" value="" maxlength="50" /><br/>'
                    ?>
                    <span id='register_username_errorloc' class='error'></span>
                </div>

               
                <div class='container'>
                    <label for='password' >Contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
              
				 <div class='container'>
				 	<label for='lugar' >Donde nos conociste:</label><br/>
                    <input type="checkbox" name="wdymu[]" value="internet">Internet<br>
					<input type="checkbox" name="wdymu[]" value="tv"> TV.<br>
					<input type="checkbox" name="wdymu[]" value="friend"> Amigos<br>
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>


                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>


</body>
</html>