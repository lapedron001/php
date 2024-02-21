<?php

class Login{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){ //getters
        return $this->email;
    }

    public function setEmail($e){ //setters
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){ //getters
        return $this->senha;
    }

    public function setSenha($s){ //setters
        $this->senha = $s;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == '123456'){
            echo "Logado com sucesso!";
        } else{
            echo "Dados invalidos";
        }
    }
}

$logar = new Login("teste@teste.com", "123456", "Rodrigo");
$logar->Logar();
echo "<br>";
echo $logar->getNome();