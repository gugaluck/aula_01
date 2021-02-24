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
    'h1' => 'Hello, world!',
    'br' => '<br>'); //COMO COLOCAR ESPAÇO AQUI?
    /*$table = new <table>
        <tr>
            <td>testes 1</td>
            <td>testes 2</td>
            <td>testes 3</td>
        </tr>
    </table>*/
echo $tables['h1'];

$teste = array("Primeiro teste", "Segundo teste", "Terceiro teste"); 

    foreach ($teste as $value) {
        echo "<br> $value <br>";
    }

?>