<!-- 
Selfwork PHP OOP 8
Crea un trait chiamato “Calculator“ definendo le seguenti operazioni tra numeri:

public function sum($a, $b) {
return $a + $b;
}

public function sub($a, $b) {
return $a - $b;
}

public function mul($a, $b) {
return $a * $b;
}

public function div($a, $b) {
return $a / $b;
}

public function sqr($a){
return sqrt($numero);
}


Crea quindi una classe Rettangolo con i seguenti attributi:
Base (b);
Altezza (h);

Il tuo compito sara' quello di creare 3 metodi che andranno a calcolare:
Area → b * h
Perimetro → 2 * b + 2 * h
Diagonale → √ hˆ2 + bˆ2 (Tutto sotto radice)

Tutte queste operazioni pero' dovranno essere richiamate dal trait Calculator -->
<?php

trait Calculator{
    
    public function sum($a, $b) {
        return $a + $b;
    }
    
    public function sub($a, $b) {
        return $a - $b;
    }
    
    public function mul($a, $b) {
        return $a * $b;
    }
    
    public function div($a, $b) {
        return $a / $b;
    }
    
    public function sqr($a){
        return sqrt($a);
    }
    
}

class Rettangolo{
    
    use Calculator;
    
    public $b; //Base
    public $h; //Altezza

    public function __construct($base, $altezza)
    {
        $this->b = $base;
        $this->h = $altezza; 
    }
    
    public function Area(){
        return $this->mul($this->b, $this->h);
    }
    
    public function Perimetro(){
        return $this->sum(2*($this->b),2*($this->h));
    }
    
    public function Diagonale(){
        return $this->sqr(
            $this->sum(
                $this->mul($this->b,$this->b),
                $this->mul($this->h,$this->h)
            ));
        }
    }
    