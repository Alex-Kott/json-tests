
<?php
$files = scandir("tests");
unset($files[0]);
unset($files[1]);
foreach($files as $file){
	$testNumber = (int) pathinfo($file, PATHINFO_FILENAME);
	echo "<a href='test.php?test=$testNumber'><h4>Тест номер $testNumber</h4></a>";
}
?>

