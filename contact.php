<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Timymc" />
<meta name="description" content="The Accentuate theme (HTML Version) has been designed as a clean and professional web template to be used in practically any industry. Change this to your description. " />
<meta name="keywords" content="HTML Theme, professional, business, add your keyword or phrases," />
<title>Contáctanos  -  Publiserver Perú, Merchandising, muebles, diseño de stand, muebles de oficina, exhibidores, paneles publicitarios, muebles de madera</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

<!-- jQuery framework and plugins -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<!-- Font replacement (Cufon) -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/GeosansLight_500.font.js"></script>
<script type="text/javascript" src="js/myriad_400.font.js"></script>
<!-- custom.js contains rules for many parts of the site (sliders, portfolio, etc.) -->
<script type="text/javascript" src="js/custom.js"></script>
<!--Superfish -->
<script type="text/javascript" src="js/hoverIntent.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<!-- Form Validation Scripts & CSS -->
<script src="js/SpryValidationTextField.js" type="text/javascript"></script>
<script src="js/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="js/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="js/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />

</head>
<body class="content">
<div class="container_12"> 
  <div class="logo-container"><a href="index.html" title="Accentuate by timymc"><img src="images/logo.png" width="319" height="81" alt="Accentuate Theme" /></a></div>
  
  <!--<div class="search">
    <div class="search-box">
      <form action="#">
        <!-- Search Feature --
        <input name="search" type="text"  onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Search this site':this.value;" value="Search this site" />
        <input name="submit" type="submit" id="search" value="" />
      </form>
    </div>
  </div>-->
  <div class="navigation-wrap">
    <div class="nav-right-corner"></div>
    <ul class="sf-menu">
      <li><a href="index.html">Home</a>
      </li>
      <li><a href="about.html">Nosotros</a>
      </li>
      <li><a href="services.html">Servicios</a></li>
      <li> <a href="portfolio.html">Portafolio</a>
      </li>
      <li class="current_page_item"> <a href="contact.php">Contactanos</a> </li>
    </ul>
    <div class="nav-left-corner"></div>
  </div>
  <!-- /navigation-wrap -->
  <div class="clear"></div>
  <!-- CONTENT -->
  <div class="grid_12 mar-top"> &nbsp;</div>
  <!-- end .grid_12 -->
  <div class="grid_4">
    <h1>Contacto</h1>
  </div>
  <!-- end .grid_6 -->
  <div class="grid_8">
    <h2 class="tag">Estamos dispuestos a ofrecerle una consulta gratuita, presupuesto sin compromiso y asesoramiento de expertos en nuestras soluciones.</h2>
    <br />
    <br />
  </div>
  <!-- end .grid_6 -->
  <div class="clear"></div>
  <div class="grid_12"> <img src="images/shadow-footer-bg.png" width="927" height="47" alt="Shadow" /></div>
  <!-- end .grid_12 -->
  <div class="grid_8">
    <h3>Nos encantaría saber de usted!
    <!-- CONTACT FORM PHP -->
    <?php
    if($_POST) {
      $string = $_POST['name'];
      $name = ucwords($string);

      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $company = $_POST['company'];
      $message = $_POST['message'];

      $date = date ("l, F jS, Y"); 
      $time = date ("h:i A"); 

      $ip = $_SERVER['REMOTE_ADDR'];

    	$mail_Subject = "Website Contact";//EMAIL SUBJECT

    	$Body = "Message from website contact form
      	
      Name:     $name
      Phone:  $phone
      Email:    $email

      Viesti:  $message

      Location: $ip
      ";

    	$mail_From = "From: $email";
    	$mail_Reply = $email;
      $mail_To = "jpubliserver@gmail.com, gerencia@publiserver.net";
      // $headers = "To: $name <noreply1@publiserverperu.com>"."\r\n";
      // $headers .= "From: Publiserver <noreply@publiserverperu.com>"."\r\n";
      // $headers .= "Cc: oscar_lg14@hotmail.com"."\r\n";

    	$mail_Body = $Body;

    	$rpta = mail($mail_To, $mail_Subject, $mail_Body, $mail_From);
    ?>
    </h3>
    <div>
      <p class="success">Thank you, your message has been successfully sent</p>
      <br />
    </div>
    <?php } else { ?>
    <br />
    <br />
    <br />
    <form class="cmxform" id="CommentForm" name="CommentForm" method="post" action="#">
      <fieldset>
        <legend>Contact Form</legend>
        <h3>Formulario</h3>
        <div class="grid_3">
          <div><span id="namefield">
            <input name="name" type="text"  class="textInput" value=""/>
            <span class="textfieldRequiredMsg">Please enter your name.</span></span></div>
          <div><span id="emailfield">
            <input name="email" type="text"  class="textInput" value=""/>
            <span class="textfieldRequiredMsg">Please enter your email.</span><span class="textfieldInvalidFormatMsg">Oops! Check your email!</span></span></div>
          <div><span id="phonefield">
            <input name="phone" type="text"  class="textInput" value=""/>
            <span class="textfieldRequiredMsg">Please enter your name.</span><span class="textfieldInvalidFormatMsg">Oops! Numbers only!</span></span></div>
        </div>
        <!-- end .grid_3 -->
        <div class="grid_4">
          <div><span id="messagearea">
            <textarea name="message" cols="4" rows="10" class="required"></textarea>
            <span class="textareaRequiredMsg">Please write a message.</span></span></div>
          <input type="submit" class="submit" value=" Enviar"/>
        </div>
        <!-- end .grid_4 -->
      </fieldset>
    </form>
  <?php } ?>
    <!--This is a part of the CONTACT FORM PHP, if removed the form will not work--> 
  </div>
  <!-- end .grid_8 -->
  <div class="grid_4">
    <h3>informacion de contacto</h3>
    <img src="images/premises.png" alt="Our Location" width="300" height="126" class="service-img" />
    <div class="grid_1 alpha">
      <p class="grey"> Dirección:<br />
        <br />
        <br />
        <br />
        Email:<br />
        <br />
        <br />
        Fono:<br />
        Rpc:<br />
        Nextel:<br />
      </p>
    </div>
    <!-- end .grid_1 -->
    <div class="grid_3 omega">
      <p> CHAVIN DE HUANTAR 3ERA. ETAPA MZ.B  LT.17 PNTE.PIEDRA <br />
        <br />
        info@publiserverperu.com<br />
        <br />
        <br />
        549 2034
        <br />
        987562843
        <br />
        (94) 645*7265</p>
    </div>
    <!-- end .grid_2 -->
    <div class="social"></div>
  </div>
  <!-- end .grid_4 -->
  <div class="clear"></div>
  <div class="grid_12 blank"> &nbsp;</div>
  <!-- end .grid_12 -->
  <div class="clear"></div>
