<?php

class Carro {

private $modelo;//Atributo
private $motor;
private $ano;

    public function getModelo(){//Metodo

    return $this->modelo;
    }

    public function setModelo($modelo){

      $this->modelo = $modelo;
      }

    public function getMotor():float{//Metodo

    return $this->motor;
    }

    public function setMotor($motor){

      $this->motor = $motor;
      }
    public function getAno():int{//Metodo

    return $this->ano;
    }

    public function setAno($ano){

      $this->ano = $ano;
      }


public function exibir(){
return array(
    "modelo"=>$this->getModelo(),
    "motor"=>$this->getMotor(),
    "ano"=>$this->getAno()
);

}

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());

 ?>
