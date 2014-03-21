function imc(){
	var form1 = document.getElementById('imc');
	var altura = form1.altura.value;
	var peso = form1.peso.value;
	var calculoimc = peso / (altura*altura);
	form1.imc_resultado.value = calculoimc.toFixed(2);
	
	if(calculoimc < 18.5){
		document.getElementById("resultado").innerHTML = "você está abaixo do peso";
	}
	else if(calculoimc >= 18.5 && calculoimc <= 24.9){
		document.getElementById("resultado").innerHTML = "você está no peso ideal";
	}
	else if(calculoimc >= 25 && calculoimc <= 29.9){
		document.getElementById("resultado").innerHTML = "você está acima do peso";
	}
	else if(calculoimc >= 30 && calculoimc <= 34.9){
		document.getElementById("resultado").innerHTML = "você obeso(a) grau 1";
	}
	else if(calculoimc >= 35 && calculoimc <= 39.9){
		document.getElementById("resultado").innerHTML = "você obeso(a) grau 2";
	}
	else if(calculoimc >= 40){
		document.getElementById("resultado").innerHTML = "você obeso(a) grau 3";
	}
	else{
		document.getElementById("resultado").innerHTML = "está faltando alguma coisa";
	}
	
}