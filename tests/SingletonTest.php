<?php
use PHPUnit\Framework\TestCase;
use Design\Singleton\Singleton;

require_once dirname(__FILE__).'/../autoload.php';

/**
 * SingletonTest用于测试单例模式
 */
class SingletonTest extends TestCase {

    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $this->assertInstanceOf('Design\Singleton\Singleton', $firstCall);

        $secondCall = Singleton::getInstance();
        $this->assertSame($firstCall, $secondCall);
    }

    public function testNoConstructor()
    {
        $obj = Singleton::getInstance();

        $refl = new \ReflectionObject($obj);
        $meth = $refl->getMethod('__construct');
        $this->assertTrue($meth->isPrivate());
    }
}