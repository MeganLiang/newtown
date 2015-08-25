<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>newtown-contact us</title>
    <meta name="keywords" content="contact, form, more information, submit">
    <meta name="description" content="A contact page where a user can submit a message/>
    <meta name="author" content="Megan Liang" />
    <meta name="copyright" content="Copyright 2014 Megan Liang" />
    <meta name="robots"content= "noindex, nofollow" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="all" >
    <!-- the following script operates for older browsers -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5-els.js"></script>
    <![endif]-->
  </head>
  <body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

    <div id="container">
      <header>
        <hgroup>
          <h1>Newtown</h1>
          <h2>Contact Us</h2>
        </hgroup>
      </header>
      
			<nav>
				<ul>
					<li><a href="content.php">Home</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<div class="date">
					<script type="text/javascript"><!--
						var date = new Date();
						var d  = date.getDate();
						var day = (d < 10) ? '0' + d : d;
						var m = date.getMonth() + 1;
						var month = (m < 10) ? '0' + m : m;
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(day + "/" + month + "/" + year);
				
					</script>
				</div>		
			</nav>	  				
			<div id="contact-area">
				<article>
					<form name="contact" method="post" action="contact.php" id="contactus" onsubmit="return validate()">
						<label for="name">Name:<div id="requirements">*</div></label>
						<input type="text" id="name" name="name" />

						<label for="email">Email: <div id="requirements">*</div></label>
						<input type="text" id="email" name="email" />

						<label for="message">Message: <div id="requirements">*</div></label>
						<textarea id="message" name="message" rows="20" cols="20" placeholder="If you have any comments, questions or feedback, please don't hesitate to ask"></textarea>

						<input type="submit" name="send" value="Submit" class="submit-button"/>
					</form>  
          <?php

          // Test if the form has been submitted
          if(isset($_POST['send'])) {
            // Prepare the email
            $to = 'meijunliang.student@wegc.school.nz';
            $subject = 'Message sent from website';
            $message = $_POST['message'];
            // Send it
            $sent = mail($to, $subject, $message);
            if($sent) {
              echo 'Your message has been sent';
            } 
            else {
              echo 'Sorry, your message could not send.';
            }
          }
          ?>          
				</article>
				<script language="javascript">

					//validates whether the fields are empty and if the email is valid
					function validate() {
						var x=document.forms["contact"]["email"].value;
						var atpos=x.indexOf("@");
						var dotpos=x.lastIndexOf(".");
						if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
							{
							alert("Not a valid e-mail address");
							return false;
							
							}
						if (document.getElementById("name").value == "" || document.getElementById("email").value == "" || document.getElementById("message").value == "") {
							alert("Enter your details into all feilds to ensure that I can get back to you properly");
							return false;
						} else {
							return true;
						}				
					}			  
				</script>	
			</div>
			<footer>
					<div class="fb-like" data-href="https://www.facebook.com/gettoknownewtown" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
					<br>
					<a href="https://twitter.com/share" class="twitter-share-button" data-via="megan" data-related="megan" data-hashtags="newtownisawesome">Tweet</a>
					
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				 <div id="copyright"> &copy Megan Liang</div>
			</footer>
		</div>
  </body>
</html>

