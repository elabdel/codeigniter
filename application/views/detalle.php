<!DOCTYPE html>
<html>
	<head>
		<title><? echo $titulo;?></title>
	</head>
	<body>

			<h2><? echo $detalles->nombre_articulo;?></h2>
			<strong>Fecha de publicación: </strong><? echo $detalles->fecha_articulo;?>
			<p><? echo $detalles->contenido_articulo;?></p>
                        <span><? echo $detalles->id_categoria;?></span>
	</body>
</html>

