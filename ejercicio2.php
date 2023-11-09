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
    

}