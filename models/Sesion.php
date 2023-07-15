
<?php 

class Sesion{

    public function startSesion($email, $pass){

        $objectConexion = new Conexion();
        $conexion = $objectConexion -> get_conexion();
        $querySelect = "SELECT * FROM users WHERE email = '$email'";
        $result = $conexion -> prepare($querySelect);
        $result -> execute();

        if($userData = $result -> fetch()) {

            if( $pass == $userData['pass']){

                session_start();
                $_SESSION['id'] = $userData['id'];
                $_SESSION['role'] = $userData['rol'];
                $_SESSION['authenticated'] = 'si';

                #ternary operator == if - else;
                if ($userData['rol'] == 'empleado')
                    echo '<script> alert("welcome employee");  location.href="../views/dashboardEmployee.php" </script>';

                else if($userData['rol'] == 'administrador')
                    echo '<script> alert("welcome admin"); location.href="../views/dashboardAdmin.php" </script>';

                else 
                    echo '<script> alert("You dont have role, please log-in again"); 
                        location.href="../views/login.php"</script>';  

            // por si la contraseña no esta bien
            } else {
                echo '<script> alert("You enter a incorrect pass, please log-in again"); 
                    location.href="../views/login.php"</script>'; 
            }
            
            // Por si el correo no esta bien
        } else {
            echo '<script> alert("You enter a incorrect email, please log-in again"); 
                location.href="../views/login.php"</script>'; 
        }
            
    }

    public function closeSesion(){

        session_start();
        session_destroy();
        echo '<script> alert("You close the session"); 
                location.href="../views/login.php"</script>';   

    }

}

