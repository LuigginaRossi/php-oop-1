<?php


class Genre {
    private $name;

    public function construct($_name) {
        $this->setName($_name);
    }

    public function setName($_name) {
        $this->name = $_name;
    }
}

$genre1 = new Genre('Drammatico');
$genre2 = new Genre('Comico');

$film1 = new Movie('Salvate il soldato Ryan', 'Un film di guerra', 2001, [$genre1,$genre2]);
