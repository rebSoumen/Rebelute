<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<title>Real Estate Vertical - Rebelute</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Rebelute Digital Solutions"/>
    <meta name="description" content="Rebelute provide steadyfast software maintenance and support services that will empower you to focus better on your core business purpose."/>
	<meta name="keyword" content="Adaptive Maintenance and Support, preventive software maintenance, corrective maintenance software, maintenance logging software, remote maintenance software, network maintenance software, password maintenance software"/>
	
	<?php $this->load->view('main_template/header');?>
	<style class="cp-pen-styles">body, html{
  padding:0; margin:0;
  position:absolute;
  top:0; left:0; right:0; bottom:0;
}

svg#buildings_resources {
  position:absolute; top:0; left:0; 
  opacity:0;
}

svg#scene {
  background:#efefef;
}

.animated {
  transition: all 0.5s;
}

#typewriter{
  position:absolute;
  left:50%; bottom:10%;
  text-align:center;
  -webkit-transform: translate(-50%, 0%);
  z-index:200;
  background:rgba(255,255,255,0.75);
}

#typewriter p{
  text-align:left;
  font-family: 'Droid Sans Mono';
  font-size:14px;
  color:#5e5e5e;
  white-space:pre;
  margin:0;
  padding:0;
}
#typewriter p span.carret {
  display:block;
  background:#ffffff;
  border:1px solid #5e5e5e;
  width:5px;
  
}

</style>
</head>

<body class="stretched no-transition">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header dark" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="<?php echo base_url();?>" class="standard-logo" data-dark-logo="<?php echo base_url();?>assets/main_site/images/logo-dark.png"><img src="<?php echo base_url();?>assets/main_site/images/logo.png" alt="Rebelute Logo"></a>
						<a href="<?php echo base_url();?>" class="retina-logo" data-dark-logo="<?php echo base_url();?>assets/main_site/images/logo-dark@2x.png"><img src="<?php echo base_url();?>assets/main_site/images/logo@2x.png" alt="Rebelute Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<?php $this->load->view('main_template/menu');?>
				</div>

			</div>

		</header><!-- #header end -->
		
		
		<!-- Page Title 
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title page-title-left">
		
	<!--   
