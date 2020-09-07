<?php


use PHPUnit\Framework\TestCase;
use iTech\Model\RawRecipeModel;

class RawRecipeModelTest extends TestCase
{

    private $returnedRawRecipeString = '[{"id":"1","name":"Caramel Pretzel Chocolate Chip Cookies","servings":"12","description":"","thumb":"https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/545dd684ec2e4ce1ba12afec4b6dbc59\/BFV15930_CaramelPretzel_ChocolateChipCookies-Thumb1080.jpg","time":""},{"id":"2","name":"The Best Soft And Chewy Snickerdoodle Cookies","servings":"24","description":"","thumb":"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/video-api\/assets\/96041.jpg","time":""},{"id":"3","name":"The Best Chewy Chocolate Chip Cookies","servings":"12","description":"","thumb":"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/video-api\/assets\/62298.jpg","time":"65"},{"id":"4","name":"Double Fudge Irish Cream Cookies","servings":"9","description":"","thumb":"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/5637076656fb4c76a5ece8404a4dae2a\/BFV5148_Double-Fudge-Irish-Cream-Cookies_FB1080SQ.jpg","time":""},{"id":"5","name":"3 Ingredient Peanut Butter Cookies","servings":"25","description":"","thumb":"https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/334c9eee7f37412fba5111e291dd6cb1\/YT_Thumb.jpg","time":""},{"id":"6","name":"Mocha Latte Slow Cooker Eggnog","servings":"5","description":"","thumb":"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/0bdfb6816a8e4ebf8b57f18325420768\/BFV15594_Eggnog4Ways_fb.jpg","time":""},{"id":"7","name":"Peppermint Mocha Cannoli","servings":"4","description":"","thumb":"https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/13359f86be464aceb43b00477a427cc9\/BFV4780_PeppermintMochaCannoli-Thumb1080SQ.jpg","time":""},{"id":"8","name":"Mocha Nanaimo Bars","servings":"9","description":"","thumb":"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/08c57d9c451f4fc488ee23bd2b335608\/BFV14093_NanaimoBars4ways-FB1080SQ.jpg","time":""},{"id":"9","name":"Mocha French Toast Bake","servings":"8","description":"","thumb":"https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/c77dca6543c34c4db95f30388b4915d5\/BFV11103_MochaFrenchToastBake_ThumbC.jpg","time":""},{"id":"10","name":"Personal Protein Pot","servings":"1","description":"","thumb":"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/video-api\/assets\/143016.jpg","time":""},{"id":"11","name":"Banana Oatmeal Muffins","servings":"12","description":"","thumb":"https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/f3784e8df87b4833aa686afcb1be0ab8\/Thumb_A.jpg","time":""},{"id":"12","name":"Low-Carb Egg White Omelette","servings":"4","description":"","thumb":"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/video-api\/assets\/126393.jpg","time":""},{"id":"13","name":"Banana Cornbread Pancakes","servings":"8","description":"","thumb":"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/video-api\/assets\/160036.jpg","time":""},{"id":"14","name":"Egg Breakfast Cups","servings":"6","description":"","thumb":"https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/d173fe0e773a4bd28548f080b3bc48be\/BFV16169_EggBreakfastCupsThumb.jpg","time":""},{"id":"15","name":"Cloud Bread","servings":"3","description":"","thumb":"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/ee9f5904ce33444182bb12e2dce0b005\/Tasty_-_Facebook_-_1080x1080.jpg","time":""},{"id":"16","name":"Pizza Bread Bowl","servings":"6","description":"","thumb":"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/a7a07d09f65143eca34c5078afdc8e2b\/bFV8523_Pizza_Bread_Bowl-FB1080.jpg","time":""},{"id":"17","name":"Cheesecake-filled Banana Bread","servings":"10","description":"","thumb":"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/video-api\/assets\/51466.jpg","time":""},{"id":"18","name":"3 Cheese Garlic Bread","servings":"2","description":"","thumb":"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/6e6292525051459ea04905ce883c96f2\/BFV16420_LobsterDinnerForTwo2.jpg","time":""},{"id":"19","name":"How To Make Homemade Sourdough Bread","servings":"8","description":"","thumb":"https:\/\/img.buzzfeed.com\/video-api-prod\/assets\/dffd29bd9d394a8c8b0770c61dc0c079\/FB.jpg","time":""},{"id":"20","name":"Watermelon Salad With Arugula And Feta","servings":"6","description":"","thumb":"https:\/\/img.buzzfeed.com\/thumbnailer-prod-us-east-1\/813beaadf012447988cb4f3f564a9260\/BFV43452_WatermelonSalads3Ways-FB.jpg","time":""}]';

