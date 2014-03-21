window.onload = function(){
	calcular();
}

function  calcular(){
	//capturar o id do formulario
	var formulario = document.getElementById("form_cheque");
	//captura o valor digitado no campo emitente
	var emitente = formulario.emitente.value;
	//capturar o valor digitado no campo valor
	var valor = formulario.valor.value;
	var taxa = formulario.taxa.value;
	//capturar o valor digitado no campo data de vencimento
	var dtvencimento = new Date(formulario.dtvencimento.value);	
	var dias = dtvencimento;
	//capturar o valor digitado no campo data da troca
	var dttroca = new Date(formulario.dttroca.value);
	//recebe a diferença entres as datas de vencimento e da troca para gerar a quantidade de dias
	var qtdias = (dtvencimento.getTime() - dttroca.getTime())/86400000;
	//preenche o campo com a quantidade de dias da operação
	formulario.dias.value = qtdias.toFixed(0);
	//recebe a diferença entre o valor oriiginal do cheque e o total de descontos
	var descontos = (((taxa/100)/30) * qtdias) * valor;
	formulario.descontos.value = descontos.toFixed(2);
	var saldo = valor - descontos;
	//preenche o campo com o saldo da operação
	formulario.saldo.value = saldo.toFixed(2);
}
function mascara_troca(campoData){
	var data_troca = campoData.value;
		if(data_troca.length == 2){
			data_troca+="/";
			document.forms[0].data_troca.value = data_troca;
			return true;
		}
		if(data_troca.length == 5){
			data_troca+="/";
			document.forms[0].data_troca.value = data_troca;
			return true;
		}
}
function mascara_vencimento(campoData){
	var data_vencimento = campoData.value;
		if(data_vencimento.length == 2){
			data_vencimento+="/";
			document.forms[0].data_vencimento.value = data_vencimento;
			return true;
		}
		if(data_vencimento.length == 5){
			data_vencimento+="/";
			document.forms[0].data_vencimento.value = data_vencimento;
			return true;
		}
}
/*
function mascara(campoData){
	var data = campoData.value;
		if(data.length == 2){
			data+="/";
			document.forms[0].data.value = data;
			return true;
		}
		if(data.length == 5){
			data+="/";
			document.forms[0].data.value = data;
			return true;
		}
}*/