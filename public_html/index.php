<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;

/*set page title here*/
$PAGE_TITLE = "SmoothState.js Site";

/*load head-utils.php*/
require_once("php/partials/head-utils.php");
?>

	<body class="sfooter">
		<div class="sfooter-content">

			<!-- insert header -->
			<?php require_once("php/partials/header.php");?>

			<!-- begin welcome area-->
			<section id="welcome">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div class="jumbotron text-center animated fadeIn">
								<h1>Welcome Text Here</h1>
								<p class="lead">byline here....</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- begin page leader -->
			<section id="page-leader" class="p-y-4 animated slideInRight">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h1>This is a Page Title</h1>
							<p class="lead">Business plan ramen hypotheses hackathon holy grail series A financing partnership assets incubator. Hypotheses A/B testing iPhone innovator...</p>
						</div>
					</div>
				</div>
			</section>

			<!-- begin main content -->
			<main id="main-content" class="animated slideInUp">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 col-sm-6 m-b-4">
							<h3>Heading 3</h3>
							<p>Startup equity incubator series A financing gen-z MVP freemium buzz vesting period network effects iPad. Early adopters seed money monetization partner network marketing angel investor deployment MVP A/B testing creative. Entrepreneur buzz seed money. Founders iteration virality business-to-business startup venture influencer ecosystem marketing.</p>
						</div>
						<div class="col-md-4 col-sm-6 m-b-4">
							<h3>Heading 3</h3>
							<p>Startup equity incubator series A financing gen-z MVP freemium buzz vesting period network effects iPad. Early adopters seed money monetization partner network marketing angel investor deployment MVP A/B testing creative. Entrepreneur buzz seed money. Founders iteration virality business-to-business startup venture influencer ecosystem marketing.</p>
						</div>
						<div class="col-md-4 col-sm-12 center-block m-b-4">
							<h3>Heading 3</h3>
							<p>Startup equity incubator series A financing gen-z MVP freemium buzz vesting period network effects iPad. Early adopters seed money monetization partner network marketing angel investor deployment MVP A/B testing creative. Entrepreneur buzz seed money. Founders iteration virality business-to-business startup venture influencer ecosystem marketing.</p>
						</div>
					</div>
				</div>
			</main>
		</div><!--/.sfooter-content-->

		<!-- begin footer -->
		<?php require_once("php/partials/footer.php");?>
	</body>
</html>