<!-- Arquivo: artists.php
	 Autor: Vladimir Belinski 
	 Descrição: o presente arquivo faz parte da resolução do primeiro trabalho do CCR Tópicos Especiais em Desenvolvimento Web,
	 			CC-UFFS 2017.1, ministrado pela professora Ma. Andressa Sebben. Nele, é desenvolvida a seção de artistas da empresa,
				a qual contém imagens dos artistas, com seus respectivos nomes e atividades que exercem.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>:: Clever Entertainment ::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection,print"/>
    <link href="css/myStyles.css" type="text/css" rel="stylesheet" media="screen,projection,print"/>
</head>
    
<body>
	<!-- Cabeçalho da página -->
    <header>
		<!-- Inclusão do menu de navegação comum a todas as páginas. O código do menu de navegação pode ser encontrado em 'includes/nav.php' -->
		<?php include('includes/nav.php'); ?>
		<!-- Breadcrumbs -->
		<nav class="my_breadcrumbs" role="navigation">
			<div class="nav-wrapper">
				<div class="col s12 teal lighten-2">
					<a href="index.php" class="breadcrumb">Home</a>
					<a class="breadcrumb">Artistas</a>
				</div>
			</div>
		</nav>
	</header>
	
	<main>
		<div class="container">
			<div class="section">
				<section>
					<!-- Título informativo da página com ícone -->
					<div class="row">
						<div class="col s12">
							<h5 class="grey-text text-darken-4"><i class="material-icons hiddenprint">grade</i> ARTISTAS</h5>
						</div>
					</div>
					<!-- Aqui são encontrados os cards com informações sobre os artistas da empresa. É feito uso de um template e da biblioteca handlebars de forma que não seja necessário replicar o código html comum a cada card. O conteúdo dos cards pode ser encontrado em 'js/artistasContent.js' -->
					<div class="row">
						<!-- Incício do template -->
						<script id="artistsTemplate" type="text/x-handlebars-template">
							{{#each input}}
							<div class="col s12 m6 xl4">
								<!-- Aqui é feito uso de um card, um componente do Materialize que apresenta uma maneira conveniente de exibir conteúdos compostos por diferentes tipos de objetos -->
								<div class="card">
									<!-- div correspondente à imagem do card. Aqui também é feito uso do componente JS 'Material Box' que permite ampliar e reduzir um imagem de maneira suave -->
									<div class="card-image artists hiddenprint">
										<img class="materialboxed" data-caption="{{caption}}" src="{{imageSrc}}" alt="{{caption}}">
									</div>
									<!-- div correspondente ao conteúdo do card -->
									<div class="card-content">
										<h5>{{caption}}</h5>
									</div>
									<!-- Nesta div poderiam ter sido utilizados links relacionados ao card. Preferiu-se fazer uso de outro componente do Materialize, os 'chips', que representam pequenos blocos de informação que podem representar contatos, marcadores, etc -->
									<div class="card-action">
										<div class="chip">{{chip1}}</div>
										<div class="chip">{{chip2}}</div>
									</div>
								</div>
							</div>
							{{/each}}
						</script>
						<!-- Final do template -->
						<!-- div onde serão colocados os cards e seu conteúdo -->
						<div id="artistsContent"></div>
					</div>
				</section>
			</div>
		</div>
	</main>
	
	<!-- Rodapé da página: faz uso do componente footer do Materialize. As imagens do rodapé são carregadas de forma diferente de acordo com o tamanho da tela do dispositivo, o que faz, por exemplo, que para dispositivos móveis sejam carregadas imagens mais leves -->
    <footer class="page-footer grey darken-4 hiddenfooter" id="artistsFooterDelayed">
        <!-- Inclusão do código do rodapé comum a todas as páginas. Tal código pode ser encontrado em 'includes/footer.php' -->
        <?php include('includes/footer.php'); ?>
    </footer>
    
    <!-- Scripts -->
    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/handlebars-v4.0.5.js"></script>
    <script src="js/materialize.js"></script>
	<script src="js/artistsContent.js"></script>
	<script src="js/myScript.js"></script>
    
</body>
</html>