<!DOCTYPE html>
<html xml:lang="en" lang="en">
	<head>
		<title><?php print isset($title) ? $title : 'PAL'; ?></title>
		<base href="<?php print base_url(); ?>" />
		<meta name="author" content="Wil Wade" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
		<link rel="stylesheet" href="assets/css/default.css" />
		<?php print $_scripts; ?>
		<?php print $_styles; ?>

		<script>
			$(document).ready(function() {
				// disable ajax nav
				$.mobile.ajaxLinksEnabled = false;
			});
		</script>

	</head>
	<body>

		<div id="content">
			<?php print $content; ?>
		</div>


	</body>
</html>