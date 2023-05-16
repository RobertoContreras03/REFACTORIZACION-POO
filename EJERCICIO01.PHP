<?php
//CON REFACTORIZACION.
class Aritmetica{
    public $numero1, $numero2, $numero3;

public function __construct($_n1,$_n2,$_n3)
{
    $this->numero1 = $_n1;
    $this->numero2 = $_n2;
    $this->numero3 = $_n3;

}
function Sumar(){
    return $total = $this->numero1 + $this->numero2 + $this->numero3;
}

}
$resultado = new Aritmetica(20,10,10);
echo $resultado->Sumar();
?>
