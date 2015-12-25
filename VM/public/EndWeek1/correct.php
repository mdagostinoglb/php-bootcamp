<?php
	class Book{
		public function createBook(){
			$ntitle=mysql_real_escape_string($_GET['ntitle']);
			$nprice=filter_var($_GET['nprice'], FILTER_VALIDATE_FLOAT);
			$ndesc=mysql_real_escape_string($_GET['ndesc']);
			
			$link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar al servidor: ' . mysql_error());
			mysql_select_db('books') or die('No se pudo seleccionar la base de datos');
			mysql_query("SET NAMES 'utf8'");
			$query="INSERT INTO `books`(`title`,`price`,`description`) VALUES ('$ntitle','$nprice','$ndesc')";
			$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			if($result){
				echo "Insertado.";
			}
			mysql_close($link);
		}
	}
	
	$book=new Book();
	$book->createBook();
	
	echo "<br><br>";
	echo "<a href='index.php'>Back</a>";
?>
