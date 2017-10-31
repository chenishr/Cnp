<?php
namespace Design\Strategy;

class Context{
    private $sty;

    public function setStrategy(Strategy $sty){
        $this->sty = $sty;
    }

    public function getPrice($price){
        return $this->sty->getPrice($price);
    }
}