<svg id="buildings_resources" version="1.1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;">
<g id="buildings">
			<g id="building1">
				<polyline fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="35,277.1 42.5,275.1 42.5,273.1 
					42.5,172.3 42.5,46.5 35,46.5 				"/>
				<polygon fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="0,15.9 12.3,8.6 35.2,8.6 35.2,45.7 
					35.2,206.2 35.2,278.6 0.7,278.6 				"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="18" y1="15.5" x2="30" y2="15.5"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="20" y1="36.5" x2="30" y2="36.5"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="22" y1="68.5" x2="30" y2="68.5"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="18" y1="78.5" x2="23" y2="78.5"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="18" y1="110.5" x2="30" y2="110.5"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="18" y1="120.5" x2="26" y2="120.5"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="18" y1="141.5" x2="30" y2="141.5"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="18" y1="152.5" x2="30" y2="152.5"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="24" y1="162.5" x2="30" y2="162.5"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="18" y1="183.5" x2="27" y2="183.5"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="18" y1="194.5" x2="30" y2="194.5"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="12.2" y1="81.1" x2="12.2" y2="9.1"/>
			</g>
			<g id="building2">
				<polygon fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="-0.5,221.1 -0.5,97.1 8.1,93.5 
					16.5,93.5 16.5,221.1 16.5,279.5 -0.5,279.5 				"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="5.5" y1="275" x2="5.5" y2="93"/>
			</g>
			<g id="building3">
				<polygon fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="20.5,165.1 20.5,276.5 -0.5,276.5 
					-0.5,172.1 				"/>
			</g>
			<g id="building4">
				<polygon fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="16.5,117.5 -0.5,117.5 -0.5,279.1 
					16.5,276.9 				"/>
			</g>
			<g id="building5">
				<polygon fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="22.5,73.5 12.1,73.5 -0.5,79.4 
					-0.5,152.1 -0.5,281.1 22.5,279.9 				"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="10.5" y1="280" x2="10.5" y2="73"/>
			</g>
			<g id="building6">
				<polygon fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="47.5,53.5 10.5,49.2 -0.1,56.9 
					0.1,280.1 47.5,273.5 				"/>
				<line fill="#F7F7F7" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="10.5" y1="275" x2="10.5" y2="49"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="15.5" y1="57" x2="15.5" y2="259"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="25.5" y1="68" x2="25.5" y2="270"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="34.5" y1="79" x2="34.5" y2="281"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="42.5" y1="69" x2="42.5" y2="271"/>
			</g>
			<g id="building7">
				<polygon fill="#FFFFFF" points="49,166 49,107 0,107 0,277 50.3,277 58,277 58,166 				"/>
				<polyline fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="0.5,215 0.5,106.5 49.5,106.5 
					49.5,165.5 58.5,165.5 58.5,279.1 0.5,285.5 0.5,223.5 8.5,223.5 8.5,221.5 22.5,221.5 22.5,164.5 25.5,164.5 25.5,162.5 
					36.5,162.5 36.5,158.5 45.5,158.5 45.5,165.5 50,165.5 				"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="5" y1="118.5" x2="42" y2="118.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="30" y1="128.5" x2="47" y2="128.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="14" y1="139.5" x2="47" y2="139.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="5" y1="144.5" x2="17" y2="144.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="23" y1="144.5" x2="35" y2="144.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="5" y1="160.5" x2="22" y2="160.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="5" y1="170.5" x2="13" y2="170.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="9" y1="175.5" x2="18" y2="175.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="5" y1="186.5" x2="13" y2="186.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="5" y1="196.5" x2="18" y2="196.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="5" y1="212.5" x2="18" y2="212.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="44" y1="171.5" x2="49" y2="171.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="44" y1="175.5" x2="49" y2="175.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="31" y1="179.5" x2="36" y2="179.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="31" y1="191.5" x2="36" y2="191.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="31" y1="216.5" x2="36" y2="216.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="31" y1="228.5" x2="36" y2="228.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="31" y1="244.5" x2="36" y2="244.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="7" y1="244.5" x2="12" y2="244.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="20" y1="254.5" x2="25" y2="254.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="44" y1="195.5" x2="49" y2="195.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="44" y1="212.5" x2="49" y2="212.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="44" y1="216.5" x2="49" y2="216.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="44" y1="232.5" x2="49" y2="232.5"/>
			</g>
			<g id="building8_1_">
				<polygon fill="#F7F7F7" points="0,180 17,180 17,142.1 39.2,138 61,138 61,128.1 51,124.9 37.4,128.6 37.3,79.4 57,73.6 
					79,74.9 79,100.1 95.1,97 118,97 118,282 0,282 				"/>
				<polygon fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="13.5,178.5 25.5,178.5 25.5,185.5 
					29.5,185.5 29.5,238.1 13.5,237.6 				"/>
				<polyline fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="19.5,171 19.5,142.1 39.2,136.5 
					50,136.5 				"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="26.5" y1="140" x2="26.5" y2="165"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="32.5" y1="138" x2="32.5" y2="177"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="38.5" y1="137" x2="38.5" y2="241"/>
				<polyline fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="54.5,167 54.5,136.5 61.5,136.5 
					61.5,128.1 51.5,124.9 37.6,128.6 37.5,79.3 57.4,73.5 79.5,73.5 79.5,100.1 95.1,95.5 118.5,95.5 118.5,281 				"/>
				<polyline fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="79.7,100.1 73.4,102 73.6,157.5 
					81.5,157.5 81.5,160.5 104,160.5 				"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="57.4" y1="112.1" x2="57.4" y2="73.6"/>
				<polyline fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="100,172.5 54.5,172.5 54.5,234 				"/>
				<polyline fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="80.5,117 80.5,123.5 102,123.5 				"/>
				<polyline fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="80.5,129 80.5,137.5 93,137.5 				"/>
				<polyline fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="80.5,144 80.5,150.5 104,150.5 				"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="60" y1="179.5" x2="83" y2="179.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="60" y1="188.5" x2="100" y2="188.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="66" y1="197.5" x2="100" y2="197.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="60" y1="206.5" x2="88" y2="206.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="70" y1="215.5" x2="100" y2="215.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="84" y1="224.5" x2="100" y2="224.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="64.5" y1="87" x2="64.5" y2="90"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="73.5" y1="81" x2="73.5" y2="84"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="73.5" y1="93" x2="73.5" y2="96"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="64.5" y1="93" x2="64.5" y2="96"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="64.5" y1="106" x2="64.5" y2="109"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="64.5" y1="112" x2="64.5" y2="115"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="60.5" y1="143" x2="60.5" y2="146"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="60.5" y1="156" x2="60.5" y2="159"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="60.5" y1="162" x2="60.5" y2="165"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="69.5" y1="162" x2="69.5" y2="165"/>
			</g>
			<g id="building9">
				<polygon fill="#FFFFFF" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="-0.5,239.1 -0.5,112.5 3.5,112.5 
					3.5,103.5 7.5,103.5 7.5,98.1 16.4,89.5 38.4,89.5 43.5,98.1 43.5,103.5 47.5,103.5 47.5,112.5 50.5,112.5 50.5,155.5 
					53.5,155.5 53.5,159.5 72.5,159.5 72.5,276.1 -0.5,274.5 				"/>
				<polyline fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" points="51,155.5 41.5,155.5 41.5,160.5 
					34.1,160.5 34,166.5 14.4,166.5 4,166.5 				"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="12.5" y1="275" x2="12.5" y2="166"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="21.5" y1="275" x2="21.5" y2="166"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="12" y1="102.5" x2="41" y2="102.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="9" y1="110.5" x2="44" y2="110.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="8.5" y1="131" x2="8.5" y2="160"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="16.5" y1="122" x2="16.5" y2="137"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="16.5" y1="144" x2="16.5" y2="159"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="25.5" y1="123" x2="25.5" y2="159"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="34.5" y1="121" x2="34.5" y2="154"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="42.5" y1="117" x2="42.5" y2="149"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="29" y1="172.5" x2="32" y2="172.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="29" y1="190.5" x2="32" y2="190.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="29" y1="202.5" x2="32" y2="202.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="29" y1="221.5" x2="32" y2="221.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="29" y1="233.5" x2="32" y2="233.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="29" y1="239.5" x2="32" y2="239.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="41" y1="239.5" x2="44" y2="239.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="41" y1="215.5" x2="44" y2="215.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="41" y1="196.5" x2="44" y2="196.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="47" y1="190.5" x2="50" y2="190.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="47" y1="233.5" x2="50" y2="233.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="35" y1="233.5" x2="38" y2="233.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="35" y1="221.5" x2="38" y2="221.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="35" y1="178.5" x2="38" y2="178.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="41" y1="184.5" x2="44" y2="184.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="53" y1="172.5" x2="56" y2="172.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="53" y1="178.5" x2="56" y2="178.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="53" y1="184.5" x2="56" y2="184.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="53" y1="209.5" x2="56" y2="209.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="53" y1="221.5" x2="56" y2="221.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="66" y1="172.5" x2="69" y2="172.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="66" y1="178.5" x2="69" y2="178.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="66" y1="196.5" x2="69" y2="196.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="59" y1="196.5" x2="62" y2="196.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="59" y1="202.5" x2="62" y2="202.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="66" y1="252.5" x2="69" y2="252.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="53" y1="252.5" x2="56" y2="252.5"/>
				<line fill="none" stroke="#5B5B5B" stroke-width="3" stroke-miterlimit="10" x1="66" y1="258.5" x2="69" y2="258.5"/>
			</g>
		</g>
		<path id="mask1" fill="#8C8C8C" d="M332.5,302.7L186,387.3c-8.1,4.7-18,4.7-26,0L13.5,302.7c-8.1-4.7-13-13.2-13-22.5V110.9
			c0-9.3,5-17.9,13-22.5L160,3.7c8.1-4.7,18-4.7,26,0l146.5,84.6c8.1,4.7,13,13.2,13,22.5v169.2C345.5,289.4,340.5,298,332.5,302.7z
			"/>
		<g id="logo_x5F_outerline">
			<path fill="none" stroke="#5E5E5E" stroke-width="3" stroke-miterlimit="10" d="M332.5,303.4L186,388c-8.1,4.7-18,4.7-26,0
				L13.5,303.4c-8.1-4.7-13-13.2-13-22.5V111.6c0-9.3,5-17.9,13-22.5L160,4.5c8.1-4.7,18-4.7,26,0l146.5,84.6
				c8.1,4.7,13,13.2,13,22.5v169.2C345.5,290.2,340.5,298.8,332.5,303.4z"/>
			<path fill="none" stroke="#5E5E5E" stroke-width="5" stroke-miterlimit="10" d="M327.7,295l-146.5,84.6c-5.1,2.9-11.3,2.9-16.3,0
				L18.3,295c-5-2.9-8.2-8.3-8.2-14.1V111.6c0-5.8,3.1-11.2,8.2-14.1l143-82.6c7.2-4.2,16.1-4.2,23.3,0l143,82.6
				c5,2.9,8.2,8.3,8.2,14.1v169.3C335.8,286.7,332.7,292.1,327.7,295z"/>
		</g>
		<path id="inner_x5F_logo" fill="none" stroke="#5E5E5E" stroke-width="0.1" d="M247.1,338.6v-70.8h-8.7v-57.9h-5.9v-52.3l-39.1-4.8l-12,8.2v15.7h-3.6l-11.6,6.7
			v80.6l-2.7,0v-5h-2.6v-43.8h-3.5v-8.4h-3V203l-7.6-10.6h-23.9l-5.4,7H92.8l-12,3.7v-24.8H56.3l-20.9,5.7v51.3l15.7-3.1l8.9,2.4
			l0.2,4.3h-7.5v33.7h2.9v-30.8h7.7l-0.5-9.4l-11.5-3.1l-12.9,2.5v-45.6l16.8-4.6v35.6h2.9v-36.1h20v22.8l-7,2.1v57.4h8.4v2.8h24.2
			v-2.9H82.2v-2.8h-8.4v-52.4l19.4-5.9h22l-0.2,0.2v3.7h-3.7v8.4h-3.7v129.6l2.9,1.7V217.4h3.7V209h3.7v-5.6l6.3-8.1h21l6.2,8.7v5.8
			h3v8.4h3.5V259h-9.7v4.1l-8.7-0.2v6.9H112v2.9h8.2v78.1l2.9,3.1v-81.1h5.7v83.6l2.9,1.7v-85.3h10.8v-6.8l8.7,0.2v-4.1h9.4v5
			l20.8,0.1v93.3h2.9V162.6l8.1-5.5v52.4l-5.3,0.1l0.3,111.4l2.9,0l-0.3-108.2h45.7v55h-0.6v-4.5h-12.5v2.4h-10.2v2h-3.5v56.6h-13.9
			v2.6l-6.9-0.2v46l2.9-1.7v-41.4l6.9,0.2v-2.6h13.9v-56.6h3.5v-2h10.2v-2.4h6.8v4.5h12.2v69.6L247.1,338.6z M181.3,264.1l-12.3,0
			v-79l9.5-5.5h2.8V264.1z M229.6,160.2v49.7h-2.3v-36.6h-2.9v36.6h-6.1v-26.4h-2.9v26.4h-6.1v-38.5h-2.9v38.5h-6.1v-48.7h-2.9v48.7
			h-2.3V156L229.6,160.2z M37.2,303.4v-60.1l-3.8,1v37.3h-2.9v-36.5l-3.4,0.9v24h-2.9v-23.2l-3.9,1.1v28.4h-2.9v-30.6l20.9-5.7h12.4
			v2.9H40.1v62.2L37.2,303.4z M119.5,206.1h30.4v2.9h-30.4V206.1z M116.8,213.6h35.7v2.9h-35.7V213.6z M53.3,275.6h46.1v2.9H56.2
			v35.9l-2.9-1.7V275.6z M28.3,298.3v-5.5h-5.4v-8.2h-9.4c-0.4-0.9-0.7-1.9-1-2.9h13.3v8.2h5.4v10L28.3,298.3z M81.1,221.6v5.4h20
			v2.9H78.2v-8.3H81.1z M78.2,234.3h2.9v6.7h10.7v2.9H78.2V234.3z M78.2,249h2.9v5.4h22.6v2.9H78.2V249z M324.1,223.9v44.3l0.2-0.1
			v25.8c-0.6,0.4-1.1,0.8-1.7,1.1l-1.1,0.7v-18.9h-0.2v-4.6l-18.5,6.2v28.1l-2.9,1.7V152h-5.3v159.2l-2.9,1.7V115.7h-19v70.9h-2.9
			v-69.7l-8.4,5.5v73.7h11.3v127.7l-0.4,0.2h-2.5V199h-8.3v80.9h-2.9v-79.3l-3.2,1.9v123.7h-2.9V200.8l5.9-3.5v-76.4l12.3-8.1h23.8
			v36.4h8.2v126.2l18.5-6.2V221h12.2v2.9H324.1z M150,221.8h2.9v32.7H150V221.8z M144.3,258.9h-2.9V226h2.9V258.9z M135.7,264.8
			h-2.9v-36.2h2.9V264.8z M124.3,249h2.9v15.8h-2.9V249z M127.1,242.9h-2.9v-15.8h2.9V242.9z M115.7,236.4h2.9v28.4h-2.9V236.4z
			 M177.1,279h-3.4v-3.4h3.4V279z M164.8,279h-3.4v-3.4h3.4V279z M173.7,281.7h3.4v3.4h-3.4V281.7z M161.4,281.7h3.4v3.4h-3.4V281.7
			z M161.4,287.8h3.4v3.4h-3.4V287.8z M158.6,297.4h-3.4V294h3.4V297.4z M173.7,300.1h3.4v3.4h-3.4V300.1z M167.6,300.1h3.4v3.4
			h-3.4V300.1z M167.6,306.2h3.4v3.4h-3.4V306.2z M161.4,312.4h3.4v3.4h-3.4V312.4z M140.2,279h-3.4v-3.4h3.4V279z M146.4,285.1H143
			v-3.4h3.4V285.1z M152.5,291.2h-3.4v-3.4h3.4V291.2z M136.8,294h3.4v3.4h-3.4V294z M149.1,300.1h3.4v3.4h-3.4V300.1z M136.8,306.2
			h3.4v3.4h-3.4V306.2z M161.4,324.8h3.4v3.4h-3.4V324.8z M155.2,337h3.4v3.4h-3.4V337z M173.7,355.7h3.4v3.4h-3.4V355.7z
			 M161.4,355.7h3.4v3.4h-3.4V355.7z M173.7,361.8h3.4v3.4h-3.4V361.8z M149.1,318.6h3.4v3.4h-3.4V318.6z M143,324.8h3.4v3.4H143
			V324.8z M136.8,324.8h3.4v3.4h-3.4V324.8z M143,337h3.4v3.4H143V337z M136.8,337h3.4v3.4h-3.4V337z M149.1,343.2h3.4v3.4h-3.4
			V343.2z M136.8,343.2h3.4v3.4h-3.4V343.2z M288.7,121.5h-13.1v-2.9h13.1V121.5z M288.7,142.5h-10.6v-2.9h10.6V142.5z M288.7,173.9
			h-9V171h9V173.9z M275.6,181.5h6.5v2.9h-6.5V181.5z M275.6,213h13.1v2.9h-13.1V213z M275.6,223.4h8.3v2.9h-8.3V223.4z
			 M275.6,244.4h13.1v2.9h-13.1V244.4z M275.6,254.9h13.1v2.9h-13.1V254.9z M288.7,268.3h-7.4v-2.9h7.4V268.3z M275.6,286.3h9.4v2.9
			h-9.4V286.3z M275.6,296.8h13.1v2.9h-13.1V296.8z M74.3,189.4h-3.4V186h3.4V189.4z M65.3,195.5h-3.4v-3.4h3.4V195.5z M61.9,198.3
			h3.4v3.4h-3.4V198.3z M70.9,198.3h3.4v3.4h-3.4V198.3z M61.9,211h3.4v3.4h-3.4V211z M61.9,217.1h3.4v3.4h-3.4V217.1z M61.9,251.3
			h-3.4v-3.4h3.4V251.3z M58.5,260.5h3.4v3.4h-3.4V260.5z M58.5,266.7h3.4v3.4h-3.4V266.7z M67.5,266.7h3.4v3.4h-3.4V266.7z
			 M59.5,283.4h22.9v2.9H59.5V283.4z M99.4,295.2H59.5v-2.9h39.9V295.2z M99.4,304.2h-34v-2.9h34V304.2z M59.5,310.2H87v2.9H59.5
			V310.2z M69.4,322.1l-0.2-0.1v-2.8h30.2v2.9H69.4z M84.9,331l-1.5-0.9v-2h16v2.9H84.9z M191.9,221.4h37.2v2.9h-37.2V221.4z
			 M234.4,234.8h-17.5v-2.9h17.5V234.8z M234.4,245.2h-33.1v-2.9h33.1V245.2z M191.9,247.5h12.2v2.9h-12.2V247.5z M222.3,250.4
			h-12.2v-2.9h12.2V250.4z M191.9,263.2h18.3v2.9h-18.3V263.2z M191.9,273.7h7.9v2.9h-7.9V273.7z M195.5,278.9h9.4v2.9h-9.4V278.9z
			 M191.9,289.3h8.4v2.9h-8.4V289.3z M191.9,299.8h13v2.9h-13V299.8z M191.9,315.4h13v2.9h-13V315.4z M230.8,336.1h5.7v2.1h-5.7
			V336.1z M218.4,332h5.7v2.1h-5.7V332z M218.4,347.6h5.7v2.1h-5.7V347.6z M194.2,347.6h5.7v2.1h-5.7V347.6z M212.3,358.8l-2.3,1.3
			h-3.4V358h5.7V358.8z M230.8,319.9h5.7v2.1h-5.7V319.9z M218.4,319.9h5.7v2.1h-5.7V319.9z M230.8,315.8h5.7v2.1h-5.7V315.8z
			 M230.8,299.6h5.7v2.1h-5.7V299.6z M218.4,295.5h5.7v2.1h-5.7V295.5z M224.1,285.5h-5.7v-2.1h5.7V285.5z M230.8,279.3h5.7v2.1
			h-5.7V279.3z M236.5,277.4h-5.7v-2.1h5.7V277.4z"/>
	
