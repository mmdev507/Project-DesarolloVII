<?php
final class ClaseBase {
public function test() {
echo "ClaseBase::test() llamada\n";
}
// Aquí da igual si se declara el método como
// final o no
final public function moreTesting() {
echo "ClaseBase::moreTesting() llamada\n";
}
}
class ClaseHijo extends ClaseBase {
}

//cuando una clase se declara como "final", significa que no se puede heredar de ella, y cualquier intento de hacerlo generará un error
?>