    public function testFetchRawData(): void
    {
        $mockedClass = $this->createMock(RawRecipeModel::class);
        $mockedClass->method('fetchRawData')
            ->willReturn(array($this->returnedRawRecipeString));
        $this->assertEquals(array($this->returnedRawRecipeString), $mockedClass->fetchRawData());
    }

    public function testGetRawData(): void
    {
        $mockedClass = $this->createMock(RawRecipeModel::class);
        $mockedClass->method('getRawData')
            ->willReturn($this->returnedRawRecipeString);
        $this->assertEquals($this->returnedRawRecipeString, $mockedClass->getRawData((array('from' => 0, 'to' => 20))));
    }

    /**
     * @dataProvider fromProvider
     *
     * @param $parameter
     * @param $expectedMessage
     * @throws ReflectionException
     */
    public function testSetFrom($parameter, $expectedMessage): void
    {
        $reflector = new \ReflectionClass(RawRecipeModel::class);
        $instance  = $reflector->newInstanceWithoutConstructor();
        $method    = $reflector->getMethod('setFrom');
        $method->setAccessible(true);
        $this->expectExceptionMessage($expectedMessage);
        $method->invoke($instance, $parameter);
    }

    public function fromProvider()
    {
        return [
            [null, 'From field needs to be a numeric value'],
            ['abcd', 'From field needs to be a numeric value'],
            ['abcd123', 'From field needs to be a numeric value']
        ];
    }

    /**
     * @dataProvider fromWithoutExceptionProvider
     *
     * @param $parameter
     * @param $expected
     * @throws Exception
     */
    public function testSetFromWithoutException($parameter, $expected): void
    {
        $reflector = new \ReflectionClass(RawRecipeModel::class);
        $instance  = $reflector->newInstanceWithoutConstructor();
        $method    = $reflector->getMethod('setFrom');
        $method->setAccessible(true);

        $this->assertEquals($expected, $method->invoke($instance, $parameter));
    }

    public function fromWithoutExceptionProvider()
    {
        return [
            [10, 10],
            [100, 100]
        ];
    }

    public function testGetFrom(): void
    {
        $mockedClass = $this->createMock(RawRecipeModel::class);
        $mockedClass->method('getFrom')
            ->willReturn('1');
        $this->assertEquals('1', $mockedClass->getFrom());
    }

    /**
     * @dataProvider toProvider
     *
     * @param $parameter
     * @param $expectedMessage
     * @throws ReflectionException
     */
    public function testSetTo($parameter, $expectedMessage): void
    {
        $reflector = new \ReflectionClass(RawRecipeModel::class);
        $instance  = $reflector->newInstanceWithoutConstructor();
        $method    = $reflector->getMethod('setTo');
        $method->setAccessible(true);
        $this->expectExceptionMessage($expectedMessage);
        $method->invoke($instance, $parameter);
    }

    public function toProvider()
    {
        return [
            [null, 'To field needs to be a numeric value'],
            ['abcd', 'To field needs to be a numeric value'],
            ['abcd123', 'To field needs to be a numeric value']
        ];
    }

    /**
     * @dataProvider toWithoutExceptionProvider
     *
     * @param $parameter
     * @param $expected
     * @throws Exception
     */
    public function testToWithoutException($parameter, $expected): void
    {
        $reflector = new \ReflectionClass(RawRecipeModel::class);
        $instance  = $reflector->newInstanceWithoutConstructor();
        $method    = $reflector->getMethod('setTo');
        $method->setAccessible(true);

        $this->assertEquals($expected, $method->invoke($instance, $parameter));
    }

    public function toWithoutExceptionProvider()
    {
        return [
            [10, 10],
            [100, 100]
        ];
    }

    public function testGetTo(): void
    {
        $mockedClass = $this->createMock(RawRecipeModel::class);
        $mockedClass->method('getTo')
            ->willReturn('20');
        $this->assertEquals('20', $mockedClass->getTo());
    }
}