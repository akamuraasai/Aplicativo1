$(function(){
	$("ul#menu a").click(function(){
		pagina = "arquivos/"+$(this);attr('href')
})

     $("#conteudo").load(pagina)
	 return false
})
