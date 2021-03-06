<?php
namespace Geissler\Converter\Standard\Basic;

class StandardMock extends StandardAbstract
{
    public function getCreator()
    {
        return parent::getCreator();
    }

    public function getParser()
    {
        return parent::getParser();
    }
}

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-12 at 22:28:53.
 */
class StandardAbstractTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var StandardMock
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new StandardMock;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Geissler\Converter\Standard\Basic\StandardAbstract::parse
     * 
     * @expectedException ErrorException
     */
    public function testParse()
    {
        $this->object->parse('');
    }

    /**
     * @covers Geissler\Converter\Standard\Basic\StandardAbstract::retrieve
     * 
     * @expectedException ErrorException
     */
    public function testRetrieve()
    {
        $this->object->retrieve();
    }

    /**
     * @covers Geissler\Converter\Standard\Basic\StandardAbstract::getCreator
     *
     * @expectedException ErrorException
     */
    public function testGetCreator()
    {
        $this->object->getCreator();
    }

    /**
     * @covers Geissler\Converter\Standard\Basic\StandardAbstract::getParser
     * 
     * @expectedException ErrorException
     */
    public function testGetParser()
    {
        $this->object->getParser();
    }
}
