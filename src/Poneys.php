<?php 
  class Poneys {
      private $count = 8;
      private $max = 18;

      public function setMax( $max )
      {
        $this->max = $max; 
      }

      public function getCount() 
      {
        return $this->count;
      }

      public function removePoneyFromField( $number ) 
      {
        $this->count -= $number;
        if( $this->count < 0 )
        {  
          throw new Exception(negativeValueInField::class);
        }
        else 
          echo "no exception thrown "; 
      }

      public function addPoneyToField( $number ) 
      {
        $this->count += $number;
      }

      public function getNames() 
      {
        // mock is set here
      }

      public function setCount( $poneyquantity )
      {
        $this->count = $poneyquantity; 
      }

      public function isFull()
      {
        return $count > 15; 
      }
  }
?>
