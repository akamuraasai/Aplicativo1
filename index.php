<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="www.frebsite.nl" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>jQuery.mmenu demo</title>

		<link type="text/css" rel="stylesheet" href="css/demo.css" />
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.0.js"></script>
		<script type="text/javascript" src="js/jquery.mmenu.all.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

		<script type="text/javascript">
			$(function() {
				$('nav#menu').mmenu();
			});
		</script>
	</head>
	<body>
	
	 <div id="titulo">Feeds</div>
		<div id="page">
			<div class="header">
				<a href="#menu"><span></span></a>
			</div>
			
			<nav id="menu">
				<ul>
					<li><a href="feeds.php" onclick="mudaTitulo(this)"> <i class=" fa fa-newspaper-o "></i> Feeds</li>
                    <li><a href="classificao.php" onclick="mudaTitulo(this)"> <i class=" fa fa-trophy "></i>  Classificação</a></li>
                    <li><a href="tabela.php" onclick="mudaTitulo(this)"> <i class=" fa fa-table "></i>  Tabela</a></li>
                    <li><a href="estatistica.php" onclick="mudaTitulo(this)"> <i class=" fa fa-bar-chart "></i>  Estatísticas</a></li>
                    <li><a href="#contact" onclick="mudaTitulo(this)"> <i class=" fa fa-video-camera "></i>  Vídeos</a></li>
                    <li><a href="#contact" onclick="mudaTitulo(this)"> <i class=" fa fa-share-alt "></i>  Redes Sociais</a></li>
                    <li><a href="#contact" onclick="mudaTitulo(this)"> <i class=" fa fa-cog "></i>  Definições</a></li>
			</nav>
		</div>
		
		<div id="conteudo">
		
		
		
		</div>
		 
		  <script>
                function mudaTitulo(el) {
                document.getElementById('titulo').innerHTML = el.innerText;
            }
         </script>	
	</body>
</html>