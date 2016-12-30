<HTML>
	<HEAD>
		<TITLE>CodeDB</TITLE>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	</HEAD>
	<BODY padding="20%">
		<center>
			<br><br><br><br><br><br><img src="img/logo.png" width="40%"><br><br><br>
				<form method="post" action="search.php">
				<input type="text" name="query">
				<select name="language">
					<?php
						$languages=scandir("code");
						foreach($languages as $language){
							if($language!="." and $language!=".."){
								echo "<option value='".$language."'>".$language."</option>";
							}
						}
					?>
				</select>
				<button type="submit">Find</button>
			</form><br>
			<hr>
			<a href="addcode.php">Click</a> to add code to DataBase
		</center>
	</BODY>
</HTML>