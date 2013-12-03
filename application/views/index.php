<!DOCTYPE html>
<html>
	<head>
		<title><? echo $titulo;?></title>
	</head>
	<body>
		<h1>Aplicación Dinámica con CodeIgniter</h1>
		<br>
		<br>
		<center>
		<?
		foreach ($articulos as $item):
		?>
			<h2><? echo $item->nombre_articulo;?></h2>
			<strong>Fecha de publicación: </strong><? echo $item->fecha_articulo;?>
			<p><? echo $item->contenido_articulo;?></p>
                        <span><? echo $item->id_categoria;?></span>
			<hr>
		<?
	
		endforeach;
		?>
		</center>
	</body>
</html>