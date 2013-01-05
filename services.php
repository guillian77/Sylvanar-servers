<?php require_once("configs.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" xmlns:xml="http://www.w3.org/XML/1998/namespace">
<head>
<title><?php echo $website['title']; ?> - <?php echo $Services['Services']; ?></title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/wow.png" type="image/x-icon" />
<link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="Battle.net Search" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css?v15" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css?v15" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css?v15" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css?v15" /><![endif]-->
<link title="World of Warcraft - News" href="wow/en/feed/news" type="application/atom+xml" rel="alternate" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow.css?v4" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/services/services-index.css?v4" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/services/services-ie6.css?v4" /><![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie.css?v4" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie6.css?v4" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie7.css?v4" /><![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="wow/static/local-common/js/core.js?v15"></script>
	<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v15"></script>
<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[
try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
//]]>
</script>
<![endif]--></head>
<body class="en-gb services-home logged-in">

<div id="wrapper">
<?php $page_cat="services"; include("header.php"); ?>
<div id="content">
<div class="content-top">
<div class="content-trail">
<ol class="ui-breadcrumb">
<li><a href="index.php" rel="np" class=""><?php echo $website['title']; ?></a></li>
<li class="last"><a href="services.php" rel="np"><?php echo $Serv['Serv']; ?></a></li>
</ol>
</div>
<div class="content-bot">	
	<div class="bg-body">
		<div class="bg-bottom">		
			<div class="contents-wrapper">
			
				<div class="left-col" align="left">
					<div class="section-title">
					<?php
					if(isset($_GET['ref']) && $_GET['ref'] != ""){
					//Ids
					/*
					1 - Change Avatar
					*/
					
					switch($_GET['ref']){
					case "avatar":
					include("services/avatar.php");
					break;
					default:
					include("services/redirect.php");
					break;
					}
					}else{
					?>
					<span><?php echo $website['title']; ?><?php echo $Serv['Serv1']; ?></span>
					<p><?php echo $Serv['Serv2']; ?></p>
					</div>
					
					<div class="main-services">
					<a href="#" target="_blank"><img src="/images/logo_service.png"></a><br/>
					Dans PlanetSide 2, vous retrouverez toutes les fonctionnalités exceptionnelles du précédent opus : des combats massivement multijoueurs aux différents empires, en passant par les gigantesques continents où se déroulent des batailles sans merci au sol ou dans les airs. Mais vous découvrirez aussi de nouvelles fonctionnalités qui sont partie intégrante de tous les nouveaux MMO et FPS disponibles. Grâce à une technologie de pointe, au long travail avec les joueurs et à un nouveau moteur de jeu MMO, logiciel propriétaire de SOE appelé Forgelight™, PlanetSide 2 propose un FPS avec une communauté, une personnalisation et des combats massivement palpitants.

À travers les continents d’Auraxis, des milliers de joueurs vont s’affronter dans des batailles enragées pour remporter le contrôle de territoires clés et de ressources indispensables à leur empire. Grâce à un arbre de compétences important et à un système fondé sur les classes, les joueurs auront la possibilité de personnaliser leur soldat, leurs armes ainsi que leurs véhicules pour les adapter ainsi au mieux à leur style de jeu ou aux besoins de leur escouade, leur unité ou leur empire. Les batailles peuvent durer pendant des jours ou des semaines, les joueurs devront donc passer des alliances et former des unités de combat spécialisées. Ils pourront ainsi mettre en place des tactiques et des stratégies à long terme. Les combats, pouvant désormais se dérouler sur terre ou dans les airs, seront plus gigantesques et intenses que jamais.
					<br/><br/>
					<hr/>
					<p><font size="3"><b>Jouer avec nous</b></font>
					<hr/>
					<p>Rejoignez nous sur le serveur européen Lithcorp et jouer en équipe.
					<p>- <a href="http://planetside2.eu/users/new" target="_blank">Créer un compte sur planetside2.eu !</a>
					<p>- <a href="http://sylvanar-servers.com/register.php">Créer un compte sur notre site !</a>
					<p>
					<div align="right">
					<p>&nbsp;
					<p>&nbsp;
					<a href="/services.php">Page 1</a> | <a href="/services2.php">Page 2</a> | <a href="/services3.php">Page 3</a> &nbsp;
					</div>
						<span class="clear"><!-- --></span>
					</div>
				<?php
				}
				?>
				</div>
				<div class="right-col">
					<div class="sub-services">					
							<div class="sub-services-section">
								<div class="sub-title">
									<span><?php echo $Serv['Serv16']; ?></span>
								</div>
								<ul>
								<li><a href="ban-list.php" class="c3-l6"><span><?php echo $Serv['Serv5']; ?></span></a></li>
								<li><a href="javascript:;" class="c1-l1"><span><?php echo $Account6['Account6']; ?></span></a></li>
								<li><a href="javascript:;" class="c1-l2"><span><?php echo $Account5['Account5']; ?></span></a></li>
										<!--<li><a href="javascript:;" class="c1-l3"><span>Add an Authenticator</span></a></li>
										<li><a href="javascript:;" class="c1-l4"><span>Authenticator FAQ</span></a></li>-->
								</ul>					
							</div>
							<div class="sub-services-section">
								<div class="sub-title">
									<span><?php echo $Serv['Serv17']; ?></span>
								</div>
								<ul>
										<li><a href="javascript:;" class="c4-l1"><span><?php echo $Friends['Keepthem']; ?></span></a></li>
										<!--<li><a href="javascript:;" class="c4-l2"><span>World of Warcraft Magazine</span></a></li>-->
										<li><a href="javascript:;" class="c4-l3"><span><?php echo $Serv['Serv18']; ?></span></a></li>
								</ul>					
							</div>
							<div class="sub-services-section">
								<div class="sub-title">
									<span><?php echo $Serv['Serv19']; ?></span>
								</div>
								<ul>
										<li><a href="javascript:;" class="c3-l1"><span><?php echo $Serv['Serv20']; ?></span></a></li>
										<li><a href="javascript:;" class="c3-l2"><span><?php echo $Serv['Serv21']; ?></span></a></li>
										<li><a href="javascript:;" class="c3-l3"><span><?php echo $Serv['Serv22']; ?></span></a></li>
										<li><a href="javascript:;" class="c3-l4"><span><?php echo $Serv['Serv23']; ?></span></a></li>
										<li><a href="javascript:;" class="c3-l5"><span><?php echo $Serv['Serv24']; ?></span></a></li>
										<!--<li><a href="javascript:;" class="c3-l6"><span>Free Character Migration</span></a></li>-->
										<!--<li><a href="javascript:;" class="c3-l7"><span>Public Test Realm</span></a></li>-->
								</ul>					
							</div>
							<div class="sub-services-section">
								<div class="sub-title">
									<span><?php echo $Serv['Serv25']; ?></span>
								</div>
								<ul>
								<li><a href="javascript:;" class="c2-l1"><span><?php echo $Serv['Serv26']; ?></span></a></li>
								<li><a href="services.php?ref=avatar" class="c4-20"><span><?php echo $Serv['Serv27']; ?></span></a></li>
								<li><a href="javascript:;" class="c2-l2"><span><?php echo $Serv['Serv28']; ?></span></a></li>
								<li><a href="javascript:;" class="c2-l3"><span><?php echo $Serv['Serv29']; ?></span></a></li>
								<li><a href="game_client.php" class="c2-l4"><span><?php echo $Serv['Serv30']; ?></span></a></li>
										<!--<li><a href="javascript:;" class="c2-l5"><span>Download Language Pack</span></a></li>-->
								</ul>
                            </div>
							<div class="sub-services-section">
								<div class="sub-title">
									<span><?php echo $Media['Multimedia']; ?></span>
								</div>
								<ul>
										<li><a href="<?php echo $website['root']; ?>media/send_media.php" class="c1-l3"><span><?php echo $Media['SendMedia']; ?></span></a></li>
										
								</ul>					
							</div>                                					
							</div>
					</div>	
				
				<br />
				<span class="clear"><!-- --></span>
				<span class="clear"><!-- --></span>
				<span class="clear"><!-- --></span>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?php include("footer.php"); ?></body>
</html>