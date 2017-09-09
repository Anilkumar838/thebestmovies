<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TheBestMovies</title>
	<link rel="icon" type="image/ico" href="images/head_logo.png">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4464697098126386",
    enable_page_level_ads: true
  });
</script>

</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
				<ul id="navigation">
					<li class="">
						<a href="index.html"><span style="color: rgb(251, 96, 108);">H</span>ome</a>
					</li>
					<li>
						<a href="about.html"><span style="color: rgb(251, 96, 108);">A</span>bout</a>
					</li>
					<li class="menu">
						<a href="movies.html"><span style="color: rgb(251, 96, 108);">M</span>ovies</a>
						<ul class="primary" style="position: absolute;">
							<li>
								<a href="horror.html">Horror</a>
							</li>
							<li>
								<a href="DC.html">DC</a>
							</li>
							<li>
								<a href="Marvals.html">Marvals</a>
							</li>
							<li>
								<a href="Bollywood.html">Bollywood</a>
							</li>
							<li>
								<a href="Hollywood.html">Hollywood</a>
							</li>
							<li>
								<a href="more.html">More</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="got_all_season.html"><span style="color: rgb(251, 96, 108);">G</span>OT</a>
					</li>
					<li  class="selected">
						<a href="contact.html"><span style="color: rgb(251, 96, 108);">C</span>ontact</a>
					</li>
				</ul>
			</div>
		</div>


<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='thebestmovies838@gmail.com'; 
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
<div id="temp" style="height: 60%;">
	
</div>
<div id="footer">
			<div class="connect">
				<div>
					<h1>FOLLOW US ON</h1>
					<div>
						<a href="https://www.facebook.com/Advance-Movies-1967917953490369/" class="facebook">facebook</a>
						<a href="https://plus.google.com/u/0/103342161429573300570" class="googleplus">googleplus</a>
					</div>
				</div>
			</div>
			<div class="footnote">
				<div>
					<p>&copy; 2017 ALL RIGHTS RESERVED</p>
				</div>
				<div id="sfc6r62rxrbdt216eaf8nyqe9htq1cq6zrf"></div>
					<script type="text/javascript" src="https://counter9.freecounter.ovh/private/counter.js?c=6r62rxrbdt216eaf8nyqe9htq1cq6zrf&down=async" async></script>
					<noscript><a href="https://www.freecounterstat.com" title="hit counter html"><img src="https://counter9.freecounter.ovh/private/freecounterstat.php?c=6r62rxrbdt216eaf8nyqe9htq1cq6zrf" border="0" title="hit counter html" alt="hit counter html"></a></noscript>
					<a href="https://www.freecounterstat.com" title="hit counter html"><img src="https://counter9.freecounter.ovh/private/freecounterstat.php?c=6r62rxrbdt216eaf8nyqe9htq1cq6zrf" border="0" title="hit counter html" alt="hit counter html"></a>
					</div>
			</div>
		</div>
	</div>
</body>
</html>
<script>
function myFunction() {
    alert("MOVIES WILL UPLOAD SOON,STAY CONNECTED");
}
</script>

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105799904-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-105799904-1');
</script>