</div>
<!-- /container_12 -->
<div class="clear"></div>
<!-- FOOTER -->
<div class="footer_bg">
  <div class="container_12">
    <div class="grid_6"> <img src="images/shadow-divider-2.png" width="19" height="207" alt="Divider" class="vr-divider"/>
      <div class="news">
        <h4>buscanos en:</h4>
        <div class="item">
          <a href="https://www.facebook.com/publiserverperu?ref=hl">
            <img src="images/news/facebook.png" width="80" height="67" alt="Big Announcement" />
          </a>
          <h5>Facebook</h5>
          <p>Interactúa y encuentra todo lo ultimo referentes a nuestros trabajos y más...</p>
        </div>
        <div class="item"> <img src="images/news/youtube.png" width="80" height="67" alt="Big Announcement" />
          <h5>Youtube</h5>
          <p>Mira las presentaciones de nuestra empresa y los trabajos realizados.</p>
        </div>
      </div>
      <!-- /news --> 
    </div>
    <!-- end .grid_6 -->
    <div class="grid_3"> <img src="images/shadow-divider-2.png" width="19" height="207" alt="Divider" class="vr-divider"/>
      <h4>mapa</h4>
      <ul class="partners">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">Nosotros</a></li>
        <li><a href="services.html">Servicios</a></li>
        <li><a href="portafolio.html">Portafolio</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </div>
    <!-- end .grid_3 -->
    <div class="grid_3 omega">
      <h4>INFORMACION DE CONTACTO</h4>
      <ul class="contact-info">
        <li class="phone"><a href="#">549-2034</a></li>
        <li class="email"><a href="mailto:info@publiserverperu.com">info@publiserverperu.com</a></li>
        <li class="www"><a href="/">www.publiserverperu.com</a></li>
      </ul>
    </div>
    <!-- end .grid_3 -->
    <div class="clear"></div>
    <div class="copyright">
      <p>Diseñor y desarrollo creado por Dangi agencia creativa</p>
    </div>
    <!-- /copyright --> 
  </div>
  <!-- /container_12 --> 
</div>
<!-- /footer_bg --> 
<!-- FORM VALIDATION CODE --> 
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("namefield", "none", {hint:"Name"});
var sprytextfield2 = new Spry.Widget.ValidationTextField("emailfield", "email", {hint:"Email"});
var sprytextfield3 = new Spry.Widget.ValidationTextField("phonefield", "integer", {hint:"Phone"});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("messagearea", {hint:"Message"});
//-->
</script>
</body>
</html>