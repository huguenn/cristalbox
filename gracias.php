<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.9.13, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.13, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>MEDIYA Salud. El servicio de salud más conveniente de Argentina.</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css?v=mRrkag"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css?v=mRrkag" type="text/css">

  
  
  
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = strip_tags(trim($_POST["name"]));
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $message = strip_tags(trim($_POST["message"]));

  // Basic validation
  if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
    echo "Oops! There was a problem with your submission. Please complete the form and try again.";
    exit;
  }

  // Set recipient email address
  $to = "info@cristalbox.com.ar"; 

  // Set email subject
  $subject = "Nuevo mensaje";

  // Build the email content (plain text)
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n\n";
  $email_content .= "Message:\n$message\n";

  // Build email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $email_content, $headers)) {
    ?>

<section class="header1 businessm4_header1 cid-ui9Xrjddnx mbr-fullscreen" id="header1-c">

	

	

<div class="container align-left">
  <div class="row justify-content-center">
    <div class="media-container-column mbr-white col-md-10">
      <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1">Muchas gracias</h1>
      <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
        Hemos recibido tu consulta. Nos pondremos en contacto a la brevedad.</h3>
      <div class="mbr-section-btn align-center pt-3"><a class="btn btn-md btn-white display-4" href="https://www.cristalbox.com.ar/landing">VOLVER</a>
        <a class="btn btn-md btn-white-outline display-4" href="https://www.cristalbox.com.ar">MÁS INFO</a></div>
    </div>
  </div>
</div>

</section>


<?php

  } else {

?>

<section class="header1 businessm4_header1 cid-ui9Xrjddnx mbr-fullscreen" id="header1-c">

	

	

<div class="container align-left">
  <div class="row justify-content-center">
    <div class="media-container-column mbr-white col-md-10">
      <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1">Muchas gracias</h1>
      <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
        Ha ocurrido un error al enviar el mensaje.</h3>
      <div class="mbr-section-btn align-center pt-3"><a class="btn btn-md btn-white display-4" href="https://www.cristalbox.com.ar/landing">VOLVER</a>
        <a class="btn btn-md btn-white-outline display-4" href="https://www.cristalbox.com.ar">MÁS INFO</a></div>
    </div>
  </div>
</div>

</section>

<?php
  }
}
?>
  



<script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  
</body>
</html>