<?php require 'header.php'; ?>

<div class="contenedor">
	<h1 class="titulo">La logia MC</h1>
	<a href="cerrar.php">Cerrar sesión</a>
	<hr class="border">
	<?php foreach ($posts as $post): ?>
	<div class="post">
		<article>
			<h2 class="titulo"><a href="single.php?id=<?php echo $post['id'] ?>"><?php echo $post['titulo']; ?></a></h2>
			<p class="fecha" style="color: #000000"><?php echo fecha($post['fecha']); ?></p>
			<div class="thumb">
				<a href="single.php?id=<?php echo $post['id']; ?>">
					<img src="<?php echo RUTA; ?>/images/<?php echo $post['thumb']; ?>" alt="imagen">
				</a>
			</div>
			<p class="extracto" style="color: #000000"><?php echo $post['extracto']; ?></p>
			<a href="single.php?id=<?php echo $post['id']; ?>">Continuar leyendo</a>
		</article>
	</div>
	<?php endforeach ?>

	<?php require 'paginacion.php'; ?>
</div>

<?php require 'footer.php'; ?>
