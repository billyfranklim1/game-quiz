
export default {

	filters : {
		destacarTexto : function(texto, variavelEncontrada, processo){
			// Isso foi necessário pelo motivo de que, a variavelEncontrada quando é
			// ELETROSUL vem como ELETRO SUL, e quando faz a busca no texto, não acha
			// e como não conseguir fazer uma expressão regular adequada tive que fazer esse IF ELSE
			if (variavelEncontrada == "ELETRO SUL") {
				variavelEncontrada = "ELETROSUL";
			} else {
				variavelEncontrada = variavelEncontrada;
			}
			var texto = texto.split(variavelEncontrada).join("<strong class='destaque'>"+variavelEncontrada+"</strong>");
			var texto = texto.split(processo).join("<strong class='destaque'>"+processo+"</strong>");
			return texto;
		},

		formataData: function (value) {
			// moment.locale('pt-br');         // pt-br
			 return moment(String(value)).format('L');
		}
	}

}
