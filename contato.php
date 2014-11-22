<?php include 'header.tpl.php'; ?>
	<article id="content" class="content column-full">
	<div class="container text-center">
		<h1>Contato</h1>

		<form name="form_contato" action="" method="post">
			<label>
				<input class="form-control" type="text" name="nome" id="nome" placeholder="Seu nome" required>
			</label><br>
			<label>
				<input class="form-control" type="email" name="email" id="email" placeholder="Seu e-mail" required>
			</label><br>
			<label>
				<input class="form-control" type="tel" name="tel" id="tel" placeholder="Telefone">
			</label><br>
			<textarea class="form-control" name="msg" id="msg" rows="5" placeholder="Mensagem" required></textarea><br><br>

			<input type="submit" class="btn btn-success" value="Enviar">

		</form>
		</div>
	</article><!-- #content -->
<?php include 'footer.tpl.php'; ?>
