<!DOCTYPE html>
<html lang="en">
<head>
      <title>Thabathisa</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=8" /> 
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen"> 
	<script src="js/css3-mediaqueries.js"></script>  
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/NewsGoth_400.font.js" type="text/javascript"></script>
    <script src="js/NewsGoth_700.font.js" type="text/javascript"></script>
    <script src="js/NewsGoth_Lt_BT_italic_400.font.js" type="text/javascript"></script>
    <script src="js/Vegur_400.font.js" type="text/javascript"></script> 
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/Sendmassage.js" language="JavaScript" type="text/javascript"></script>
	<!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page5">
	<div class="extra">
    	<!--==============================header=================================-->
        <header>
        	<div class="row-top">
            	<div class="main">
                	<div class="wrapper">
                    	<h1><a href="index.php">Thabathisa</a></h1>
                        <form id="search-form" method="post" enctype="multipart/form-data">
                        <fieldset>	
                            <div class="search-field">
                                <input name="search" type="text" value="Search..." onBlur="if(this.value=='') this.value='Search...'" onFocus="if(this.value =='Search...' ) this.value=''" />
                                <a class="search-button" href="#" onClick="document.getElementById('search-form').submit()"></a>	
                            </div>						
                        </fieldset>
                    </form>
                    </div>
                </div>
            </div>
            <div class="menu-row">
            	<div class="menu-bg">
                    <div class="main">
                        <nav class="indent-left">
                            <ul class="menu wrapper">
                                <li><a href="index.php">Home page</a></li>
                                <li><a href="company.php">our Company</a></li>
                                <li><a href="services.php">our services</a></li>
                                <li><a href="projects.php">our projects</a></li>
                                <li class="active"><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row-bot">
            	<div class="center-shadow">
                </div>
            </div>
        </header>
        
        <!--==============================content================================-->
        <section id="content"><div class="ic"></div>
            <div class="content-bg">
                <div class="main">
                    <div class="zerogrid">
                        <div class="wrapper">
                        	<article class="col-2-3">
								<div class="wrap-col">
                            	<h3>Contact Form</h3>
                               <?php 
 
//if "email" variable is filled out, send email
  if (isset($_POST['email']))  {
  
  //Email information
      
  $admin_email = "website@thabathisa.co.za";
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $comment = $_POST['message'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  unset($email);
  unset($_POST['email']);
  echo "<div id='hidetext'>Thank you for contacting us  <a id='showForm'>Click here</a> to send send another email</div>";
  ?>
                            <script type="text/javascript">
                                            $(document).ready(function () {
                                                $('#hideForm').hide();
                                                $('#showForm').click(function () {
                                                    $('#hideForm').slideToggle('slow');
                                                    $('#hidetext').hide();
                                                });
                                            });
                             </script>
                               
 <?php
}

    ?>
                                <div id="hideForm">
                                    <div id="formInfo"></div>
      <form id="contact-form" method="post">
                                <fieldset>
                                    <label><input name="email" type="email" onmouseout="checkControl(this)" id="email" value="Email" onBlur="if(this.value=='') this.value='Email'" onFocus="if(this.value =='Email' ) this.value=''" /></label>
                                    <label><input name="subject" type="text" onmouseout="checkControl(this)" id="subject" value="Subject" onBlur="if(this.value=='') this.value='Subject'" onFocus="if(this.value =='Subject' ) this.value=''" /></label>
                                    <textarea name="message" id="message" onmouseout="checkControl(this)" onBlur="if(this.value=='') this.value='Message'" onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                                    <div class="buttons">
                                        <a onClick="document.getElementById('contact-form').reset()">Clear</a>
                                        <a onmousedown="checkForm(document.getElementById('email'),document.getElementById('subject'),document.getElementById('message'),document.getElementById('formInfo'))" onClick="Validate(document.getElementById('email'),document.getElementById('subject'),document.getElementById('message'),document.getElementById('contact-form'),document.getElementById('formInfo'))">Send</a>
                                    </div>											
                                </fieldset>           
                            </form>
                                </div>
								</div>
                            </article>    
                            <article class="col-1-3">
								<div class="wrap-col">
                            	<h3>Contact Info</h3>
                                <figure class="img-indent-bot img-border">
                                    <iframe width="298" height="179" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14330.763826639812!2d28.233523450000003!3d-26.10900504999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9514f3eda12c85%3A0x713bfd0eb0995145!2sKempton+Park+Cbd%2C+Kempton+Park!5e0!3m2!1sen!2sza!4v1434538867244"></iframe>
                                    
                                </figure>
                                <dl>
                                    <dt class="indent-bot">South Africa<br>Shop No5 Oak Avenue Kempton park, Johannesburg,1620.</dt>
                                    <dd><span>Telephone:</span>  011-394-0687</dd>
                                    <dd><span>Cell:</span> 071-007-3090 </dd>
                                    <dd><span>Fax:</span>  011-394-0687</dd>
                                    <dd><span>Email:</span><a href="#">info@thabathisa.co.za</a></dd>
                                </dl>
								</div>
                            </article>                        
                        </div>
                    </div>
                </div>
                <div class="block"></div>
            </div>
        </section>
    </div>
	
	<!--==============================footer=================================-->
    <footer>
        <div class="padding">
            <div class="main">
                <div class="zerogrid">
                    <div class="wrapper">
                        <article class="col-2-3">
							<div class="wrap-col">
                            <h4>Contact Form:</h4>
                          
                                
							</div>
                        </article>
                        <article class="col-1-3">
							<div class="wrap-col">
                        	<h4 class="indent-bot">Link to Us:</h4>
                            <ul class="list-services border-bot img-indent-bot">
                            	<li><a href="#">Facebook</a></li>
                                <li><a class="item-1" href="#">Twitter</a></li>
                                <li><a class="item-2" href="#">Picassa</a></li>
                                <li><a class="item-3" href="#">You Tube</a></li>
                            </ul>
                            <p class="p1">Copyright &copy; 2015 </p>
                            <p class="p1"><a class="link" target="_blank" href="http://www.murconholdings.com/" rel="nofollow">Web site Designed</a> by murcon IT Solutions</p>
							
                            <!-- {%FOOTER_LINK} -->
							</div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
