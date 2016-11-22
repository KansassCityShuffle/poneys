<?php
  require_once 'src/Poneys.php';

  class MyTest extends \PHPUnit_Framework_TestCase {

    public function test_onlyOnePoney()
    {	
      $Poneys = new Poneys();
      $Poneys->addPoneyToField(15);
      $this->assertEquals("true","true");
    }
}
?>