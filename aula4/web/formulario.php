<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trabalhando com formulário HTML</title>
</head>
<body class="container">
    <h2>Formulário</h2>
    <form action="pagina.php" method="post">
        <label for="nomeFuncionario"><b> Nome do funcionário</b>:</label>
        <input type="text" name="nomeFuncionario" id="nomeFuncionario"><br>

        <span><b> Alocação</b>:</span>
        <input type="radio" name="alocado" id="alocadoSim" value="sim"><label for="alocadoSim">Sim</label>
        <input type="radio" name="alocado" id="alocadoNao" value="nao"><label for="alocadoNao">Não</label><br>

        <span><b> Habilidades: </b></span>
        <input type="checkbox" name="habilidades[]" id="habilidadePHP" value="php"><label for="habilidadePHP">PHP</label>  
        <input type="checkbox" name="habilidades[]" id="habilidadeJava" value="java"><label for="habilidadeJava">Java</label><br>

        <label for="local"><b> Local</b></label>
        <select name="Local" id="local">
            <option value="0" selected>Selecione</option>
            <option value="Recife">Recife</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Belo Horizonte">Belo Horizonte</option>
            <option value="Campinas">Campinas</option>
        </select>

        <br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar formulário">
    </form>
</body>

</html>