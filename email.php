
 <?php
     if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

      // Set your email address where you want to receive emails. 
       $to = 'cbfxasecryp@gmail.com';
       $subject = 'Solicitud de contacto desde el sitio web';
       $headers = "From: ".$name." <".$email."> \r\n";
       $message = "Nombre: ".$name."\r\n Telefono: ".$phone."\r\n Correo: ".$email;
       $send_email = mail($to,$subject,$message,$headers);

       echo ($send_email) ? 'success' : 'error';

  }?>
