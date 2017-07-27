<?php
	require_once('common.php');
	checkUser();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Login</title>
   <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="main">
      <div class="caption">Login System </div>
      <div id="icon">&nbsp;</div>
      <div id="result">
		Привет, <?php echo $_SESSION['userName']; ?> ! <br/>
		<p><a href="logout.php"> Выйти</a></p>
		<p><a href="list.php"> Список тестов</a></p>
		<p><a href="admin.php"> Загрузить новый тест</a></p>
	  </div>	
	      </div>
</body>   
