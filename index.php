<?php include 'header.tpl.php'; ?>
	<article id="content" class="content column-full">
	
		<div class="container text-center">
			<h1>Login</h1>
			<form name="login" method="post" action="login.php">
				<label>
					<input class="form-control" type="email" name="email" id="email" placeholder="Seu e-mail" required>
				</label><br><br>
				<label>
					<input class="form-control" type="password" name="senha" id="senha" placeholder="Sua senha" required>
				</label><br><br>
				<input type="submit" class="btn btn-primary" value="Login">

			</form>
		</div>
	</article><!-- #content -->
<?php include 'footer.tpl.php'; ?>
