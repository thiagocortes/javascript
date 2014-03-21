<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cálculo IMC</title>
        <link href="estilos.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body>
        <fieldset>
            <legend>Cálculo IMC</legend>
                <form id="imc">
                    <label>
                        <span>Altura</span>
                        <input type="number" name="altura" id="altura" min="0" placeholder="Altura" required>
                    </label>
                    <label>
                        <span>Peso</span>
                        <input type="number" name="peso" id="peso" min="0" placeholder="Peso" required>
                    </label>
                    <label>
                        <span>IMC</span>
                        <input type="number" name="imc" id="imc_resultado" min="0" disabled="disabled">
                    </label>
                    <label class="botao">
                        <a href="#" onclick="imc();">calcular</a>
                    </label> 
                    <label id="resultado">resultado</label>
                   <!-- <input type="submit" value="Calcular" onclick="imc();">-->
                </form>
                </fieldset>
                <fieldset>
                <br>
                <label>
                    <span class="titulo">IMC</span>
                    <span>DESCRIÇÃO</span>
                </label>
                <label>
                    <span class="descricaoIMC">menor de 18,5</span>
                    <span class="descricao">VOCÊ ESTÁ ABAIXO DO PESO</span>
                </label>
                <label>
                    <span class="descricaoIMC">entre 18,5 e 24,9</span>
                    <span class="descricao">VOCÊ ESTÁ NO PESO IDEAL</span>
                </label>
                <label>
                    <span class="descricaoIMC">entre 25 e 29,9</span>
                    <span class="descricao">VOCÊ ESTÁ ACIMA DO PESO</span>
                </label>
                <label>
                    <span class="descricaoIMC">entre 30 e 34,9</span>
                    <span class="descricao">OBESIDADE GRAU 1</span>
                </label>
                <label>
                    <span class="descricaoIMC">entre 35 e 39,9</span>
                    <span class="descricao">OBESIDADE GRAU 2</span>
                </label>
                <label>
                    <span class="descricaoIMC">ACIMA DE 40</span>
                    <span class="descricao">OBESIDADE GRAU 3</span>
                </label>
            </fieldset>
    </body>
</html>
