<?php

namespace classes\abstratas;

abstract class Funcionario
{
    private $nome;
    private $cpf;
    protected $salario;
    const piso = 1200.00;


    public function __construct($cpf, $salario = self::piso)
    {
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

    
    abstract public function getBominicacao();
  
    final public function aumentarSalario()
    {
        $this->salario *= 1.5;
    }

}

?>
