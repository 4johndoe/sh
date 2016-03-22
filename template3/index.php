<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="compiled/flipclock.css">
	</head>
	<body>
	<br>
		<div class="clock"></div>



		<script src="compiled/jquery-1.12.2.js"></script>
		<script src="compiled/flipclock.min.js"></script>

		<script type="text/javascript">
			var clock = $('.clock').FlipClock(3600 * 24 * 3, {
				clockFace: 'DailyCounter',
				// autoStart: false,
				countdown: false
			});
		</script>
	</body>
</html>