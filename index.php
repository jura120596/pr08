<form action="" method="post">
 <p>Поддомен: <input type="text" name="sub" /></p>
 <p><input type="submit" /></p>
</form>
<?php 
if (isset($_POST['sub'])){
	echo '<a href="http://'.$_POST['sub'].'.pr08.itiscloud.ru">http://'.$_POST['sub'].'.pr08.itiscloud.ru</a>'; 
	if (!file_exists($_POST['sub'])) {
			mkdir($_POST['sub'] , 0777, true);
		$file = 'index.php2';
		$newfile = $_POST['sub'].'/index.php';
		if (!copy($file, $newfile)) {
			echo "не удалось скопировать $file...\n";
		}
		shell_exec('bash ./t.bash');
	}else{
		echo 'sub domain exists';
	}
}
?>