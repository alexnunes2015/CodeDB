<HTML>
	<HEAD>
		<TITLE>Add Code to CodeDB</TITLE>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
	</HEAD>
	<BOD>
		<div id="title">
			<form action="save.php" method="post">
				<table width="100%" id="tableName">
					<td>
					<a href="index.php"><img src="img/back.png" width="24px" height="24px"></a>
					</td>
					<td>Name:  <input type="text" name="name"></td>
					<td>Language:  <select name="language"><?php
							$languages=scandir("code");
							foreach($languages as $language){
								if($language!="." and $language!=".."){
									echo "<option value='".$language."'>".$language."</option>";
								}
							}
						?>
						</select>
					</td>
					<td>
						<button type="submit">Save</button>
					</td>
				</table>
			</form>
		</div>
		<div id="codeBody">
			
		</div>
	</BOD>
</HTML>