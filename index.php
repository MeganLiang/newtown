<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Newtown-login</title>
    <meta name="keywords" content="Newtown, history, Wellington, log in">
    <meta name="description" content="log in to learn about Newtown and its history" />
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
        <h1>Newtown</h1>
				<h2>Log in</h2>
      </header>  
    
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
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

      <!--form for username and password-->
      <form name="form" method="post" action="" id="login" >

          <label for="usernameField">Username</label>
          <input type="text" name="username" placeholder="Enter username" id="usernameField" required  >
          <br>
          <label for="passwordField">Password</label>
          <input type="password" name="pass" placeholder="Enter password" id="passwordField" required >
          <br>
					<!--on click, validation of attempts will be checked-->
          <input type="submit" name="Submit" value="Login"  onClick=" MM_callJS('check()'); return false" class="submit_button" >
          
	    </form>
			
      <script language="javascript">

        //function allows submission of form by the enter key
				function send()
				{document.theform.submit()}

        // sets the username and password variables 
        var password="password"
        var username="username"
        //set number of attempts allowed
        var attempts=3
        //sets empty variables for the user's input
        var userpass=""
        var namepass=""
        //checks user's input matches correct username and password
        function check(){
          //defines that the empty variables are the user's input in form 
          userpass=document.form.pass.value;
          namepass=document.form.username.value;

          if (userpass==password && namepass==username){
          location.href="content.php"}
          else
					//if forms are left blank
					if (userpass=="" || namepass==""){
					alert("Please fill in all the fields")
					}
					//if the username and password is incorrect...
          if (userpass!=password || namepass!=username){
            document.form.pass.value=""
            document.form.username.value=""
            attempts--
						//if there are more than 3 attempts made
            tries();
						//if there are more than 2
            if (attempts>=2){
              alert ("Invalid Entry\n\n\You have "+attempts+" attempts left.")}
						//if there are more than 1	
            if (attempts==1){
              alert ("Invalid Entry\n\n\You have "+attempts+" attempt left.")}

          }
        }
        function tries(){
          if (attempts<=0){
          // redirects user to another page
          location.href="http://www.google.com"
          }
        }
				//MM_callJS evaluates user's input and executes it when  'login' is clicked 
        function MM_callJS(jsStr) {
          return eval(jsStr)
        }       
      </script>   

      <footer>

        <div class="fb-like" data-href="https://www.facebook.com/gettoknownewtown" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

        <a href="https://twitter.com/share" class="twitter-share-button" data-via="megan" data-related="megan" data-hashtags="newtownisawesome">Tweet</a>
        
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
       <div id="copyright"> &copy Megan Liang</div>
      </footer>   
  </body>
</html>