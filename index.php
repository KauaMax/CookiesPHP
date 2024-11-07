<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>  
    <h1>ROCK IN RIO</h1>

    <form method="POST">
        <label for="cor">Mudar a cor de fundo: <br/></label>
        <input name="cor" type="color">
        <input type="submit" value="Confirmar">

    </form>

    <form method="POST">
        <label for="fonte">Escolha uma fonte:</label>
        <select id="fonte" name="fonte">
        <option value="Arial">Arial</option>
        <option value="Verdana">Verdana</option>
        <option value="Times New Roman">Times New Roman</option>
        <option value="Georgia">Georgia</option>
        <option value="Courier New">Courier New</option>
        <option value="'Roboto', sans-serif">Roboto</option>
        <option value="'Open Sans', sans-serif">Open Sans</option>
    </select>
        <input type="submit" value="Confirmar">
    </form>
    
    <p>O Rock in Rio é um festival de música idealizado pelo empresário brasileiro Roberto Medina pela primeira vez em 1985. É reconhecido como um dos maiores festivais musicais do planeta. Foi originalmente organizado no Rio de Janeiro, de onde vem o nome. Tornou-se um evento de repercussão em nível mundial e teve em 2004 sua primeira edição fora do Brasil, em Lisboa, Portugal.

    Ao longo da sua história, o Rock in Rio teve 22 edições, nove no Brasil, nove em Portugal, três na Espanha e uma nos Estados Unidos. Em 2008, foi realizado pela primeira vez em dois locais diferentes, Lisboa e Madrid. Além destas, duas edições foram canceladas: Madrid e Buenos Aires, ambas programadas para 2014.

    O hino do festival é de autoria do compositor Nelson Wellington e do maestro Eduardo Souto Neto e foi gravado originalmente pelo grupo Roupa Nova. O festival é considerado o oitavo melhor do mundo pelo site especializado Festival Fling.
    Desde sua 4ª edição no Brasil, o festival costuma ocorrer bianualmente no início da primavera em seu país de origem (Brasil). A última edição do festival ocorreu em 2022 no Parque Olímpico do Rio de Janeiro.

    Em 2024 será realizada a 10ª edição do festival,denominada Rock in Rio X, que contará com nomes como Ed Sheeran, Scorpions e Katy Perry.

    Também neste edição o festival terá um espetáculo de teatro musical especial pelos 40 anos do festival chamado 'Sonhos, Lama e Rock and Roll'. A peça contará a história do Rock In Rio, com a direção de Charles Möeller, direção musical de Zé Ricardo e será protagonizada pelos atores Beto Sargentelli, Malu Rodrigues e Rodrigo Pandolfo.</p>

    <img src="rir.jpg" alt="">
</body>
</html>

<style>
    body {
        background-color:

        <?php 
    $cor = $_POST['cor'];


    if(isset($_COOKIE['cor_cookie'])) {
        echo $cor;
    } else {
        echo 'boa';
    }

        Setcookie('cor_cookie', 'background', time()+120);
        ?>;

    }

    p {
        font-family:

    <?php 
    $fonte = $_POST['fonte'];


    if(isset($_COOKIE['fonte_cookie'])) {
    echo $fonte;
    } else {
    echo 'boa';
    }

    Setcookie('fonte_cookie', 'background', time()+120);
    ?>
    }
    

</style>