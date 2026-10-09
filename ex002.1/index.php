<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estudandoVariáveis</title>
</head>
<body>
    <h1>Estudando Variáveis com PHP</h1>
    <?php
    $nome = "Geizi";
    echo "Seu nome é $nome  ";
    echo '<p>Seu nome é $nome  </p>';
    echo "estamos no ano ". date("Y");
    //sequencias de escape podem ser usadas para exibir aspas duplas dentro de uma string
    //   \n => nova linha
    //   \t => tabulação
    //   \\ => barra invertida
    //   \$ => sinal de cifrão
    //   \" => aspas duplas
    //   \' => aspas simples
    //   \r => retorno de carro
    //   \v => tabulação vertical
    //   \f => avanço de formulário
    //   \e => escape
    //   \0 => caractere nulo
    //   \xhh => caractere hexadecimal
    $nome = "Julia";
    $snome = "Silva";
    echo "<p> A $nome $snome \"minha amiga\" é incrivel</p>"; 

    // sintaxe heredoc
    $curso = "PHP";
    $ano = date("Y");
    echo <<< HEREDOC
        Estou estudando
            $curso no ano de $ano
    HEREDOC;
    
    // sintaxe nowdoc
    echo <<< 'NOWDOC'
        <p>Estou estudando
            $curso no ano de $ano</p>
    NOWDOC;

    ?>
    
</body>
</html>
