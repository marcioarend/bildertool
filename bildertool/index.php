<?php
	require_once("config.php");
?>
<html>

	<title>
		BilderTool
	</title>
	
	
	<head>
	
	<script type="text/javascript" src="js/main_js.js"></script>
	
	<!-- ALLE JS UND CSS Aufrufe -->
	

	</head>

	
	<body>
		<div>
			<?php
				if(!$_REQUEST['site'])
				include(SITES_PATH."HG.php"); 
				else
				include(SITES_PATH.$_REQUEST['site'].".php");
			?>
		</div>
		
		<!--div class="div_footer">
		
		<a href="index.php?site=HG"><p>Start</p></a>
			
		</div-->
	</body>
</html>