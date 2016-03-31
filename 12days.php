<!DOCTYPE html>
<html>
	<head>
		<title>The 12 Days of Xmas</title>

		<!-- Meta Info -->
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

		<!-- Stylesheet -->
		<link href="12days.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>
		<img src="assets/tree.gif" alt="xmas tree" />
		12 Days of Xmas
		<img src="assets/tree.gif" alt="xmas tree" />
	</h1>

	<div id="box">
		<?php
		# loop over each day of xmas
		for ($day = 1; $day <= 12; $day++) {
			?>

			<div class="day">
				<p>
					On day <strong>#

					<?php
					print $day;
					?>

					</strong>
					of Xmas my true love gave to me...
				</p>

				<div>
					<?php
					# count out the right # of presents for the given day
					for ($gift = $day; $gift >= 1; $gift--) {
						for ($i = 1; $i <= $gift; $i++) {
							print "<img src='assets/gift$gift.jpg' alt='an xmas gift' />\n";
						}
						print "<br/>";
					}
					?>
				</div>

			</div>
			<?php
		}
		?>
		</div>
	</body>
</html>
