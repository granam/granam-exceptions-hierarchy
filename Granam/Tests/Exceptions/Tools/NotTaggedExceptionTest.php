<?php
namespace Granam\Tests\Exceptions\Tools;

class NotTaggedExceptionTest extends AbstractExceptionsHierarchyTest
{

    /**
     * @test
     * @expectedException \Granam\Exceptions\Tools\Exceptions\ExceptionIsNotTaggedProperly
     * @expectedExceptionMessageRegExp ~^Class .+\\NotTaggedExceptionWithout\\IToughIAmTagged has to be tagged by Exception interface$~
     */
    public function My_exceptions_are_in_family_tree()
    {
        parent::My_exceptions_are_in_family_tree();
    }

    protected function getTestedNamespace()
    {
        return __NAMESPACE__ . '\DummyExceptionsHierarchy\NotTaggedExceptionWithout';
    }

    protected function getExceptionsSubDir()
    {
        return false;
    }

    protected function getRootNamespace()
    {
        return $this->getTestedNamespace();
    }

    protected function getExceptionClassesSkippedFromUsageTest()
    {
        return array(
            'Granam\Tests\Exceptions\Tools\DummyExceptionsHierarchy\NotTaggedExceptionWithout\IToughIAmTagged',
        );
    }

}
