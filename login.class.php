<?php

class Login {

    private $nome;
    private $senha; 

    public function getNome() {
        return $this->nome;
    }

    public function setNome($n) {
        $this->nome = $n;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($s) {
        $this->senha = $s;
    }

    public function Logar() {
        if($this->nome == "gustavo" and $this->senha == "123"):
            echo "logado";
        else:
            echo "não logado";
        endif;
    }
}
$logar = new Login();
$logar->setNome = "gustavo";
$logar->setSenha = "123";
$logar->Logar();
echo "<br>";
?>