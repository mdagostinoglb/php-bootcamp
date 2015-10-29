<?php
	class Book{
		public function changeBook(){
			$sid=$_GET['sid'];
			$stitle=mysql_real_escape_string($_GET['stitle']);
			$sprice=filter_var($_GET['sprice'], FILTER_VALIDATE_FLOAT);
			$sdesc=mysql_real_escape_string($_GET['sdesc']);
			
			$link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar al servidor: ' . mysql_error());
			mysql_select_db('books') or die('No se pudo seleccionar la base de datos');
			mysql_query("SET NAMES 'utf8'");
			$query="UPDATE `books` SET `title` = '$stitle', `price` = '$sprice', `description` = '$sdesc' WHERE `books`.`id` = '$sid'";
			$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			if($result){
				echo "Insertado.";
			}
			mysql_close($link);
		}
	}
	
	$book=new Book();
	$book->changeBook();
	
	echo "<br><br>";
	echo "<a href='index.php'>Back</a>";

?>
