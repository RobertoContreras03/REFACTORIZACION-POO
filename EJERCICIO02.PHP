<?php
//CON REFACTORIZACION
abstract Class Bascula{
    public $precioporlibracarne=4.50,$precioporlibraembutido=2.50, $precioporlibrapollo=2.75;
    
abstract public function pesarcarne();
abstract public function pesarembutido();
abstract public function pesarpollo();
abstract public function AsignacionPeso($proveedor);

}
class Pesaje extends Bascula{
public $peso;
public function __construct($peso)
{
    $this->peso = $peso;
}
function pesarcarne()
{
    return $cantidad = $this->peso *$this->precioporlibracarne;
}
function pesarembutido()
{
    return $cantidad = $this->peso * $this->precioporlibraembutido;
}
function pesarpollo()
{
    return $cantidad = $this->peso * $this->precioporlibrapollo;
}
function AsignacionPeso($proveedor){
    $precio = 0;
    switch($proveedor){
        case '505050' :
             $precio = $this->precioporlibracarne = 4.75;
            break;
        case '606060':
             $precio = $this->precioporlibracarne = 2.58;
             break;
        case '303030':
                $precio = $this->precioporlibrapollo = 2.40;
             break;
        case '404040':
                $precio = $this->precioporlibrapollo = 2.30;
             break;
        case '101010':
                $precio = $this->precioporlibraembutido = 1.40;
             break;
        case '202020':
                $precio = $this->precioporlibraembutido = 1.50;
    }
    return $this->peso *$precio;
}
}
$carne = new Pesaje (1.3);
echo "Precio de la carne es: $".$carne->pesarcarne()."<br>";

$carne->AsignacionPeso('505050');
echo "El precio de la carne con el codigo del proveedor es: $".$carne->pesarcarne()."<br>";

$pollo= new Pesaje(4.3);
echo "El precio del pollo es: $".$pollo->pesarpollo()."<br>";

$pollo->AsignacionPeso('404040');
echo "El precio del pollo con el codigo del proveedor es: $".$pollo->pesarpollo()."<br>";

$embutido = new Pesaje(7.2);
echo "Precio del embutido es: $".$embutido->pesarembutido()."<br>";

$embutido->AsignacionPeso('202020');
echo "El precio del embutido con el codigo del proveedor es: $".$pollo->pesarembutido()."<br>";

?>
