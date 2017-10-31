<?php
use PHPUnit\Framework\TestCase;
use Design\Strategy\Context;
use Design\Strategy\PriceA;
use Design\Strategy\PriceB;

require_once dirname(__FILE__).'/../autoload.php';

class StrategyTest extends TestCase{
    public function testStrategy(){
        $cnt = new Context();

        $cnt->setStrategy(new PriceA());
        $this->assertEquals(100,$cnt->getPrice(100));

        $cnt->setStrategy(new PriceB());
        $this->assertEquals(90,$cnt->getPrice(100));
    }
}