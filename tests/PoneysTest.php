<?php
  require_once 'src/Poneys.php';

  class PoneysTest extends \PHPUnit_Framework_TestCase {

    public function setUp()
    {
      $Poneys = new Poneys();
      $Poneys->setCount( $_ENV['min'] );
      $Poneys->setMax( $_ENV['max'] );
      return $Poneys;
    }

    public function tearDown()
    {
      unset( $this->Poneys );      
    }

    public function test_removePoneyFromField() 
    {
      // Setup
      $Poneys = $this->setUp();

      // Action
      $Poneys->removePoneyFromField(3);
      
      // Assert
      $this->assertEquals( 5, $Poneys->getCount() );

    }

    /**
     * @dataProvider additionProvider
     */
    public function test_removePoneyProvider( $a, $expected ) 
    {
      $Poneys = $this->setUp();
      $Poneys->removePoneyFromField( $a );
      $result = $Poneys->getCount();
      $this->assertEquals( $result, $expected );
    }

    public function additionProvider() {
      return [ [0, 8], [1, 7] ];
    }
 
    public function test_getNamesFromMocks()
    {
        $stub = $this->createMock( Poneys::class );

        $stub->method( 'getNames' )
             ->willReturn( [ ['poneyName1','poneyName'] ] );

        $this->assertEquals( [ ['poneyName1','poneyName'] ], $stub->getNames() );    
    }

    public function testException()
    {
        //$this->expectException( negativeValueInField::class );
    }
    
  }

 ?>
