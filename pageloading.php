<?php
?>
<html>
<head>
	<style>
		#loader {
			border: 12px solid #f3f3f3;
			border-radius: 50%;
			border-top: 12px solid #444444;
			width: 70px;
			height: 70px;
			animation: spin 1s linear infinite;
		}
		@keyframes spin {
			100% {
				transform: rotate(360deg);
			}
		}
		.center {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			margin: auto;
		}
	</style>
</head>
<body>
	<div id="loader" class="center"></div>	
	<script>
		document.onreadystatechange = function() {
			if (document.readyState !== "complete") {
				document.querySelector(
				"body").style.visibility = "hidden";
				document.querySelector(
				"#loader").style.visibility = "visible";
			} else {
				document.querySelector(
				"#loader").style.display = "none";
				document.querySelector(
				"body").style.visibility = "visible";
			}
		};
	</script>
</body>
</html>
