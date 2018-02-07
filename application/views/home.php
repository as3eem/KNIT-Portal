<!--
Lead Cntributors: as3eem and krpiyush5
Author URL: http://github.com/as3eem
Author URL: http://github.com/krpiyush5
-->
<?php

?>
<!DOCTYPE HTML>
<html>
<head>
<title>KNIT | Home</title>
<link href="<?= base_url() ?>Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?=base_url()?>Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?=base_url()?>Public/css/chocolat.css" type="text/css" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="META keywords META keywordsMETA keywordsMETA keywordsMETA keywordsMETA keywordsMETA keywordsMETA keywordsMETA keywords" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?=base_url()?>Public/js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="<?=base_url()?>Public/css/flexslider.css" type="text/css" media="screen" />
<!--scrolling-->
<script type="text/javascript" src="<?=base_url()?>Public/js/move-top.js"></script>
<script type="text/javascript" src="<?=base_url()?>Public/js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!--scrolling-->
</head>
<body>	
<!--top-header-->
<div id="home" class="top-header">
	 <div class="container">
		 <div class="logo">
				<!-- <h1><a href="index.html">Emplox</a></h1> -->
				<img src="<?=base_url()?>Public/images/KNITlogo.png" style="align-items: center; width: 68%">
		 </div>
		 <div class="top-menu">
			 <span class="menu"><img src="<?=base_url()?>Public/images/nav-icon.png" alt=""/></span>
			 <ul>
				<li><a class="scroll" href="#service">News & Announcements</a></li>
				<li><a class="scroll" href="#about">About</a></li>
				<li><a class="scroll" href="#home">Home</a></li>
				<li><a class="scroll" href="#gallery">Gallery</a></li>
				<li><a class="scroll" href="#blog">Blog</a></li>
				<li><a class="scroll" href="#contact">Contact</a></li>
			 </ul>
		     <!-- script-for-menu -->
				 <script>					
							$("span.menu").click(function(){
								$(".top-menu ul").slideToggle("slow" , function(){
								});
							});
				 </script>
		     <!-- script-for-menu -->
		  </div>
	 </div>
</div>	
<!--header-->
<div class="header">
		<div class="container">
			 <div class="banner-info">
				 <h2>KAMLA NEHRU INSTITUTE OF TECHNOLOGY</h2>
				 <!-- <p>Praesent a tortor ipsum. In ornare nibh urna, non hendrerit leo lacinia non. Proin malesuada blandit ex, 
				 vitae placerat purus placerat non. Pellentesque habitant morbi tristique senectus et netus et malesuada 
				 fames ac turpis egestas.</p> -->
				 <!-- <a href="#">Click</a> -->
			 </div>
			 <div class="clearfix"></div>
		</div>
</div>
<!--Service-->
<div id="service" class="service">
	 <div class="container">
		 <div class="col-md-6">
             <h3>News & Announcements</h3>
             <div class="service-grids">
                 <div class="icon-grids">
                     <!-- <div class="col-md-offset-2"></div> -->
                     <!-- <div class="col-md-4"></div> -->
                     <div class="holder">
                         <ul id="ticker01">
                             <li><span>10/11/2017</span><a href="http://www.knit.ac.in/pdf/Notice112018.pdf" target="_blank"> Notice for Online Skill Based Assesments Test(To Facilitate Job and Internship Opportunities) </a></li>
                             <li><span>10/10/2017</span><a href="http://www.knit.ac.in/pdf/Notice_060118.pdf" target="_blank">Registration for M.Tech (F.T.) II, IV. Sem & M.Tech (P.T). II, IV. VI, Sem</a></li>
                             <li><span>10/12/2017</span><a href="http://www.knit.ac.in/pdf/Notice042018.pdf" target="_blank">Walk-In Interview for Guest Faculty</a></li>
                             <li><span>08/1/2018</span><a href="http://www.knit.ac.in/pdf/16Dec2017.pdf" target="_blank">Interview for Network Personnel for CWN Project</a></li>
                             <li><span>08/1/2018</span><a href="http://www.knit.ac.in/pdf/Scheme-btech_011217.pdf" target="_blank">Final Schedule of B.Tech. First Semester Examination 2017-18 </a></li>
                             <li><span>05/1/2018</span><a href="http://www.knit.ac.in/pdf/Scheme-mtech_011217.pdf" target="_blank">Final Scheme of M.Tech (Regular) odd Semester Examination 2017-18</a></li>
                             <li><span>04/1/2018</span><a href="http://www.knit.ac.in/pdf/quotation_211117.pdf" target="_blank">TEQIP-III Invitation of Quotation under Shopping to be open on 11.12.2017</a></li>
                             <li><span>04/1/2018</span><a href="http://www.knit.ac.in/pdf/25Oct2017.pdf" target="_blank">Student of B.tech. (All Branch) and MCA are Required to fill their Examination Form</a></li>
                             <li><span>04/1/2018</span><a href="http://www.knit.ac.in/pdf/Notice26Sept2017.pdf" target="_blank">Notice for Candidates applied for the Post of Assistant Professor in various Courses/Programmes</a></li>
                             <li><span>03/1/2018</span><a href="http://www.knit.ac.in/pdf/notice_290717.pdf" target="_blank">Notice for newly admitted students for Academic Year 2017-18 regarding class</a></li>
                             <li><span>03/1/2018</span><a href="http://www.knit.ac.in/pdf/Mess_Notice_2017-18.pdf" target="_blank">Mess Notice for B.Tech and MCA First Year Students</a></li>
                             <li><span>01/1/2018</span><a href="http://www.knit.ac.in/pdf/notice290116.pdf" target="_blank">Ombudsman for Grievance Redressal</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>

             <div class="col-md-6"></div>





		 </div>
	 </div>
