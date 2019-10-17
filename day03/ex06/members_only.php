<?php 
if (!isset($_SERVER['PHP_AUTH_USER'])) {
	header('WWW-Authenticate: Basic realm="Espace membres"');
} else {
	if (strcmp($_SERVER['PHP_AUTH_USER'], "zaz") == 0
		&& strcmp($_SERVER['PHP_AUTH_PW'], "jaimelespetitsponeys") == 0)
	{
		$content =  file_get_contents("../img/42.png");
		$content = base64_encode($content);
		?>
		<html><body>
		Bonjour Zaz <br />
				
		<?php
			echo '<img src="data:image/png;base64,' . $content . '">' . PHP_EOL;
		?>
		</body></html>
		<?php
		echo "\n";
	}
	else
	{
		header('HTTP/1.0 401 Unauthorized');
		echo '<html><body>Cette zone est accessible uniquement aux membres du site</body></html>';
	}
}
?>