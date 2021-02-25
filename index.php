<html>
    <body>

        <form action="" method"post">
            <p>
                <label for"nome">Nome:</label><br>
                <input type="text" name="nome" id="name"><br>
                <input type="submit" value="botao"> 
            </p>  
        </form>
    </body>
</html>
<?php
require('autoload.php');

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

//arrays
$tables = array (
    'h1' => 'Hello, world!');
echo $tables['h1'];
//receber nome
if (isset ($_POST['nome'])){
    $nome = $_POST['nome'];
    echo "nome digitado $nome";
}



//TEM QUE FAZER O FORM TUDO EM PHP, TABELAS, METATAGS, BODY, HEADER
/*
<div class = "index">
    <form method ="POST" action ="index.php" class="form">
        <p>
            <input id="nome" name="nome" type="text"/>
        </p>
    </form>
</div>
*/
?>