</div>
<!--about-->
<div id="about" class="about">
    <div class="container">
         <div class="about-left"></div>
         <div class="about-right">
            <h3>About Us</h3>

            <p> KNIT was initially established as the Faculty of Technology in the year 1976 by Kamla Nehru Memorial Trust. It was taken over by the Govt. of Uttar Pradesh in 1979 with a view to developing a full-fledged Engineering Institute in the Eastern UP region better known as the Awadh region. Later, in the year 1983 it was registered as a separate society and renamed as the Kamla Nehru Institute of Technology. The Institute is one of the leading technical Institutions of the region and is responsible for producing top-grade engineers with skill sets comparable with the best in the world. Being fully aware of its social responsibilities and the addressing the issue of application of technology to industry, it also renders the testing and consultancy services to the neighboring industries and various other agencies. The Institute is presently affiliated to Dr. A.P.J. Abdul Kalam Technical University, formerly Uttar Pradesh Technical University,Lucknow. </p>
           <div class="col-md-3"><h4><a href="http://knit.ac.in/campus_facilities.htm">Campus Facility</a></h4></div>
           <div class="col-md-3"><h4><a href="http://knit.ac.in/pdf/Memorandum.pdf">Memorandum</a></h4></div>
           <div class="col-md-3"><h4><a href="http://knit.ac.in/vision.htm">KNIT Vision</a></h4></div>
           <div class="col-md-3"><h4><a href="http://knit.ac.in/rules.htm" target="_blank">Rules</a></h4></div>

         </div>
	 <div class="clearfix"></div>
    </div>
</div>
<!--gallery -->
		<script src="<?=base_url()?>Public/js/jquery.chocolat.js"></script>
		<!--light-box-files -->
		<script type="text/javascript">
		$(function() {
			$('.moments-bottom a').Chocolat();
		});
		</script> 
<!--gallery js-->
<div id="gallery" class="gallery">
	 <div class="container">
		 <h3>Gallery</h3>
         <div class="gallery-info">
				<div class="col-md-4 galry-grids moments-bottom">
					<a class="b-link-stripe b-animate-go" href="images/img15.jpg">
						<img src="<?=base_url()?>Public/images/img15.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="<?=base_url()?>Public/images/e.png" alt=""/>
							</span>					
						</div>
					</a>				
				</div>
				<div class="col-md-4 galry-grids moments-bottom">
					<a class="b-link-stripe b-animate-go" href="images/img10.jpg">
						<img src="<?=base_url()?>Public/images/img10.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>				
				</div>
				<div class="col-md-4 galry-grids moments-bottom">
					<a class="b-link-stripe b-animate-go" href="images/img11.jpg">
						<img src="images/img11.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>				
				</div>				
				<div class="col-md-4 galry-grids moments-bottom">
					<a class="b-link-stripe b-animate-go" href="images/img12.jpg">
						<img src="images/img12.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>				
				</div>
				<div class="col-md-4 galry-grids moments-bottom">
					<a class="b-link-stripe b-animate-go" href="images/img13.jpg">
						<img src="images/img13.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>				
				</div>
				<div class="col-md-4 galry-grids moments-bottom">
					<a class="b-link-stripe b-animate-go" href="images/img14.jpg">
						<img src="images/img14.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>				
				</div>
				<div class="col-md-4 galry-grids moments-bottom">
					<a class="b-link-stripe b-animate-go" href="images/img9.jpg">
						<img src="images/img9.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>				
				</div>
				<div class="col-md-4 galry-grids moments-bottom">
					<a class="b-link-stripe b-animate-go" href="images/img16.jpg">
						<img src="images/img16.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>				
				</div>
				<div class="col-md-4 galry-grids moments-bottom">
					<a class="b-link-stripe b-animate-go" href="images/img17.jpg" >
						<img src="images/img17.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>				
				</div>
				<div class="clearfix"> </div>
			</div>
	 </div>
