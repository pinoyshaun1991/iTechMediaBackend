<?php


use PHPUnit\Framework\TestCase;
use iTech\Model\RawIngredientModel;

class RawIngredientModelTest extends TestCase
{

    private $returnedRawIngredientString = '[{"id":"1","recipe_id":"1","name":"all-purpose
flour","unitName":"cup","unitAbbreviation":"c","unitSystem":"imperial","quantity":"2.0","text":"2 cups all-purpose
flour"},{"id":"2","recipe_id":"1","name":"baking
soda","unitName":"teaspoon","unitAbbreviation":"tsp","unitSystem":"imperial","quantity":"1.0","text":"1 teaspoon baking
soda"},{"id":"3","recipe_id":"1","name":"salt","unitName":"teaspoon","unitAbbreviation":"tsp","unitSystem":"imperial","quantity":"1.0","text":"1
teaspoon
salt"},{"id":"4","recipe_id":"1","name":"butter","unitName":"cup","unitAbbreviation":"c","unitSystem":"imperial","quantity":"1.0","text":"1
cup butter, softened"},{"id":"5","recipe_id":"1","name":"brown
sugar","unitName":"cup","unitAbbreviation":"c","unitSystem":"imperial","quantity":"1.0","text":"1 cup packed brown
sugar"},{"id":"6","recipe_id":"1","name":"granulated
sugar","unitName":"cup","unitAbbreviation":"c","unitSystem":"imperial","quantity":"\u00bd","text":"\u00bd cup granulated
sugar"},{"id":"7","recipe_id":"1","name":"vanilla
extract","unitName":"teaspoon","unitAbbreviation":"tsp","unitSystem":"imperial","quantity":"1.0","text":"2 teaspoons
vanilla extract"},{"id":"8","recipe_id":"1","name":"large
egg","unitName":"","unitAbbreviation":"","unitSystem":"none","quantity":"2.0","text":"4 large
eggs"},{"id":"9","recipe_id":"1","name":"pretzel
twist","unitName":"cup","unitAbbreviation":"c","unitSystem":"imperial","quantity":"2.0","text":"n\/a"},{"id":"10","recipe_id":"1","name":"chocolate
chips","unitName":"cup","unitAbbreviation":"c","unitSystem":"imperial","quantity":"1 \u00bd","text":"1\u00bd cups
chocolate chips"},{"id":"11","recipe_id":"1","name":"caramel
candy","unitName":"cup","unitAbbreviation":"c","unitSystem":"imperial","quantity":"1 \u00bd","text":"1\u00bd cups
caramel candies, unwrapped"}]';

    public function testFetchRawData(): void
    {
        $mockedClass = $this->createMock(RawIngredientModel::class);
        $mockedClass->method('fetchRawData')
            ->willReturn(array($this->returnedRawIngredientString));
        $this->assertEquals(array($this->returnedRawIngredientString), $mockedClass->fetchRawData(1));
    }

    public function testGetRawData(): void
    {
        $mockedClass = $this->createMock(RawIngredientModel::class);
        $mockedClass->method('getRawData')
            ->willReturn($this->returnedRawIngredientString);
        $this->assertEquals($this->returnedRawIngredientString, $mockedClass->getRawData(1));
    }

    /**
     * @dataProvider idProvider
     *
     * @param $parameter
     * @param $expectedMessage
     * @throws ReflectionException
     */
    public function testSetId($parameter, $expectedMessage): void
    {
        $reflector = new \ReflectionClass(RawIngredientModel::class);
        $instance  = $reflector->newInstanceWithoutConstructor();
        $method    = $reflector->getMethod('setId');
        $method->setAccessible(true);
        $this->expectExceptionMessage($expectedMessage);
        $method->invoke($instance, $parameter);
    }

    public function idProvider()
    {
        return [
            [null, 'Recipe id field needs to be a numeric value'],
            ['abcd', 'Recipe id field needs to be a numeric value'],
            ['abcd123', 'Recipe id field needs to be a numeric value']
        ];
    }

    /**
     * @dataProvider idWithoutExceptionProvider
     *
     * @param $parameter
     * @param $expected
     * @throws Exception
     */
    public function testSetOptionTitleWithoutException($parameter, $expected): void
    {
        $reflector = new \ReflectionClass(RawIngredientModel::class);
        $instance  = $reflector->newInstanceWithoutConstructor();
        $method    = $reflector->getMethod('setId');
        $method->setAccessible(true);

        $this->assertEquals($expected, $method->invoke($instance, $parameter));
    }

    public function idWithoutExceptionProvider()
    {
        return [
            [10, 10],
            [100, 100]
        ];
    }

    public function testGetOptionTitle(): void
    {
        $mockedClass = $this->createMock(RawIngredientModel::class);
        $mockedClass->method('getId')
            ->willReturn('1');
        $this->assertEquals('1', $mockedClass->getId());
    }
}