<?php
class ClaseBase {
public function test() {
echo "ClaseBase::test() llamada\n";
}
final public function masTests() {
echo "ClaseBase::masTests() llamada\n";
}
}
class ClaseHijo extends ClaseBase {
public function masTests() {
echo "ClaseHijo::masTests() llamada\n";
}
}

//El resultado indica que el método no pueder ser sobreescrito en la clase hija 
//Debido a que fue colocado comó metodo final.
?>

