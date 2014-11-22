<?php include 'header.tpl.php'; ?>
	<article id="content" class="content column-full">
	<div class="container text-center">
	<style type="text/css">
		.isErro {
			border: 1px solid red;
		}
	</style>
	<h1>Novo Post</h1>
		
		<form method="post" action="insert_post.php">
			<label>
				<input class="form-control <?php if(isset($_GET["$msgErr"])) {
					echo "isErro";
				} ?>" type="text" name="title" id="title" placeholder="Título da página">
			</label><br>
			<label>
				<input class="form-control <?php if(isset($_GET["$msgErr"])) {
					echo "isErro";
				} ?>" type="text" name="descricao" id="descricao" placeholder="Descrição">
			</label><br>
			<textarea class="form-control <?php if(isset($_GET["$msgErr"])) {
					echo "isErro";
				} ?>" name="conteudo" id="conteudo" rows="5" placeholder="Conteúdo do post"></textarea><br><br>

			<input type="submit" class="btn btn-primary" value="Enviar">

		</form>
		</div>
	</article><!-- #content -->
<?php include 'footer.tpl.php'; ?>
