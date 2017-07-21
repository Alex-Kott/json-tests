<?php
/*
header('Content-Type: text/html; charset=utf-8');

$dir ='/SRC/Test_folder';
$list=scandir($dir);
$z=count(scandir('/SRC/Test_folder'))-1;
$x=2;
do {
    echo $list[$x],"  ", " ", "Файл номер - ", $x-1, "</br>"; 
    
}   while ($x++<$z);
    
 //*/
 
 ?>

<?php
$files = scandir("tests");
var_dump($files);
unset($files[0]);
unset($files[1]);
foreach($files as $file){
	$testNumber = (int) pathinfo($file, PATHINFO_FILENAME);
	echo "<a href='test.php?test=$testNumber'><h4>Тест номер $testNumber</h4></a>";
}




?>


<!--

<?php 
  isset($_GET['name']) ;
echo '<br>';
?> 
<form action="test.php""> 
Для перехода к тесту <br> Введите Ваше имя   : <input type="text" name="name"> 
<br/> 
<input type="submit" value="OK"> 
-->
<!-- тест работы кнопки
<form enctype="multipart/form-data" action="test.php" method="POST">
 <input type="submit" value="КНОПКА" />
</form> 
-->
</body> 
</html>