</svg>




<svg id="stage" style="width: 100%;height: 624px !important;" version="1.1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;">
  <clipPath id="scene1-clip">

  </clipPath>
  <clipPath id="scene4-clip">

  </clipPath>
  <g id="scene1" clip-path="url(#scene1-clip)" fill="#cccccc">
    <rect fill="#eeeeff" x="0" y="0" width="100%" height="100%">
      
    </rect>
  </g>
  
  <g id="scene3">
    
  </g>
  
  <g id="scene4" clip-path="url(#scene4-clip)">
    <rect fill="#5E5E5E" x="0" y="0" width="10" height="10">
      
    </rect>
  </g>
</svg>

<script>

$(function(){

  var buildingGroups = $("#buildings_resources #buildings g");
  var buildingWidths = [35,17,20,17,23,48,59,108,73];
  var $stage = $("#scene");
  
  var stageWidth = $('body').width();
  var stageHeight = $('body').height();
  var $mask1 = null;
  $("#stage").css({
    'width': "100%",
    'height': "600px"
  })
  
  console.log("Rendering Scene", stageWidth, stageHeight);
 
  
  var scene1 = function(){
    console.log('Starting scene 1');
    var $scene1 = $("#scene1");
    $mask1 = $("#buildings_resources #mask1").clone();
    $mask1.appendTo("#scene1-clip");
    var lastBuildingIndex = 0;
    var elementIndex = 0;
    var nextXPos = 0;
    
    //reposition and resize mask to fill entire screen
    maskXPos = Math.round(stageWidth/2) - Math.round($mask1[0].getBoundingClientRect().width/2);
    maskYPos = Math.round(stageHeight/2) - Math.round($mask1[0].getBoundingClientRect().height/2);
    scale = Math.max(stageWidth,stageHeight) / ($mask1[0].getBoundingClientRect().width/2);

    $mask1.css({
      'transform-origin': 'center center',
      'transform': 'translate('+maskXPos+'px, '+maskYPos+'px) scale('+scale+')'
    }).data('xPos', maskXPos).data('yPos', maskYPos);

    while(nextXPos < stageWidth){
      while(lastBuildingIndex == elementIndex){
        elementIndex = Math.floor(Math.random() * (buildingGroups.size() - 1) );
      }

      var buildingElement = $(buildingGroups[elementIndex]).clone();

      translateY = stageHeight - 220;
      translateX = nextXPos;
      nextXPos += buildingWidths[elementIndex];

      buildingElement.appendTo($scene1);
      buildingElement.css({
        'transform': 'translate('+translateX+'px,'+stageHeight+'px)'
      });

      buildingElement.attr('class','animated');
      buildingElement.data('xPos', translateX);
      buildingElement.data('yPos', translateY);

      buildingElement.css({
        'transform-origin': 'center bottom',
        'transform': 'translate('+translateX+'px,'+stageHeight+'px) scale(0.2)'
      });

      lastBuildingIndex = elementIndex;
    }

    $scene1.find('g').each(function(i, element){
      setTimeout(function(){
        $(element).css({
          'transform': 'translate('+$(element).data('xPos')+'px,'+$(element).data('yPos')+'px) scale(1)'
        });
      }, Math.round(Math.random() * i)*100);
    });

    setTimeout(scene2, ($scene1.find('g').size() + 5) * 100);
    
    
  }
  



  
  
  
  
  scene1();
  
  var _animatePath = function(path, direction, speed, percentage, start_proc){
    var pathLength = path.getTotalLength();
    path.style.strokeDasharray = pathLength + ' ' + pathLength; 
    path.style.strokeDashoffset = pathLength;
    var animateablePath = path;
    var speed = speed || 1000/60;
    var percentage = percentage || 1;
    var start_proc = start_proc || 0;
    
    $(animateablePath).data('percent', start_proc);
    
    var interval = setInterval(function(){

      animateablePath.style.strokeDashoffset = pathLength +  pathLength/100*$(animateablePath).data('percent')*direction;
      
      $(animateablePath).data('percent', $(animateablePath).data('percent') + percentage);
      if($(animateablePath).data('percent') > 100) {
        clearInterval(interval);
      }
    }, speed);
  }
  
  
});

