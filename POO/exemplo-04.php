<?php

class Endereco {

    private $logradouro;//Atributo
    private $numero;//Atributo
    private $cidade;//Atributo

    public function __construct($a, $b, $c){//Metodo Magico

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){
        //var_dump("DESTRUIR");
    }

    public function __toString(){

      return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }

}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leao","123", "Santos");

echo $meuEndereco;
 ?>
