<?php
//paso #1: Establecer el servidor y elmetodo de envio de datos a traves de una funcion de PHP.
//$edad = varible
//$_server = funcion
if($_SERVER ['REQUEST_METHOD']==='POST'){
    //PASO#2: Declaramos las varibles.
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $celular=$_POST['celular'];
    $mensaje=$_POST['mensaje'];
    //PASO#3: Establecemos el asunto del correo.
    $asunto='CONTACTO CLIENTES SITIO WEB ';
    //PASO#4: Establecemos el destinatario.
    $destinatario= '1514760@senati.pe';
    //PASO#5: Diseñar el cuerpo del mensaje.
    $cuerpo = "Nombre: " . $nombre."\n";
    $cuerpo = "Correo: ".$email."\n";
    $cuerpo = "Celular: ".$celular."\n";
    $cuerpo = "Mensaje: ".$mensaje."\n";
    //PASO#6: Enviar el correo pasando todos los datos.
    if(mail($destinatario, $asunto, $cuerpo)){
        echo"El mensaje fue satifactoriamente enviado";
    }else{
        echo"El mensaje no fue enviado";
    }
}
?>;