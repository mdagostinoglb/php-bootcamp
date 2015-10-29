<?php
	class Book{
		public function deleteBook(){
			$tid=$_GET['tid'];
			
			$link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar al servidor: ' . mysql_error());
			mysql_select_db('books') or die('No se pudo seleccionar la base de datos');
			mysql_query("SET NAMES 'utf8'");
			$query="DELETE FROM `books` WHERE `books`.`id` = $tid";
			$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			if($result){
				echo "Eliminado.";
				unlink("archivo".$tid.".html");
			}
			mysql_close($link);
		}
	}
	
	$book=new Book();
	$book->deleteBook();
	
	echo "<br><br>";
	echo "<a href='index.php'>Back</a>";
?>
