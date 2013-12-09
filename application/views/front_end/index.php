		<h1>Aplicación Dinámica con CodeIgniter</h1>
                
                <section class="contenido">
		<?
		foreach ($articulos as $item):
//                      Muestra los detalles de un articulo por el nombre del articulo o el ID
//                      $url = 'articulo/';
//                      $url .= url_title(convert_accented_characters($item->nombre_articulo),'-',TRUE);
                        ?>
                    <h2><? 
//                      Muestra los detalles de un articulo por el nombre del articulo o el ID
//                      echo anchor($url,$item->nombre_articulo);
                          echo anchor('articulo/'.$item->url_articulo,$item->nombre_articulo);?></h2>
			<strong>Fecha de publicación: </strong><? echo $item->fecha_articulo;?>
			<p><? echo $item->contenido_articulo;?></p>
                        <span><? echo $item->id_categoria;?></span>
			<hr>
		<?
		endforeach;
                echo 'El tiempo de ejecución entre el inicio y el medio : ' . $this->benchmark->elapsed_time('inicio', 'medio');
                 ?>
                <br>
                 <?
                echo 'El tiempo de ejecución entre el medio y el fin : ' . $this->benchmark->elapsed_time('medio', 'fin');
                ?>
                 <br>
                 <?
                echo 'El tiempo de ejecución entre el inicio y el fin : ' . $this->benchmark->elapsed_time('inicio', 'fin');
                ?>
                 <br>
                 <?
                echo 'La memoria usada : ' . $this->benchmark->memory_usage();
                ?>
		</section>