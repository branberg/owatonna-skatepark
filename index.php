<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Owatonna Skate Park</title>
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<meta name="author" content="Branberg Studios">
	<meta name="description" content="The Owatonna Skate Park is a 50,000 square ft. outdoor park located in Southern Minnesota. It’s free and open to skate boarders, roller-bladers, and bikers.">
	<link rel="stylesheet" href="css/style.css" />
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="css/ie.css" />
	<![endif]-->
	<!--[if lte IE 8]>
		<link rel="stylesheet" type="text/css" href="css/ie.css" />
	<![endif]-->
	<link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/supersized.core.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/supersized.core.3.2.1.min.js"></script>
	<script type="text/javascript">
		
		jQuery(function($){
			
			$.supersized({
				slides  :  	[ {image : 'http://owatonnaskatepark.com/img/background05.jpg'} ]
			});
	    });
	    
	    $(document).ready(function() {
		  $('.flexslider').flexslider({
		    animation: "fade",
		    controlNav: false
		  });
		});
		
		//Spin that wheel
		var angle = 1;
		var lastScrollTop = 0;
		
		$(window).scroll(function(event){
		
		   	var st = $(this).scrollTop();
		   
			if (st > lastScrollTop){
		   		//Do this on downscroll
				$(".rotate").css('-moz-transform', 'rotate('+angle+'deg)').css('-webkit-transform', 'rotate('+angle+'deg)').css('-o-transform', 'rotate('+angle+'deg)').css('-ms-transform', 'rotate('+angle+'deg)');
		    	angle+=6;
		    	if(angle==360) {
		        	angle=0;
		        }
		   } else {
		   		//do this on up scroll - notice the '-' in the rotate css
		      	$(".rotate").css('-moz-transform', 'rotate(-'+angle+'deg)').css('-webkit-transform', 'rotate(-'+angle+'deg)').css('-o-transform', 'rotate(-'+angle+'deg)').css('-ms-transform', 'rotate(-'+angle+'deg)');
		    	angle+=6;
		    	if(angle==360) {
		        	angle=0;
		        }
		   }
		   lastScrollTop = st;
		});	    
	</script>
	
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-33095822-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
</head>
<body>
	
	<div id="wrapper">
		<header>
			<h1 id="logo" class="rotate">Owatonna Skate Park</h1>
		</header>
		<div id="main">
			<section id="intro">
				<h2>The Owatonna Skate Park is a 50,000 square foot outdoor park located in Southern Minnesota.</h2>
				<span>The park is open to all sports with wheels, and some without (you're going to have to use your imagination on this one).</span>
			</section>
			<section id="photos">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="img/slides/01.jpg">
							<img src="img/slides/01.jpg" />
						</li>
						<li data-thumb="img/slides/02.jpg">
							<img src="img/slides/02.jpg" />
						</li>
						<li data-thumb="img/slides/03.jpg">
							<img src="img/slides/03.jpg" />
						</li>
						<li data-thumb="img/slides/04.jpg">
							<img src="img/slides/04.jpg" />
						</li>
						<li data-thumb="img/slides/05.jpg">
							<img src="img/slides/05.jpg" />
						</li>
						<li data-thumb="img/slides/06.jpg">
							<img src="img/slides/06.jpg" />
						</li>
						<li data-thumb="img/slides/07.jpg">
							<img src="img/slides/07.jpg" />
						</li>
						<li data-thumb="img/slides/08.jpg">
							<img src="img/slides/08.jpg" />
						</li>
						<li data-thumb="img/slides/09.jpg">
							<img src="img/slides/09.jpg" />
						</li>
						<li data-thumb="img/slides/10.jpg">
							<img src="img/slides/10.jpg" />
						</li>
					</ul>
				</div>
			</section>
			<section id="info">
				<div class="info-block">
					<h3>Hours:<span class="asterisk"> *</span></h3>
					6am - 11pm<br/>
					Open all year
				</div>
				<div class="info-block">
					<h3>Fees:<span class="asterisk"> *</span></h3>
					Completely Free.<br/>
					Zip, Zilch, Nadda, Zero
				</div>
				<div class="info-block">
					<h3>Location:<span class="asterisk"> *</span></h3>
					Morehouse Park<br/>
					Owatonna, MN
				</div>
				<div class="info-block last">
					<h3>Rules:<span class="asterisk"> *</span></h3>
					Stay friendly, stay safe<br/>
					(wear a helmet)
				</div>
				<div class="clear"></div>
			</section>
			<section id="map">
				<iframe width="920" height="460" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Morehouse+Park,+Owatonna,+MN&amp;aq=0&amp;oq=morehouse+park+owatonna&amp;sll=37.0625,-95.677068&amp;sspn=37.052328,79.013672&amp;t=m&amp;ie=UTF8&amp;hq=Morehouse+Park,+Owatonna,+MN&amp;ll=44.082221,-93.232298&amp;spn=0.014181,0.039439&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
				<div style="font-size:0.6em;"><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Morehouse+Park,+Owatonna,+MN&amp;aq=0&amp;oq=morehouse+park+owatonna&amp;sll=37.0625,-95.677068&amp;sspn=37.052328,79.013672&amp;t=m&amp;ie=UTF8&amp;hq=Morehouse+Park,+Owatonna,+MN&amp;ll=44.082221,-93.232298&amp;spn=0.014181,0.039439&amp;z=15&amp;iwloc=A" target="_blank">Click here</a> for a larger map and directions.</div>
			</section>
			<div id="disclaimer">
				<p>* This site is not associated with the City of Owatonna. It has been created by fans and patrons of the skate park with the intent to provide a better, more informative resource for the park. The information is provided 'as-is' and it is always a good idea to check with the <a href="http://ci.owatonna.mn.us/parksrecreation/parkstrailsfacilities/pavilionsrecreation-facilities/skate-park/" title="City of Owatonna Skate Park Website" target="_blank">City of Owatonna's website</a> for the most accurate and up-to-date information possible.</p>
				<p>** This site is best viewed in a <a href="http://www.google.com/chrome/" target="_blank">modern, up-to-date browser</a>. Please, no Internet Explorer.</p>
			</div>
		</div>
		<footer>
			<h6>&copy; <?php echo date('Y'); ?> | Site Created By <a href="http://branberg.com" target="_blank">Branberg</a></h6>
			<h6 style="display:none;">Owatonna Skatepark</h6>
		</footer>
	</div>
	
</body>
</html>