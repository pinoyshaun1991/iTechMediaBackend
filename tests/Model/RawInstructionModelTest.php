<?php


use PHPUnit\Framework\TestCase;
use iTech\Model\RawInstructionModel;

class RawInstructionModelTest extends TestCase
{

    private $returnedRawInstructionString = '[{"id":"1","recipe_id":"1","appliance":"oven","position":"1","temperature":"400","text":"Preheat the oven to 400\u00b0F (200\u00b0C)."},{"id":"2","recipe_id":"1","appliance":"","position":"2","temperature":"","text":"In a medium bowl, whisk together the flour, baking soda, and salt. Set aside."},{"id":"3","recipe_id":"1","appliance":"","position":"3","temperature":"","text":"In a large bowl, beat together the butter, brown sugar, granulated sugar, and vanilla extract until smooth."},{"id":"4","recipe_id":"1","appliance":"","position":"4","temperature":"","text":"Add the eggs, 1 at a time, beating to incorporate before adding the next."},{"id":"5","recipe_id":"1","appliance":"","position":"5","temperature":"","text":"Add the flour mixture a bit at a time while beating, until it forms a smooth dough."},{"id":"6","recipe_id":"1","appliance":"","position":"6","temperature":"","text":"Add the pretzels to a zip-top bag and crush with a rolling pin."},{"id":"7","recipe_id":"1","appliance":"","position":"7","temperature":"","text":"Fold in the chocolate chips and crushed pretzels until evenly combined."},{"id":"8","recipe_id":"1","appliance":"","position":"8","temperature":"","text":"Press a caramel flat and place in the middle of a ball of dough, about 2 tablespoons."},{"id":"9","recipe_id":"1","appliance":"","position":"9","temperature":"","text":"Fold the dough around the caramel, using a bit more to seal if necessary. Place on a well-greased or parchment-lined baking sheet."},{"id":"10","recipe_id":"1","appliance":"","position":"10","temperature":"","text":"Bake for 8-10 minutes, then remove from the oven."},{"id":"11","recipe_id":"1","appliance":"","position":"11","temperature":"","text":"While still warm, press a single pretzel into the top of each cookie. Serve with a cold glass of milk or on their own!"},{"id":"12","recipe_id":"1","appliance":"","position":"12","temperature":"","text":"Enjoy!"}]';

    public function testFetchRawData(): void
    {
        $mockedClass = $this->createMock(RawInstructionModel::class);
        $mockedClass->method('fetchRawData')
            ->willReturn(array($this->returnedRawInstructionString));
        $this->assertEquals(array($this->returnedRawInstructionString), $mockedClass->fetchRawData(1));
    }

    public function testGetRawData(): void
    {
        $mockedClass = $this->createMock(RawInstructionModel::class);
        $mockedClass->method('getRawData')
            ->willReturn($this->returnedRawInstructionString);
        $this->assertEquals($this->returnedRawInstructionString, $mockedClass->getRawData(1));
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
        $reflector = new \ReflectionClass(RawInstructionModel::class);
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
    public function testSetIdWithoutException($parameter, $expected): void
    {
        $reflector = new \ReflectionClass(RawInstructionModel::class);
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

    public function testGetId(): void
    {
        $mockedClass = $this->createMock(RawInstructionModel::class);
        $mockedClass->method('getId')
            ->willReturn('1');
        $this->assertEquals('1', $mockedClass->getId());
    }
}