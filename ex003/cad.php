<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "nome indefinido";// o operador ?? é o operador de coalescência nula, ele verifica se a variável existe e não é nula, caso contrário ele atribui o valor "nome indefinido"
            $snom = $_GET["snome"];
            echo "<p>É um prazer te conhecer, $nome $snom</p>"
            // var_dump($_GET); //aqui da pra usar $_POST, $_REQUEST ou $_GET
            //obs a variavel $_REQUEST pega tanto o $_POST quanto o $_GET quanto o $_COOKIE
        ?>
        <p><a href="javascript:history.go(-1)">voltar para a página anterior</a></p>

    </main>
</body>
</html>
