<!-- @2022 Evanescent Totes - A Junior Achievement Company-->
<!-- by Callum Warnaar-->
<!DOCTYPE html>
<html>
	<head>
		<title>Evanescent Totes </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Callum Warnaar"/>   
		<link rel="stylesheet" type="text/css" media="screen" href="navBar.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
		<link href="_/css/slide_background.css" rel="stylesheet" media="screen">
		<script type="text/javascript" src="_/js/bootstrap.js"></script>
		<script type="text/javascript" src="jscript.js"></script>
		<script type="text/javascript" src="_/js/slider.js"></script>
		<script type="text/javascript" src="_/js/modal_effects.js"></script>
		<script src="jquery_smoothscroll.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDL0lpLwCV29KvXYkD2cOUSgIZRClkOEfk&amp;sensor=false"></script>
		<script>
			function initialize() {
				var myLatlng = new google.maps.LatLng(43.65048839784522, -79.37888587784917);
				var mapProp = {center:myLatlng, zoom:16, mapTypeId:google.maps.MapTypeId.ROADMAP, disableDoubleClickZoom:true, disableDefaultUI:true, scrollwheel:false, styles:[{"stylers":[{"hue":"#ff1a00"},{"invert_lightness":true},{"saturation":-100},{"lightness":33},{"gamma":0.5}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#2D333C"}]}]};
				var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
				var marker = new google.maps.Marker({position: myLatlng, map: map, title: 'Evansecent Headquarters'});
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-57418605-1', 'auto');
			ga('send', 'pageview');
		</script>
    
        <style>
			.container{
			  margin:80px auto;
			  width: 60px;
			  height: 60px;
			  position:relative;
			  transform-origin:center bottom;
			  animation-name: flicker;
			  animation-duration:5ms;
			  animation-delay:200ms;
			  animation-timing-function: ease-in;
			  animation-iteration-count: infinite;
			  animation-direction: alternate;
			}

			.flame{
			  bottom:0;
			  position:absolute;
			  border-bottom-right-radius: 50%;
			  border-bottom-left-radius: 50%;
			  border-top-left-radius: 50%;
			  transform:rotate(-45deg) scale(1.5,1.5);
			}

			.yellow{
			  left:15px; 
			  width: 30px;
			  height: 30px;
			  background:gold;
			  box-shadow: 0px 0px 9px 4px gold;
			}

			.orange{
			  left:10px; 
			  width: 40px;
			  height: 40px;
			  background:orange;
			  box-shadow: 0px 0px 9px 4px orange;
			}

			.red{
			  left:5px;
			  width: 50px;
			  height: 50px;
			  background:OrangeRed;
			  box-shadow: 0px 0px 5px 4px OrangeRed;
			}

			.white{
			  left:15px; 
			  bottom:-4px;
			  width: 30px;
			  height: 30px;
			  background:white;
			  box-shadow: 0px 0px 9px 4px white;
			}

			.circle{
			  border-radius: 50%;
			  position:absolute;  
			}

			.blue{
			  width: 10px;
			  height: 10px;
			  left:25px;
			  bottom:-25px; 
			  background: SlateBlue;
			  box-shadow: 0px 0px 15px 10px SlateBlue;
			}

			.black{
			  width: 40px;
			  height: 40px;
			  left:10px;
			  bottom:-60px;  
			  background: black;
			  box-shadow: 0px 0px 15px 10px black;
			}

			@keyframes flicker{
			  0%   {transform: rotate(-1deg);}
			  20%  {transform: rotate(1deg);}
			  40%  {transform: rotate(-1deg);}
			  60%  {transform: rotate(1deg) scaleY(1.04);}
			  80%  {transform: rotate(-2deg) scaleY(0.92);}
			  100% {transform: rotate(1deg);}
			}
		</style>
    
		<script src="prefixfree.min.js"></script>
		<script src="modernizr.js"></script>
	</head>
	<body>

		<?php
			require "header.html";
		?>
		
		<script>
			var tag = document.createElement('script');

			tag.src = "https://www.youtube.com/iframe_api";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
			
		</script>
		
		<div class="dt-loading">
			<div class="loader">
				<div class="container">
				  <div class="red flame"></div>
				  <div class="orange flame"></div>
				  <div class="yellow flame"></div>
				  <div class="white flame"></div>
				  <div class="blue circle"></div>
				  <div class="black circle"></div>
				</div>
			</div>
		</div>

		<div class="mainbanner">
			<div id="sequence">
				<ul class="sequence-canvas">
				
					<li class="animate-in slide-frame">
						<div class="slide-bg slide-bg1">
							<div style="height:100%; width:100%; background:rgba(0, 0, 0, 0.5); position:absolute;"></div>
						</div>
						<!--<div class="slide-logo"></div>-->
						<div class="slide-title">
							<img src="/Evanescent/DisplayImgs-Evanescent/newEVTbg.png" alt=""/>
						</div>
						<div class="slide-text">
							<p>A Junior Achievement Company</p>
						</div>
						<div class="scroll-down slide-button" style="background-color:green; position:relative; left:50%; margin-left:-155px; width:310px;">
							<a class="scrollto" href="#options"><p>GET STARTED</p></a>
							<a class="learnMore" href="about.php"><p>LEARN MORE</p></a>
						</div>
					</li><!-- Frame 1 -->
				
					<li class="slide-frame">
						<div class="slide-bg slide-bg2">
							<div style="height:100%; width:100%; background:rgba(0, 0, 0, 0.5); position:absolute;"></div>
						</div>
						<!--<div class="slide-logo"></div>-->
						<div class="slide-title">
							<img src="/Evanescent/DisplayImgs-Evanescent/newEVTbg.png" alt=""/>
						</div>
						<div class="slide-text">
							<p>We are based in Toronto, Ontario</p>
						</div>
						<div class="scroll-down slide-button" style="background-color:green; position:relative; left:50%; margin-left:-155px; width:310px;">
							<a class="scrollto" href="#options"><p>GET STARTED</p></a>
							<a class="learnMore" href="about.php"><p>LEARN MORE</p></a>
						</div>
					</li> <!-- Frame 2 -->
				</ul>
			</div>
		</div>
    		
        <section id="options">
			<div class="space">
				<div id="options">
					<div id="optionsContainer">
						<div id="optionDivs1" class="optionDivs">
							<div class="optionTextHolder">
								<p class="optionTextP1">About</p>
								<p class="optionTextP2">WHO WE ARE | WHAT WE DO</p>
							</div>
							<a href="about.php"><div class="arrow"><p>➔</p></div></a>
							<div id="optionImgHolder1" class="optionImgHolder">
								<!--<img src="/Evanescent/DisplayImgs-Evanescent/__TOTE__.jpg" style="width:326px;height:235px" />-->
							</div>
						</div>
						<div id="optionDivs2" class="optionDivs">
							<div class="optionTextHolder">
								<p class="optionTextP1">Products</p>
								<p class="optionTextP2">SEE WHAT WE HAVE TO OFFER</p>
							</div>
							<a href="products.php"><div class="arrow"><p>➔</p></div></a>
							<div id="optionImgHolder2" class="optionImgHolder">
								<!--<img src="/Evanescent/DisplayImgs-Evanescent/blurredBG7.jpg" style="width:326px;height:235px" />-->
							</div>
						</div>
						<div id="optionDivs3" class="optionDivs">
							<div class="optionTextHolder">
								<p class="optionTextP1">Gallery</p>
								<p class="optionTextP2">LIFE WITH EVANESCENT TOTES</p>
							</div>
							<a href="gallery.php"><div class="arrow"><p>➔</p></div></a>
							<div id="optionImgHolder3" class="optionImgHolder">
								<!--<img src="/Evanescent/DisplayImgs-Evanescent/blurredBG7.jpg" style="width:326px;height:235px" />-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <div id="picHolder1">
			<div class="translucentDiv">
				<div id="picHolder1textHolder">
					<p id="picHolder1P1">WELCOME TO EVANESCENT TOTES.</p>
					<p id="picHolder1P2">"Carry your glow wherever you go!"</p>
				</div>
				<img src="/Evanescent/DisplayImgs-Evanescent/divCoverGrey.png" style="width:100%; height:100px; margin-top:-100px; position:absolute;" />
			</div>
		</div>

        <div id="aboutDiv">
			<div id="aboutTextHolder">
				<?php
					$file = fopen("about.txt", "r");
					$counter = 0;
					while (!feof($file)) {
						$counter ++;
						$aboutText = fgetcsv($file, 2048, "|");
						
						echo "<p id='infoP".$counter."'>".$aboutText[0]."</p>";
					}
				?>
			</div>
		</div>
		
		<div id="picsOnDisplayHolder">
			<div id="picsOnDisplayContainer">
			<?php
				for ($i = 0; $i < 3; $i++) {
					echo "<div id='picsOnDisplay".($i + 1)."' class='picsOnDisplay'></div>";
				}
			?>
			</div>
		</div>
    
    	<!--<div id="valuesDiv">
			<div id="valuesHolder">			
			</div>
		</div>-->
    
    	<div id="soiBeamInfo">
			<div id="soiBeamInfoHolder">
				<p id="soiBeamInfoHead">EVANESCENT TOTES SPECIAL</p></br>
				<p id="soiBeamInfoHead2">Environmentally friendly tote bags</p>
				<?php
					$file = fopen("Totes.txt", "r");
					while (!feof($file)) {
						$infoText = fgetcsv($file, 2048, "|");
						
						echo "<p id='soibeamInfoText'>".$infoText[0]."</p>";
					}
				?>
			</div>
		</div>
		
    	<div id="newProductDiv">
			<div id="newProductDivHolder">
				<img class="productPNG" id="productPng1" src="/Evanescent/DisplayImgs-Evanescent/__TOTE__.png" style="width:270px;height:540px;z-index:10;" />
				<img class="productPNG" id="productPng2" src="/Evanescent/DisplayImgs-Evanescent/__TOTE__.png" style="width:270px;height:540px;z-index:10;" />
				<img class="productPNG" id="productPng" src="/Evanescent/DisplayImgs-Evanescent/__TOTE__.png" style="width:300px;height:600px;z-index:10;" />
				<img id="soiBeamBanner" src="/Evanescent/DisplayImgs-Evanescent/soibeamBanner.jpg" style="width:320px;height:160px;" />
				<a href="products.php"><div id="newProductDivView"><p>View Bags</p></div></a>
			</div>
		</div>
		
		<!--<hr style="border-color:#919191;"/>-->
		
		<div id="picsOnDisplayHolder"  style="background-color:#fee8b6;">
			<div id="picsOnDisplayContainer">
			<?php
				for ($i = 0; $i < 3; $i++) {
					echo "<div id='picsOnDisplay".($i + 4)."' class='picsOnDisplay'></div>";
				}
			?>
			</div>
		</div>

		<!--
		<div id="picsOnDisplayHolder"  style="background-color:#2d2d30;">
			<div id="picsOnDisplayContainer">
			<?php
				for ($i = 0; $i < 3; $i++) {
					echo "<div id='picsOnDisplay".($i + 7)."' class='picsOnDisplay'></div>";
				}
			?>
			</div>
		</div>
		
		<div id="springCollection">
			<div id="springCollectionDark">
				
			</div>
		</div>
		-->
		
		<!--<div id="newPartner">
			<div id="newPartnerHolder">
				<div class="newPartnersItem" id="newPartnersItem1">
					<div class="newPartnersItemImgDiv" id="newPartnersItemImgDiv1">
						<div class="newPartnersCover"></div>
					</div>
				</div>
				<div class="newPartnersItem" id="newPartnersItem2">
					<div class="newPartnersItemImgDiv" id="newPartnersItemImgDiv2">
						<div class="newPartnersCover"></div>
					</div>
				</div>
			</div>
		</div>-->
    
    	<div id="partners">
			<div id="partnersHolder">
				<!--<div class="partnersIn" id="partnersInfo">-->
				<!--<div id="partnersInfoHold">-->
				<p id="partnerHeadA1">OUR PARTNERS</p>
				<p id="partnerHeadA2">The organizations we are associated with</p>
				<!--<a href="about.php"><p id="partnerBut">LEARN MORE</p></a>-->
				<!--</div>-->
				<!--<div class="partnersIn" id="partnerPics">-->
				<div id="partnerPicsHold">
					<a href="http://central-ontario.jacan.org/" target="_blank">
						<div class="partnerPicsItems" id="partnerPicsItems1">
							<img src="/Evanescent/DisplayImgs-Evanescent/JAlogo.png" style="margin-left:-70px;" width="500px" height="280px"></img>
							<!--<div class="arrow2Z"><p id="arrow2A">➔</p></div>-->
						</div>
					</a>
					<a href="https://www.enbridgegas.com/" target="_blank">
						<div class="partnerPicsItems" id="partnerPicsItems2">
							<div id="partnerPicsItems2Hold">
								<img src="/Evanescent/DisplayImgs-Evanescent/deloitte.jpg" style="margin-left:50px; margin-top:90px;" width="240px" height="80px"></img>
							</div>
							<!--<div class="arrow2Z"><p id="arrow2B">➔</p></div>-->
						</div>
					</a>
					<!--<a href="http://www.energy4everyone.com/" target="_blank">
						<div class="partnerPicsItems" id="partnerPicsItems3">
							<div id="partnerPicsItems3Hold">
								<img style="margin-left:40px; margin-top:10px;" src="/Evanescent/DisplayImgs-Evanescent/energy4everyonelogo.png" width="220px" height="80px"></img>
								<img style="margin-top:0px;" src="/Evanescent/DisplayImgs-Evanescent/energy4everyonepic.png" width="280px" height="140px"></img>
							</div>-->
							<!--<div class="arrow2Z"><p id="arrow2C">➔</p></div>-->
						</div>
					</a>
				</div>
			</div>
		</div>

		<div id="factDiv">
			<div id="factDivBlack">
				<div id="factDivCont">
					<div class="fact" id="fact1">
						<img height = '10px' src="/Evanescent/DisplayImgs-Evanescent/newEVTbg.png"></img>
						<p class="factNumber">XXX</p>
						<p class="factInfo">Bags Sold!</p>
					</div>
					<div class="fact" id="fact2">
						<img src="/Evanescent/DisplayImgs-Evanescent/charitySymbol.png"></img>
						<p class="factNumber">$XXX.XX</p>
						<p class="factInfo">Raised for Charity!</p>
					</div>
				</div>
			</div>
		</div>

		<div id="mapdiv">
            <div id="mapAddress">
                <p style="padding-top:90px;"><span style="color:#f5f5f5;">We are located at:</span><br/> 10 Euclid Ave.<br/> Scarborough, Ontario<br/> M1C 1J6 <br/> Evanescent Totes.</p>
            </div>
            <div id="googleMap" style="height:500px;width:75%"></div>
        </div>

		<?php
		require "footer.html";
		?>

</body>
</html>			