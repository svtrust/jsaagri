<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>staffaddmin</title>
</head>
<body>

<div class="container">
	<div class="header">
		
	</div>
	<div class="main">
		<?php

		if(isset($_SESSION['staffadmin']))
		{

		}
		else{

			?>
			<div>
				<form>
					<label>
						User name<input type="text" name="" class="uname" id="uname">
					</label>
					<label>
						User pass<input type="text" name="" class="upass" id="upass">
					</label>
					<label>
						<button id="admin_login_btn">Login</button>
					</label>
				</form>
			</div>
			<?
		}

		?>
	</div>
	<div class="footer">
		
	</div>
</div>

</body>
</html>