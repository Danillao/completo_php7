<?php
//Aula Polimorfismo

//Abstract's Class
abstract class Animal {

    public function emitirSom()
    {
        return "SOM";
    }

    public function locomover()
    {
        return "Anda";
    }
}

//Classe's
class Cachorro extends Animal {
    
    public function emitirSom() 
    {
        return "<br> Latir";
    }

    public function locomover()
    {
        return "<br> Corre ";
    }

}

class Gato extends Animal {

    public function emitirSom() 
    {
        return "<br> Mia";
    }

    public function locomover()
    {
        return "<br> Anda na manha";
    } 

}

class Passaro extends Animal {

    public function emitirSom() 
    {
        return "<br> Canta";
    }

    public function locomover()
    {
        return "<br> Voa e ".parent::locomover();
    } 

}

//----------------------------------------------------------------------------


//Main
$chola = new Cachorro();

echo $chola->emitirSom();
echo $chola->locomover();

echo "<br> ------------------------------";

$garfield = new Gato();

echo $garfield->emitirSom();
echo $garfield->locomover();

echo "<br> ------------------------------";

$piupiu = new Passaro();

echo $piupiu->emitirSom();
echo $piupiu->locomover();



?>