//# sourceURL=pen.js
</script>
-->	 
	 
	 
	 </section>
		<!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nobottompadding" style="padding-top:0px;">
			
            <div class="container clearfix">

					<div class="col_one_third bottommargin-sm center">
						<img data-animate="fadeInLeft" src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Iphone" class="fadeInLeft animated">
					</div>

					<div class="col_two_third bottommargin-sm col_last">

						<div class="heading-block">
							<h3>Corrupti vero, animi suscipit id facere.</h3>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam.</p>

						<a href="#" class="button button-border button-dark button-rounded button-large noleftmargin topmargin-sm">Learn more</a>

					</div>

				</div>
				
			<div class="clear"></div><div class="line notopmargin"></div>
			    
				<div class="container topmargin bottommargin clearfix testcolor"> 
			 
			 <div class="col_one_fourth bottommargin text-left test-colour1 feature-box" style="margin-top: 20px;">
								<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
									
									<h3 class="textblack">Infra/Erp Solutions</h3>
									<span>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc felis, vehicula quis cursus ut, posuere quis risus.
									</span>
									<div class="topmargin">
										<img src="<?php echo base_url();?>assets/main_site/images/ERP.png">
									</div>
								</div>
			 </div>
			 
			 <div class="col_one_fourth bottommargin test-colour2 feature-box">
								<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
									
									<h3 class="textblack">Business Consulting</h3>
									
									<span>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc felis, vehicula quis cursus ut, posuere quis risus.
									</span>
									
									<div class="topmargin">
										<img style="margin-top: 23px;" src="<?php echo base_url();?>assets/main_site/images/Business_Consultant.png">
									</div>
								</div>
			 </div>
			 
			 <div class="col_one_fourth bottommargin test-colour1 feature-box">
								<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
									
									<h3 class="textblack">Digital Marketing</h3>
									
									<span>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc felis, vehicula quis cursus ut, posuere quis risus.
									</span>
									
									<div class="topmargin">
										<img style="margin-top: 18px;" src="<?php echo base_url();?>assets/main_site/images/Digtal_Marketing.png">
									</div>
								</div>
			 </div>
			 
			 <div class="col_one_fourth bottommargin col_last test-colour2 feature-box">
								<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
									
									<h3 class="textblack">Line Business Solutions</h3>
									
									<span>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc felis, vehicula quis cursus ut, posuere quis risus.
									</span>
									
									<div class="topmargin">
										<img style="margin-top: 23px;" src="<?php echo base_url();?>assets/main_site/images/LINE_OF_BUSINESS.png">
									</div>
								</div>
			 </div>
			 
			 </div>
			
			
			
					<div class="clear bottommargin"></div>
					
					
					
				<div class="section parallax dark nomargin" style="background-image: url('<?php echo base_url();?>assets/main_site/images/Testimonial-min.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.4">

					<div class="heading-block center">
						<h3>What Our Clients Say</h3>
					</div>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-image">
										<i class="icon-user"></i>
									</div>
									<div class="testi-content">
										<p>This  is an amazing Organisation to work with! They has solved all my problems and I will definitely recommend them to accomplish the task that you require them to do. I will certainly work with them  again in future.</p>
										<div class="testi-meta">
											Vince Van Horn
											<span></span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<i class="icon-user"></i>
									</div>
									<div class="testi-content">
										<p>Great Team , completed the project on time and within budget, executed the project as promised. Highly recommended!..</p>
										<div class="testi-meta">
											Kohen Mat
											<span></span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<i class="icon-user"></i>
									</div>
									<div class="testi-content">
										<p>They are excellent , quickly  understands the issue and does a great job. would recommend, and will definitely work with these people again.</p>
										<div class="testi-meta">
											Mike
											<span></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
               				
				<div class="clear"></div>
					
					
					<div class="container topmargin bottommargin clearfix testcolor"> 
					
					
					<div class="col_half">
						<div class="heading-block">
							<h3>Lorem ipsum dolor</h3>
						</div>
						
						<div id="oc-portfolio" class="topmargin owl-carousel portfolio-carousel">

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>

					</div>

					<script type="text/javascript">

						jQuery(document).ready(function($) {

							var ocPortfolio = $("#oc-portfolio");

							ocPortfolio.owlCarousel({
								margin: 20,
								nav: true,
								navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
								autoplay: false,
								autoplayHoverPause: true,
								dots: false,
								responsive:{
									0:{ items:1 },
									600:{ items:2 }
								}
							});

						});

					</script>

					</div>
					
					<div class="col_half col_last">
						<div class="heading-block  bottommargin">
							<h3>Lorem ipsum dolor</h3>
						</div>
						
						
						<div id="oc-images" class="owl-carousel image-carousel">

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="<?php echo base_url();?>assets/main_site/images/portfolio/single/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Lorem ipsum dolor</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
								</div>
							</div>
						</div>

					</div>

					<script type="text/javascript">

						jQuery(document).ready(function($) {

							var ocImages = $("#oc-images");

							ocImages.owlCarousel({
								margin: 20,
								nav: true,
								navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
								autoplay: false,
								autoplayHoverPause: true,
								dots: false,
								navRewind: false,
								responsive:{
									0:{ items:2 }
								}
							});

						});

					</script>

					
						
					</div>
					
					
					</div>
					
					<div class="container clearfix bottommargin center">
						<div class="heading-block  nomargin">
							<h3>SEEN ENOUGH !! LETS WORK TOGETHER..</h3>
							</div>
							
							<a href="#myModal1" data-lightbox="inline" class="button button-rounded button-reveal button-large" style="margin:20px 0px !important;"><i class="icon-map-marker2"></i><span>Contact Us</span></a>
							
							<h4>You can simply contact us for a FREE consultation or a price estimation on any of your business requirements.We will get back to you within in just no time.</h4>	
					</div>
					

				</div>

					
					
				<div class="clear"></div>
				
				
				
				
					 </div>
					 
					 	
					
			</div>

		</section><!-- #content end -->


                <!-- Modal -->
		<div class="modal1 mfp-hide" id="myModal1">
			<div class="block divcenter" style="background-color: #FFF; max-width: 700px;">
				<div class="row nomargin clearfix">
					<div class="col-sm-6" data-height-lg="565" data-height-md="565" data-height-sm="565" data-height-xs="0" data-height-xxs="0" style="background-image: url(<?php echo base_url();?>assets/main_site/one-page/images/page/4.jpg); background-size: cover;"></div>
					<div class="col-sm-6 col-padding" data-height-lg="565" data-height-md="565" data-height-sm="565" data-height-xs="565" data-height-xxs="565">
						<div>
						<h4 class="uppercase ls1">Contact Us</h4>
						<form action="<?php echo base_url();?>home/save_serviceInfo" method="post" class="clearfix" style="max-width: 300px;" onsubmit="return validate();">
							<div class="col_full">
								<label for="" class="capitalize t600">Name:</label>
								<input type="text" id="name"  name="name" class="sm-form-control" />
								<span id="err_name" class="error" style="display:none;color:red;">Please Enter Name</span>
							</div>
							<div class="col_full">
								<label for="" class="capitalize t600">Email:</label>
								<input type="email" id="email"  name="email"  class="sm-form-control" />
								<span id="err_email" class="error" style="display:none;color:red;">Please Enter Email</span>
							</div>
							<div class="col_full">
								<label for="" class="capitalize t600">Phone:</label>
								<input type="text" id="phone"  name="phone" class="sm-form-control" />
								<span id="err_phone" class="error" style="display:none;color:red;">Please Enter Phone</span>
							</div>
							<div class="col_full">
								<label for="" class="capitalize t600">Message:</label>
								<textarea name="message" id="message"  class="sm-form-control" style="resize:none;"></textarea>
							    <span id="err_message" class="error" style="display:none;color:red;">Please Enter Message</span>
							</div>
                                                    
                                                    <div class="col_full">
							<div class="g-recaptcha" data-sitekey="6Le44yETAAAAAJqm_rplMDaKvUpQH8GxDUx-3gF6"></div>
						    </div>
                                                    
							<div class="col_full nobottommargin">
								<button type="submit" class="button button-rounded button-small button-dark nomargin" value="submit">Submit</button>
							</div>
						</form>
						<p class="nobottommargin"><small class="t300"><em></em></small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		 <script src='https://www.google.com/recaptcha/api.js'></script>
                 
		<script type="text/javascript" src="<?php echo base_url();?>assets/main_site/js/jquery.maskedinput.js"></script>
        
		<script type="text/javascript">
			$(function() {
				$.mask.definitions['~'] = "[+-]";
				
				$("#phone").mask("(999) 999-9999");
				
				
			   
			});
			
			function validate()
			{
				$(".error").hide();
				var name =$("#name").val();
				var email =$("#email").val();
				var phone =$("#phone").val();
				var message =$("#message").val();
				if(name=="")
				{
					$("#err_name").show();
					return false;
				}
				if(email=="")
				{
					$("#err_email").show();
					return false;
				}
				if(phone=="")
				{
					$("#err_phone").show();
					return false;
				}
				if(message=="")
				{
					$("#err_message").show();
					return false;
				}
				return true;
			}
			
		</script>
		
		<?php  $result=$this->uri->segment(2);
						
			  if($result=="success")
			  {
		?>
		    
		    <script> 
			    $(document).ready(function(){
			      
				  SEMICOLON.widget.notifications($('#custom-notification-message'));
				  return false;
			  
		         });
		    </script>
		
			  <?php }?>
		
		<div style="display:none;">
			<div id="custom-notification-message" data-notify-position="top-right" data-notify-type="success" data-notify-msg="<i class=icon-info-sign></i> Your Information Is Saved Successfully !!!" ></div>
	    </div>
