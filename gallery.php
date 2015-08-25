<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Newtown-gallery</title>
    <meta name="keywords" content="Newtown, gallery, images">
    <meta name="description" content="View the gallery images of Newtown" />
    <meta name="author" content="Megan Liang" />
    <meta name="copyright" content="Copyright 2014 Megan Liang" />
    <meta name="robots"content= "noindex, nofollow" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="all" >
    <link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
    <!-- the following script operates for older browsers -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5-els.js"></script>
    <![endif]-->
    
  </head>
  <body>
    <!-- part of the facebook like-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <div id="container">
		  <a name="top"></a>
      <header>

          <h1>Newtown</h1>
		  <h2> Gallery</h2>
      </header>

			<nav class="noprint">
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
			<article>   
				<?php
					//this function prints out the image file name without the file extension. File extension can be of any image type. The function is only jpg, png and gif inclusive
					//the function also prints out all the images in the images-thumb folder.
					function extension_image(){
					//specifies that the varibles used outside this function is global so that they (the variables) can be used inside the function
						global $extension;
						global $file;
						global $dir_thumbs;
						$folder_name="images";
							if ($extension['extension'] == 'jpg' || $extension['extension'] == 'jpeg' || $extension['extension'] == 'JPEG' || $extension['extension'] == 'JPG' || $extension['extension'] == 'gif'|| $extension['extension'] == 'GIF' || $extension['extension'] == 'png') {
							
								//http://stackoverflow.com/questions/1993841/php-filename-without-file-extension-best-way
								//basename will allow the file name and the extension to be extracted
								$filename = basename($file);
								//pathinfo is a function that returns an array that contains information about a path. In this case, the file name is returned
								$filename = pathinfo($filename);
								//PATHINFO_FILENAME allows multiple extensions to be used. This means that the extension of each filename will be removed for multiple extensions
								$caption = pathinfo($file, PATHINFO_FILENAME);
								
								//replaces all '_' with a space
								$caption = str_replace("_"," ",$caption);
								//replaces all first letter undercase with uppercase for readibility
								$caption = str_replace('\' ', '\'', ucwords(str_replace('\'', '\' ', strtolower($caption))));
								
								//includes alternative text for blind readers
								echo'<a href="'.$folder_name. '/'.$file.'" target="_blank"><figure><img src="'.$dir_thumbs . '/' . $file. '" alt="'. $caption .'"><figcaption>'. $caption .'</figcaption></figure></a>';
								return $filename;
								return $file;
							}
					}
					function checkdir (){
						global $directory;
						//IF statement checks to see if there is a directory, if not, it will tell you
						if (!$directory) {          
							die ("I suggest you try later. There is a problem with the website.");
						}
					} 

					//main content begins			
					$dir_thumbs = "images-thumbs";     
					$directory = @opendir($dir_thumbs);
					checkdir();


					while ($file=@readdir($directory)) { 
						//gets the filenames from directory
						$extension=pathinfo($file);
						extension_image();
					}
					
					// if (file_exists($dir_thumbs)){
						// echo "";
					// }	
					// else{
					// echo "There are no images in the specified folder. I suggest you try later";
					
					// }
				?>
			</article>
			
			<div class="top" class="noprint">
			<a href='#top' class="button" ><img alt="Top of page link" src="images/to-top.png" class="noprint"></a></div>
			
			<footer class="noprint">
				<div class="fb-like" data-href="https://www.facebook.com/gettoknownewtown" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
				
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="megan" data-related="megan" data-hashtags="newtownisawesome">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				<div id="copyright"> &copy Megan Liang</div>
			</footer>
    </div>
  </body>
</html>
