<?php
//  => all’interno della classe sono dichiarate delle variabili d’istanza
//  => all’interno della classe è definito un costruttore
//  => all’interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
class Movie{
    private $title;
    private $subtitle;
    private $year;
    private $genres;
    function __construct($_title, $_subtitle = null, $_year){
        $this->setTitle($_title);

        if($_subtitle){
            $this->setSubtitle($_subtitle);
        }

        $this->setYear($_year);
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($_title){
        $this->title = $_title;

        return $this;
    }
    /**
     * Get the value of title
     */ 
    public function getTitle(){
        return $this->title;
    }

    // ------

    
    /**
     * Set the value of subtitle
     *
     * @return  self
     */ 
    public function setSubtitle($_subtitle){
        $this->subtitle = $_subtitle;

        return $this;
    }

    /**
     * Get the value of subtitle
     */ 
    public function getSubtitle(){
        return $this->subtitle;
    }

    // ------

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($_year) {
        intval($_year);
        $this->year = $_year;

        return $this;
    }

    /**
     * Get the value of year
     */ 
    public function getYear(){
        return $this->year;
    }

    // ------METHOD:

    function getfullTitles(){
        return $this->title . "" . $this->subtitle;
    }
}