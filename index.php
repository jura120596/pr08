<form action="" method="post">
 <p>Поддомен: <input type="text" name="sub" /></p>
 <p><input type="submit" /></p>
</form>
<?php 
if (isset($_POST['sub'])){
	echo '<a href="http://'.$_POST['sub'].'.pr08.itiscloud.ru">http://'.$_POST['sub'].'.pr08.itiscloud.ru</a>'; 
		$a = shell_exec('bash date > lastcreate.txt');
		echo $a
		shell_exec("bash t.bash ".$_POST['sub']."");
}
?>