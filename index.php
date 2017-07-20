<form action="" method="post">
 <p>Поддомен: <input type="text" name="sub" /></p>
 <p><input type="submit" /></p>
</form>
<?php 
if (isset($_POST['sub'])){
	$sub = $_POST['sub']
	echo $sub.'pr08.iktiscloud.ru'; 
	if (!file_exists($sub)) {
		mkdir($sub , 0777, true);
	}else{
		echo 'sub domain exists';
	}
	$file = 'index.php2';
	$newfile = $sub.'/index.php';
}
?>