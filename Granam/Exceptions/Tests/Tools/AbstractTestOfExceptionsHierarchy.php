<?php
namespace Granam\Exceptions\Tests\Tools;

use Granam\Exceptions\Tools\TestOfExceptionsHierarchy;

abstract class AbstractTestOfExceptionsHierarchy extends \PHPUnit_Framework_TestCase
{

    /**
     * @var TestOfExceptionsHierarchy
     */
    private $testOfExceptionsHierarchy;

    protected function setUp()
    {
        $this->testOfExceptionsHierarchy = new TestOfExceptionsHierarchy(
            $this->getTestedNamespace(),
            $this->getRootNamespace(),
            $this->getExceptionsSubDir(),
            $this->getExternalParentRootNamespace()
        );
    }

    /**
     * @return TestOfExceptionsHierarchy
     */
    protected function getTestOfExceptionsHierarchy()
    {
        return $this->testOfExceptionsHierarchy;
    }

    abstract protected function getTestedNamespace();

    abstract protected function getRootNamespace();

    protected function getExceptionsSubDir()
    {
        return 'Exceptions';
    }

    protected function getExternalParentRootNamespace()
    {
        return false;
    }

    /**
     * @test
     */
    public function My_exceptions_are_in_family_tree()
    {
        $this->getTestOfExceptionsHierarchy()->My_exceptions_are_in_family_tree();
    }

}
