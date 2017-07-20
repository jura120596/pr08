<form action="" method="post">
 <p>Поддомен: <input type="text" name="sub" /></p>
 <p><input type="submit" /></p>
</form>
<?php 
if (isset($_POST['sub'])){
	$sub = $_POST['sub']
	echo $sub.'pr08.iktiscloud.ru'; 
}
?>