<?php 

class Calculadora  {

    //Atributos
    private $num1;
    private $num2;

    //Métodos
    public function somar(){
        $soma = $this->num1 + $this->num2;
        return $soma;
    }
    public function subtrair(){
        $subtrair = $this->num1 + $this->num2;
        return $subtrair;
    }
    public function multiplicar(){
        $multiplicar = $this->num1 + $this->num2;
        return $multiplicar;
    }
    public function dividir(){
        $divisao = $this->num1 + $this->num2;
        return $divisao;
    }

    

    public function getNum1()
    {
        return $this->num1;
    }

    public function setNum1($num1): self
    {
        $this->num1 = $num1;

        return $this;
    }

  
    public function getNum2()
    {
        return $this->num2;
    }


    public function setNum2($num2): self
    {
        $this->num2 = $num2;

        return $this;
    }
}