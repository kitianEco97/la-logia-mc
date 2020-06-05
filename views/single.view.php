<?php require 'header.php'; ?>

<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo"><?php echo $post['titulo']; ?></h2>
			<p class="fecha" style="color: #000000"><?php echo fecha($post['fecha']); ?></p>
			<div class="thumb">
				 <img src="<?php echo RUTA; ?>/images/<?php echo $post['thumb']; ?>" alt="">
			</div>
			<p class="extracto" style="color: #000000"><?php echo nl2br($post['texto']); ?></p>
		</article>
	</div>
</div>

<?php require 'footer.php'; ?>
