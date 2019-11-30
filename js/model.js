function cliqueDuplo(){
	$(function () {
					$("td").dblclick(function () {
						var conteudo = $(this).text();

						$(this).addClass("tabelaEditavel");
						$(this).html("<input type='text' value='" + conteudo + "' />");
						$(this).children().first().focus();

						$(this).children().first().keypress(function (e) {
							if (e.which == 13) {
								var novoConteudo = $(this).val();
								$(this).parent().text(novoConteudo);
								$(this).parent().removeClass("tabelaEditavel");
							}
						});

						$(this).children().first().blur(function(){
							$(this).parent().text(conteudo);
							$(this).parent().removeClass("tabelaEditavel");
						});
					});
				});
}

$(document).ready(function(){
    $('#cpf').mask('000.000.000-00');
});

$(document).ready(function(){
    $('#cnpj').mask('00.000.000/0000-00');
});

$(document).ready(function(){
    $('#telefone').mask('(00) 00000-0000');
});

$(document).ready(function(){
    $('#dinheiro').mask('#.###,##');
});

$(document).ready(function(){
    $('#dinheiro2').mask('#.###,##');
});

$(document).ready(function(){
    $('#dinheiro3').mask('#.###,##');
});

$(document).ready(function(){
    $('#dinheiro4').mask('#.###,##');
});

