<?php
// Desarrollado por: JOSE WILLIAM LOPEZ REBELLON
// ADSO 2500711
Class ArraySum{

    public $n;
    public function __construct(...$n)
    {
        $this->n=$n;
    }

    public function getN()
    {
        return $this->n;
    }

    public function setN($n)
    {
        $this->n = $n;

        return $this;
    }
    public function sumarParImpar(...$n){
        $par = 0;
        $impar = 0;
        foreach ($n as $num){
            if ($num % 2 == 0){
                echo $num ." es par ". PHP_EOL;
                $par += $num;
            }else{
                echo $num . " es impar ". PHP_EOL;
                $impar += $num;
            }
        }
        $m1 = "La suma de los números pares es: ". $par . PHP_EOL;
        $m2 = "La suma de los números impares es: ". $impar . PHP_EOL;
        return $m1 . $m2;
    }
    
}

$arr = new ArraySum(5,4,3,2);
$n = $arr->getN();
echo $arr->sumarParImpar(...$n);
