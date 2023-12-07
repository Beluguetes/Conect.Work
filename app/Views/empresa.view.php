<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=css('estilo6')?>" rel="stylesheet">
    <title>Serviços</title>
</head>
<body>
<div class="container">
	<div class="tela">
		<div class="conteudo_tela">
			<form class="login">
				<div class="campo_login">
					<i class="login__icone"></i>
					<input type="text" class="login__entrar" placeholder="Nome de usuario">
				</div>
                <div class="campo_login">
					<i class="login__icone"></i>
					<input type="text" class="login__entrar" placeholder="E-mail">
				</div>
				<div class="campo_login">
					<i class="login__icone"></i>
					<input type="text" class="login__entrar" placeholder=" Empresa">
				</div>

				<div class="campo_login">
					<i class="login__icone"></i>
					<input type="text" class="login__entrar" placeholder="CNPJ">
				</div>

				<div class="campo_login">
					<i class="login__icone"></i>
					<input type="text" class="login__entrar" placeholder="Telefone">
				</div>
				<div class="campo_login">
					<i class="login__icone"></i>
					<input type="text" class="login__entrar" placeholder="Lougradoro">
				</div>


				<div class="campo_login">
					<i class="login__icone"></i>
					<input type="text" class="login__entrar" placeholder="senha">
				</div>
 
				<a href="<?=linkrota('servicos')?>"class="button login__enviar2">
				<span class="button__texto">Entrar</span>
					<i class="button__icone"></i>
</a>			
			</form>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</body>
</html>