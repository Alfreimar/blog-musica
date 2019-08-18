<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mustin</title>
<link rel="stylesheet" href="Css/Index.css" />
</head>

<body>
<div class="Superios">
<h1> Blog de musica </h1>
    <a href="blog.php"><input type="submit" name="Blog" value="Blog"></a>
     <a href="Formulario.php"><input type="submit" name="Agrega nueva cancion" value="Agrega nueva cancion"></a>
      <a href="Contactar.php"><input type="submit" name="Cotactar" value="Suscribete"></a>
      <hr/>
</hr>
</div>

<?php

$miconexion=mysqli_connect("localhost", "root", "", "bdblog");

if(!$miconexion){
	
	echo "La conexión ha fallado " .mysql_error ();
	exit();
}
$consulta= "SELECT* FROM CONTENIDO";

if($resultado=mysqli_query($miconexion, $consulta)){
	while($registro=mysqli_fetch_assoc($resultado)){
	
	echo "<h3>" . $registro['Titulo'] . " </h3> ";

	echo "<div  style='width:40px'>" . $registro['Comentario'] . " </div></br></br> ";
	if ($registro['Imagen'] !=""){
	
	echo "<img src='imagenes/" . $registro['Imagen'] . "' width='300px' />";
	}
	
	
 echo "<hr/>";
 
	}
}

?>
 <hr/>
<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost%3A8080/blog/blog.php"><img src="img/facebook-hackers.png" width="100" height="100" /></a>
</body>

</body>
</html>
