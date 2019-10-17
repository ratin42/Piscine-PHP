<?php
	session_start();
?>
<html>
	<body>
		<form action="index.php" method="get">
			Identifiant: <input type="text" name="login" value="">
			<br />
			Mot de passe: <input type="password" name="passwd">
			<input type="submit" name="submit" value="OK">
		</form>
	</body>
</html>