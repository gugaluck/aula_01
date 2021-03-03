<?php
    require('autoload.php');
    require('login.class.php');
    require('redirecionar.login.php');
    require('table.php');
/*
    echo new Link('http://unidavi.edu.br',
    'Unidavi 2021',"_blank",'btn');
    echo new Link('http://google.com.br',
    'Google',"_blank",'btn');

    $ul = new Ul();
    $li1 = new Li('item 1', 'azul');
    $li2 = new Li('item 2', 'azul');
    $ul->addLi($li1);
    $ul->addLi($li2);
    echo $ul;

    //TEM QUE FAZER O FORM TUDO EM PHP, TABELAS, METATAGS, BODY, HEADER, CLASSES

    /*arrays
    $tables = array (
        'h1' => 'Hello, world!');
    echo $tables['h1'];
*/
    //receber nome
    if (isset ($_POST['nome'])){
        $nome = $_POST['nome'];
    }

    if (isset ($_POST['sobrenome'])){
        $sobrenome = $_POST['sobrenome'];
        echo "<br> Nome digitado: <br> $nome $sobrenome";

    }
    //receber dados
    /*
    if (isset ($_POST['botao'])){
        $nome = $_POST['botao'];
        echo "nome digitado $nome";
    }*/

    $tag = get_meta_tags("teste meta tag";
    echo $tag;
?>

<html>
    <body>
        <div class="form">
            <h1>Criar usuário</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <label>Nome:</label>
                <input type="text" name="nome">
                <br>
                <label>Sobrenome:</label>
                <input type="text" name="sobrenome">
                <input type="submit" value="submit" name="botao">
            </form>
        </div>
    </body>
</html>