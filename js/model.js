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

  //   function salva(elemento){ // cria método ajax para fazer o update no banco de dados
		// 	elemento.setAttribute("contenteditable", "false");
		// 	//console.log(elemento.parentElement.parentElement);
		// 	//Recupera e envia todos os dados da linha
		// 	var line = elemento.parentElement.parentElement;
		// 	var id = line.children[0].children[0].innerHTML;
		// 	var nome = line.children[1].children[0].innerHTML;
		// 	var rg = line.children[2].children[0].innerHTML;
		// 	var cpf = line.children[3].children[0].innerHTML;
		// 	var endereco = line.children[4].children[0].innerHTML;
		// 	var telefone = line.children[5].children[0].innerHTML;
		// 	var regprof = line.children[6].children[0].innerHTML;
		// 	var mataluno = line.children[7].children[0].innerHTML;
		// 	var status = line.children[8].children[0].innerHTML;
		// 	var login = line.children[9].children[0].innerHTML;
		// 	var tipo = line.children[10].children[0].innerHTML;
		// 	var xhttp = new XMLHttpRequest();
		// 	xhttp.onreadystatechange = function() {
		// 		if (this.readyState == 4 && this.status == 200) {
		// 			window.alert(""+ this.responseText);
		// 		}
		// 	}
		// 	xhttp.open("POST", "controllerpessoa.php?acao=alterar&idPessoa="+id+"nomePessoa="+nome+"&rgPessoa="+rg+"&cpfPessoa="+cpf+"&enderecoPessoa="+endereco+"&telefonePessoa="+telefone+"&registroProfessor="+regprof+"&matriculaAluno="+mataluno+"&status="+status+"&idLogin="+login+"&idTipo="+tipo, true);
		// 	xhttp.send();   
		// }

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

