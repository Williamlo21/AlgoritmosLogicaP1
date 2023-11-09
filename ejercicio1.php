<?php
// Desarrollado por: JOSE WILLIAM LOPEZ REBELLON
// ADSO 2500711

class Factorial{
    public $n;

    public function __construct($n)
    {
        $this->n = $n;
    }
    

    /**
     * Get the value of n
     */ 
    public function getN()
    {
        return $this->n;
    }

    /**
     * Set the value of n
     *
     * @return  self
     */ 
    public function setN($n)
    {
        $this->n = $n;

        return $this;
    }
    public function factorizarNum($n){
        $res = $n;
        while ($n >= 1){
            if ($n > 1){
                
                $res = $res * ($n-1);
                
            }
            $n -= 1;
        }
        if ($res == 0){
            $res = 1;
        }
        return $res;
    }
}

$f = new Factorial(4);
$n = $f->getN();
echo $f->factorizarNum($n);