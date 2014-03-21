<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Troca de Cheques</title>
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>

		<fieldset>
			<legend>Sistema de Troca de Cheques</legend>
			<form id="form_cheque">
				<label class="usuario">Saudações: Sr(a).</label>
				<label>
					<span>Taxa</span>
					<input type="number" id="taxa" name="taxa" placeholder="Taxa">
				</label>
				<label>
					<span>Emitente</span>
					<input type="text" id="emitente" name="emitente" placeholder="Emitente">
				</label>

				<label>
					<span>Valor</span>
					<input type="number" id="valor" name="valor"  min="0" placeholder="Valor">
				</label>

				<label>
					<span>Data Vencimento</span>
					<input type="date" id="dtvencimento" name="data_vencimento" placeholder="data vencimento" onKeyUp="mascara_vencimento(this);" maxlength="10">
				</label>

				<label>
					<span>Data da troca</span>
					<input type="date" id="dttroca" name="data_troca" placeholder="Data da Troca" onKeyUp="mascara_troca(this);" maxlength="10">
				</label>

				<label>
					<span>Quant. Dias</span>
					<input type="number" id="dias" name="dias"  min="0" disabled="disabled">
				</label>

				<label>
					<span>Total de Descontos</span>
					<input type="number" id="descontos" name="descontos" disabled="disabled">
				</label>

				<label>
					<span>Saldo</span>
					<input type="number" id="saldo" name="saldo" disabled="disabled">
				</label>

				<label>
					<button type="button" href="#" onclick="calcular();">Calcular</button>
				</label>

			</form>
		</fieldset>
	</body>

</html>