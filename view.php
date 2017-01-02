<HTML>
	<HEAD>
		<TITLE>CodeDB</TITLE>
		<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</HEAD>
	<BODY>
		<div id="title">
			<a href="index.php"><img src="img/back.png" width="24px" height="24px"></a>
			<font fontsize="17" color="white"><b>
				<?php
					//echo $_GET['fname'];
					echo $_GET['tname'];
				?></b>
			</font>
		</div>
		<div id="codeBody">
			<?php
				$handle = fopen($_GET['fname'], "r");
				if ($handle) {
						while (($line = fgets($handle)) !== false) {
								echo $line."<br>";
						}
						fclose($handle);
				}		
			?>
		</div>
	</BODY>
</HTML>
