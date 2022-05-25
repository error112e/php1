<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>LOGOWANIE</title>
</head>

<body>
		<?php if (empty($_SESSION['user'])) : ?>
	<form action="login.php" method="post">
	
		<input type="text" name="login" /> <br /><br />
		<input type="password" name="password"  /> <br /><br />
		<button type="submit">Zaloguj Się </button>
	
	</form>
			<?php else : ?>
				<p>Witaj, <?=$_SESSION['user']?></p>
				<a href="logout.php">Wyloguj Się</a>
			<?php endif; ?>
</body>
</html>