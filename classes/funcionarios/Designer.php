<?php
namespace classes\funcionarios;
use classes\abstratas\Funcionario;

class Designer extends Funcionario{
    public function getBominicacao()
    {
        return $this->salario * 0.5;
    }

}

?>
