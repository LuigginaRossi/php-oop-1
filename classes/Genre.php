<?php

class Genre{
    private $genre1;
    private $genre2;

    function __construc($_genre1, $_genre2 = null){
        $this->setGenre1($_genre1);
        if($_genre2){
            $this->setGenre2($_genre2);
        }
    }

     /**
     * Set the value of genre1
     *
     * @return  self
     */ 
    public function setGenre1($genre1){
        $this->genre1 = $genre1;

        return $this;
    }
    /**
     * Get the value of genre1
     */ 
    public function getGenre1(){
        return $this->genre1;
    }

    // ------

    /**
     * Set the value of genre2
     *
     * @return  self
     */ 
    public function setGenre2($genre2){
        $this->genre2 = $genre2;

        return $this;
    }
    /**
     * Get the value of genre2
     */ 
    public function getGenre2(){
        return $this->genre2;
    }

   
}