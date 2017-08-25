<?php

require 'Mail/PHPMailerAutoload.php';

$mail = new PHPMailer;


//$email="sdfasdfa@a.com,asdf@aasdf.com";
if( isset($_POST['email']) ){

	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {

		//var_dump(filter_var ( $email, FILTER_SANITIZE_EMAIL));

		$mail->isSMTP();                                      // Set mailer to use SMTP
		//$mail->SMTPDebug = 2;
		$mail->Host = 'ssl://smtp.gmail.com';  								// Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'geappsdesarrollo@gmail.com';                 // SMTP username
		$mail->Password = 'ceimox999';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to

		$mail->setFrom('geappsdesarrollo@gmail.com', 'Contacto Landing Page');
		$mail->addAddress('larruibo@gmail.com', 'Mario lega');     // Add a recipient mlega@gappstudio.com
		//$mail->addAddress('ellen@example.com');               // Name is optional
		$mail->addReplyTo('geappsdesarrollo@gmail.com', 'Information');
		// $mail->addCC('juanfranciscot@gmail.com');
		//$mail->addBCC('bcc@example.com');

		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		//http://www.google.com/accounts/DisplayUnlockCaptcha
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Nuevo correo desde el Landing Page de GNEUX';
		$mail->Body    = 'Se ha recibido el correo: '.filter_var ($_POST['email'],FILTER_SANITIZE_STRING).' para añadir a la base de datos de GNEUX<br>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		$send=$mail->send();
		if(!$send) {
      ?>
      <script>
        alert('Un error ha ocurrido, intenta nuevamente');
      </script>
      <?php
		} else {
      ?>
      <script>
        alert('El mensaje ha sido enviado correctamente');
      </script>
      <?php
		}


} else {

?>
<script>
	alert('El correo: <?php echo filter_var ($_POST['email'],FILTER_SANITIZE_STRING) ." no es un correo valido";?>')
</script>
<?php
}


}
?>
