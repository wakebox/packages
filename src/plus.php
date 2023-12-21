<?php namespace Npack\Hello; 
  class Plus {
  public function __construct($a=””, $b=””)
  {
    $this->result = $a + $b ;
  }
  public function result()
  {
    return $this->result;
  }
}