</div>
<!---->
<div id="blog" class="blog">
	 <div class="container">
		 <h3>Blog</h3>
		 <div class="blog-grids">
			 <div class="col-md-6 blog-grid">
				 <a href="#"><img src="<?=base_url()?>Public/images/b1.jpg" class="img-responsive" alt=""/></a>
				 <h4><a href="#">Etiam luctus velit ac cursus lobortis.</a></h4>
					<span>Mar 12 | 2015</span>
				 <p>Aenean eget eleifend nulla. Nunc vel nisi mi. Ut faucibus ornare tempus. Donec non mi et sem convallis tincidunt ac in purus. Nullam tincidunt orci elit, vitae vulputate sapien ullamcorper et. Sed ut est purus. Duis consectetur suscipit ullamcorper. Nam dictum nisl odio, eget maximus ante interdum iaculis urna sapien.</p>				 
			 </div>
			 <div class="col-md-6 blog-grid">
				 <a href="#"><img src="<?=base_url()?>Public/images/b2.jpg" class="img-responsive" alt=""/> </a>
				 <h4><a href="#">Etiam luctus velit ac cursus lobortis.</a></h4>
					<span>Mar 12 | 2015</span>
				 <p>Aenean eget eleifend nulla. Nunc vel nisi mi. Ut faucibus ornare tempus. Donec non mi et sem convallis tincidunt ac in purus. Nullam tincidunt orci elit, vitae vulputate sapien ullamcorper et. Sed ut est purus. Duis consectetur suscipit ullamcorper. Nam dictum nisl odio, eget maximus ante interdum iaculis urna sapien.</p>
			 </div>
			 <div class="clearfix"></div>
			 <div class="middleblog-grid blog-grid">
				 <a href="#"><img src="<?=base_url()?>Public/images/b3.jpg" class="img-responsive" alt=""/> </a>
				 <h4><a href="#">Etiam luctus velit ac cursus lobortis.</a></h4>
					<span>Mar 12 | 2015</span>
				 <!-- <p>Aenean eget eleifend nulla. Nunc vel nisi mi. Ut faucibus ornare tempus. Donec non mi et sem convallis tincidunt ac in purus. Nullam tincidunt orci elit, vitae vulputate sapien ullamcorper et. Sed ut est purus. Duis consectetur suscipit ullamcorper. Nam dictum nisl odio, eget maximus ante interdum iaculis urna sapien.</p>
				 -->
			 </div>
		 </div>
	 </div>
</div>
<!---->
<div id="googlemap" style="width:100%;height:400px;"></div>
<!---->	
<div id="contact" class="contact">
	 <div class="container">
		 <h3>Contact</h3>
		 <div class="touch-top">
			 <div class="col-md-8 touch-left">
				 <form>
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" />
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
					<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}"></textarea>
					<input type="submit" value="SUBMIT">				
				 </form>	
			 </div>
			 <div class="col-md-4 touch-right">
					<div class="touch-right-top">
							<span class="add"> </span>
							<h4>Faizabad Road,<label>Sultanpur, INDIA </label></h4>
					</div>
					<div class="touch-right-top">
							<span class="mail"> </span>
							<p><a href="mailto:example@email.com">EMAIL@DOMAIN.COM</a></p>
					</div>
					<div class="touch-right-top">
							<span class="num"> </span>
							<p>+0123 456 789</p>
					</div>
			 </div>
				<div class="clearfix"></div>
		  </div>
	 </div>
</div>
<div class="footer">
	 <div class="container">
		 <p>Copyrights © 2017IT. All rights reserved |</p>
		 <div class="social">							
				<a href="#"><i class="facebook"></i></a>
				<a href="#"><i class="twitter"></i></a>
				<a href="#"><i class="dribble"></i></a>	
				<a href="#"><i class="google"></i></a>	
				<a href="#"><i class="youtube"></i></a>	
		 </div>
		 <div class="arrow">
			 <a class="scroll" href="#home"><img src="<?=base_url()?>Public/images/top.png" alt=""></a>
		 </div>
	 </div>
</div>
<!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});

		jQuery.fn.liScroll = function(settings) {
	settings = jQuery.extend({
		travelocity: 0.05
		}, settings);		
		return this.each(function(){
				var $strip = jQuery(this);
				$strip.addClass("newsticker")
				var stripHeight = 1;
				$strip.find("li").each(function(i){
					stripHeight += jQuery(this, i).outerHeight(true);
				});
				var $mask = $strip.wrap("<div class='mask'></div>");
				var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
				var containerHeight = $strip.parent().parent().height();
				$strip.height(stripHeight);			
				var totalTravel = stripHeight;
				var defTiming = totalTravel/settings.travelocity;
				function scrollnews(spazio, tempo){
				$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
				}
				scrollnews(totalTravel, defTiming);				
				$strip.hover(function(){
				jQuery(this).stop();
				},
				function(){
				var offset = jQuery(this).offset();
				var residualSpace = offset.top + stripHeight;
				var residualTime = residualSpace/settings.travelocity;
				scrollnews(residualSpace, residualTime);
				});			
		});	
};

$(function(){
    $("ul#ticker01").liScroll();
});
</script>
<script>
function initMap() {
    var myCenter = new google.maps.LatLng(	26.2895579,	82.0807404);
    var mapCanvas = document.getElementById("googlemap");
    var mapOptions = {center: myCenter, zoom: 18};
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
      }
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiXt3xU5oqlQ9QkYWeeIBDJEbqBK_MDFc&callback=initMap">
    </script>

<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 


</body>
</html>		
	



