  <?php
    $user = $_POST["user"];
    $pass = $_POST["password"];
        if (strlen($pass)< 5){
          echo "La password debe tener al menos 5 caracteres";
        }
        else if( preg_match('/\s/',$pass) ){
          echo "La password no debe tener espacios";
        }
		else if( preg_match('/DH/',$pass) ){
          echo "La password contiene DH";
        }
     ?>