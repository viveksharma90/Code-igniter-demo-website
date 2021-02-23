<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?= $title; ?></title>
		<?php include_once 'shared/common_css.php'; ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<link rel="shortcut icon" href="assets/img/google-favicon.png" />
	</head>
	<body>


		<div class="page">


			<!-- <div id="preloader">
				<div id="status">&nbsp;</div>
			</div> -->

			<?php include_once 'shared/header.php'; ?>

			<?= $content; ?>

			<?php include_once 'shared/footer.php'; ?>
				<!--back-to-top start-->
				<!-- <a id="totop" href="#top">
						<i class="fa fa-angle-up"></i>
				</a> -->
				<!--back-to-top end-->

		</div>

		<?php include_once 'shared/common_js.php'; ?>
	</body>
</html>
